<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OfficerController extends Controller
{
    protected $connection = 'mysql_second';

    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'password' => 'required',
        ], [
            'user_id.required' => 'ใส่ username',
            'password.required' => 'ใส่ password',
        ]);
        $data = DB::connection('mysql_second')->table('bk_h_teller_control')->where('user_id', $request->user_id)->where('password', $request->password)->first();

        if (!empty($data)) {
            $request->session()->put('user_id', $data->USER_ID);
            $request->session()->put('username', $data->USER_NAME);
            $request->session()->put('br_no', $data->BR_NO);
            $request->session()->put('level_code', $data->LEVEL_CODE);
            return view('officer/member/searchMember');
        }
        return redirect()->back()->withErrors(['user_id' => 'Invalid credentials']);

    }

    public function logout(Request $request)
    {
        // $request->session()->forget('user_id');
        // $request->session()->forget('username');
        // $request->session()->forget('br_no');
        // $request->session()->forget('level_code');
        Auth::logout();
        return redirect('/');
    }

    public function member()
    {
        return view('officer/member/searchMember');
    }

    public function searchMember(Request $request)
    {
        $data = DB::connection('mysql_second')->table('MEM_H_MEMBER')
            ->where([
                ['MEM_H_MEMBER.ID_CARD', 'like', '%' . $request->idCardNumber . '%'],
                ['MEM_H_MEMBER.MEM_ID', 'like', '%' . $request->memberNumber . '%'],
                ['MEM_H_MEMBER.BR_NO', 'like', '%' . $request->branch . '%'],
                ['MEM_H_MEMBER.FNAME', 'like', '%' . $request->firstName . '%'],
                ['MEM_H_MEMBER.LNAME', 'like', '%' . $request->lastName . '%'],
            ])->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO', '=', 'MEM_H_MEMBER.BR_NO')
            ->get();
        return view('officer/member/searchDataMember', compact('data'));

    }

    public function data_member($mem_id, $br_no)
    {
        $data_member = DB::connection('mysql_second')->table('MEM_H_MEMBER')
            ->select('FNAME', 'LNAME', 'ID_CARD', 'DMY_BIRTH', 'SEX', 'FATHER', 'MOTHER', 'MARRIAGE_STATUS', 'BLO_GROUP', 'ADDRESS', 'MOO_ADDR', 'TUMBOL', 'LINE_ID', 'EMAIL', 'MOBILE_TEL')
            ->where('MEM_ID', $mem_id)
            ->where('BR_NO', $br_no)
            ->first();
        $deposit_member = DB::connection('mysql_second')->table('BK_H_SAVINGACCOUNT')->where([
            ['MEM_ID', '=', $mem_id],
            ['BR_NO', '=', $br_no],
        ])->get();
        $opened_credit_member = DB::connection('mysql_second')->table('LOAN_M_CONTACT')->where([
            ['LOAN_M_CONTACT.MEM_ID', '=', $mem_id],
            ['LOAN_M_CONTACT.BR_NO', '=', $br_no],
            ['LOAN_M_CONTACT.LCONT_STATUS_FLAG', '=', '1'],
        ])
            ->join('LOAN_M_REGISTER', 'LOAN_M_REGISTER.CODE', '=', 'LOAN_M_CONTACT.CODE')
            ->join('LOAN_M_SUB_NAME', function ($join) {
                $join->on('LOAN_M_SUB_NAME.L_TYPE_CODE', '=', 'LOAN_M_CONTACT.L_TYPE_CODE');
                $join->on('LOAN_M_SUB_NAME.LSUB_CODE', '=', 'LOAN_M_CONTACT.LSUB_CODE');
            })->get();
        $closed_credit_member = DB::connection('mysql_second')->table('LOAN_M_CONTACT')->where([
            ['LOAN_M_CONTACT.MEM_ID', '=', $mem_id],
            ['LOAN_M_CONTACT.BR_NO', '=', $br_no],
            ['LOAN_M_CONTACT.LCONT_STATUS_FLAG', '=', '4'],
        ])
            ->join('LOAN_M_REGISTER', 'LOAN_M_REGISTER.CODE', '=', 'LOAN_M_CONTACT.CODE')
            ->join('LOAN_M_SUB_NAME', function ($join) {
                $join->on('LOAN_M_SUB_NAME.L_TYPE_CODE', '=', 'LOAN_M_CONTACT.L_TYPE_CODE');
                $join->on('LOAN_M_SUB_NAME.LSUB_CODE', '=', 'LOAN_M_CONTACT.LSUB_CODE');
            })->get();
        $stock_select = DB::connection('mysql_second')->table('SHR_MEM')->where([
            ['SHR_MEM.MEM_ID', '=', $mem_id],
            ['SHR_MEM.BR_NO', '=', $br_no],
        ])
            ->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO', '=', 'SHR_MEM.BR_NO')
            ->join('WEL_H_MEMBER', function ($join) {
                $join->on('WEL_H_MEMBER.MEM_ID', '=', 'SHR_MEM.MEM_ID');
                $join->on('WEL_H_MEMBER.BR_NO', '=', 'SHR_MEM.BR_NO');
            })->first();
        $stock_age = DB::connection('mysql_second')->table('SHR_T_SHARE')
            ->select(DB::raw('SUM(SHR_ADV_COUNT) as total'))
            ->where('MEM_ID', $mem_id)
            ->where('BR_NO', $br_no)
            ->where('TMP_DATE_REC', '>=', '2019-07-01')
            ->first();
        $stock_details = DB::connection('mysql_second')->table('SHR_T_SHARE')
            ->select('SHR_T_SHARE.SLIP_NO', 'SHR_TBL.SHR_NA', 'SHR_T_SHARE.TMP_SHARE_QTY', 'SHR_T_SHARE.TMP_SHARE_BHT', 'SHR_T_SHARE.TMP_DATE_TODAY', 'SHR_T_SHARE.SHR_SUM_BTH')
            ->where('SHR_T_SHARE.MEM_ID', $mem_id)
            ->where('SHR_T_SHARE.BR_NO', $br_no)
            ->join('SHR_TBL', 'SHR_T_SHARE.SHR_NO', '=', 'SHR_TBL.SHR_NO')
            ->orderBy('TMP_DATE_TODAY', 'DESC')
            ->get();
        $dividend = DB::connection('mysql_second')->table('SHR_PAY_DIVIDEND')->where([
            ['SHR_PAY_DIVIDEND.MEM_ID', '=', $mem_id],
            ['SHR_PAY_DIVIDEND.BR_NO', '=', $br_no],
            ['SHR_PAY_DIVIDEND.SHR_YEAR', '=', '2021'],
        ])
            ->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO', '=', 'SHR_PAY_DIVIDEND.BR_NO')
            ->join('SHR_MEM_PROCESS', function ($join) {
                $join->on('SHR_MEM_PROCESS.MEM_ID', '=', 'SHR_PAY_DIVIDEND.MEM_ID');
                $join->on('SHR_MEM_PROCESS.BR_NO', '=', 'SHR_PAY_DIVIDEND.BR_NO');
            })
            ->first();
        return view('officer/member/data_member', compact('data_member', 'deposit_member', 'opened_credit_member', 'closed_credit_member', 'stock_select', 'stock_age', 'stock_details', 'dividend'));
    }

    public function account_details($account_number)
    {
        $account = DB::connection('mysql_second')->table('BK_T_FINANCE')->where('F_FROM_ACC', $account_number)->orderByDesc('F_TIME')->get();
        return view('officer/member/account_details', compact('account'));
    }

    public function loan_details($code, $br_no)
    {
        $loan_select = DB::connection('mysql_second')->table('LOAN_M_CONTACT')
            ->select('LOAN_M_CONTACT.LCONT_ID', 'LOAN_M_CONTACT.L_TYPE_CODE', 'LOAN_M_CONTACT.LSUB_CODE', 'LOAN_M_CONTACT.LCONT_DATE', 'LOAN_M_CONTACT.LCONT_APPROVE_SAL', 'LOAN_M_CONTACT.LCONT_AMOUNT_INST', 'LOAN_M_CONTACT.LCONT_AMOUNT_SAL', 'LOAN_M_REGISTER.END_PAYDEPT', 'LOAN_M_SUB_NAME.LSUB_NAME')
            ->where('LOAN_M_CONTACT.BR_NO', $br_no)
            ->where('LOAN_M_CONTACT.CODE', $code)
            ->join('LOAN_M_REGISTER', 'LOAN_M_REGISTER.CODE', '=', 'LOAN_M_CONTACT.CODE')
            ->join('LOAN_M_SUB_NAME', function ($join) {
                $join->on('LOAN_M_SUB_NAME.L_TYPE_CODE', '=', 'LOAN_M_CONTACT.L_TYPE_CODE')
                    ->on('LOAN_M_SUB_NAME.LSUB_CODE', '=', 'LOAN_M_CONTACT.LSUB_CODE');
            })
            ->first();
        $loan_detail = DB::connection('mysql_second')->table('LOAN_M_PAYDEPT')->where([
            ['CODE', '=', $code],
            ['BR_NO', '=', $br_no],
            ['LPD_NUM_INST', '>', '0'],
        ])->orderBy('LPD_DATE', 'asc')->select('LPD_DATE', 'SUM_SAL', 'LCONT_BAL_AMOUNT', 'LPD_NUM_INST')->get();
        return view('officer/member/loan_details', compact('loan_detail', 'loan_select'));
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function credit()
    {
        return view('officer/credit/search_credit');
    }

    public function uploadcredit()
    {
        return view('officer/credit/upload_credit');
    }

    public function publish()
    {
        $data = DB::table('internal_announcement')->select('internal_id', 'title', 'date', 'uploadfile')
            ->where('type_announcement', 2)
            ->orderBy('date', 'desc')
            ->get();
        return view('officer/publish/publish', compact('data'));
    }

    public function rules()
    {
        return view('officer/rules/rules');
    }
    public function order()
    {
        return view('officer/order/order');
    }

    public function form()
    {
        $data = DB::table('internal_announcement')
            ->select('internal_id', 'title', 'date', 'uploadfile')
            ->where('type_announcement', 1)
            ->orderBy('date', 'DESC')
            ->get();
        return view('officer/form/form', compact('data'));
    }

    public function performance()
    {
        $data = DB::table('performance')->get();
        return view('officer/performance/performance', compact('data'));
    }

    public function postcredit(Request $request)
    {
        $request->validate([
            'memberID' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'contractNumber' => 'required',
            'contractYear' => 'required',
            'branch' => 'required',
            'contractType' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx',
        ]);
        $uploadedFile = $request->file('file');
        $path = 'file/credit_folder/' . $request->contractYear . '/' . $request->branch . '/' . $request->contractType;
        $hashedFileName = md5($uploadedFile->getClientOriginalName()) . '.' . $uploadedFile->getClientOriginalExtension();
        if ($uploadedFile->move(public_path($path), $hashedFileName)) {
            $data = [
                'mem_id' => $request->memberID,
                'fname' => $request->firstName,
                'lname' => $request->lastName,
                'fullcont_id' => $request->contractNumber,
                'branch_id' => $request->branch,
                'credit_id' => $request->contractType,
                'year' => $request->contractYear,
                'file_name' => $hashedFileName,
                'path' => $path,
                'name_upload' => session('username'),
                'date_upload' => date('Y-m-d'),
            ];
            DB::table('credit_upload')->insert($data);
            return redirect()->back()->with('success', 'อัพโหลดไฟล์สำเร็จ');
        } else {
            return redirect()->back()->with('error', 'อัพโหลดไฟล์ไม่สำเร็จ');
        }

    }
    public function creditconsider_process($credit_consider_id)
    {
        $data = DB::table('credit_consider_process')->where('credit_consider_process.credit_consider_id', $credit_consider_id)
            ->join('status_credit', 'status_credit.status_id', '=', 'credit_consider_process.status_id')
            ->orderByDesc('credit_consider_process.date')->get();
        return view('officer/credit_consider/credit_consider_process', compact('data'));

    }

    public function credit_consider()
    {
        $data = DB::table('credit_consider')
            ->where('credit_consider.username', session('username'))
            ->join('status_credit', 'credit_consider.status_id', '=', 'status_credit.status_id')
            ->join('credit_type', 'credit_consider.loan_id', '=', 'credit_type.credit_id')
            ->join('branch_name', 'credit_consider.branch_id', '=', 'branch_name.branch_id')
            ->orderBy('credit_consider.date', 'desc')
            ->get();
        return view('officer/credit_consider/credit_consider', compact('data'));
    }

    public function creditconsider()
    {
        switch (session('level_code')) {
            case 'CC':
                $status_id = 1;
                break;
            case 'CRM':
                $status_id = 2;
                break;
            case 'M':
                $status_id = 4;
                break;
            default:
                $status_id = 1;
                break;
        }
        $data = DB::table('credit_consider')->where('credit_consider.status_id', $status_id)
            ->join('branch_name', 'branch_name.branch_id', '=', 'credit_consider.branch_id')
            ->join('credit_type', 'credit_type.credit_id', '=', 'credit_consider.loan_id')
            ->join('status_credit', 'status_credit.status_id', '=', 'credit_consider.status_id')
            ->orderByDesc('credit_consider.date')->get();
        return view('officer/credit_consider/creditconsider', compact('data'));
    }

    public function creditconsider_detail($credit_consider_id)
    {
        switch (session('level_code')) {
            case 'CC':
                $accept = 2;
                $reject = 3;
                break;
            case 'CRM':
                $accept = 4;
                $reject = 5;
                break;
            case 'M':
                $accept = 6;
                $reject = 7;
                break;
            default:
                $accept = 2;
                $reject = 3;
                break;
        }
        $data = DB::table('credit_consider')->where('credit_consider_id', $credit_consider_id)
            ->join('branch_name', 'branch_name.branch_id', '=', 'credit_consider.branch_id')
            ->join('credit_type', 'credit_type.credit_id', '=', 'credit_consider.loan_id')
            ->first();
        return view('officer/credit_consider/creditconsider_detail', compact('data', 'accept', 'reject'));
    }

    public function result_creditconsider(Request $request)
    {
        DB::table('credit_consider')->where('credit_consider_id', $request->credit_consider_id)->update([
            'status_id' => $request->result,
        ]);
        $data = [
            'credit_consider_id' => $request->credit_consider_id,
            'date' => date('Y-m-d H:i:s'),
            'status_id' => $request->result,
        ];
        DB::table('credit_consider_process')->insert($data);
        return redirect('/creditconsider')->with('success', 'สำเร็จ');
    }

    public function uploadcredit_consider()
    {
        return view('officer/credit_consider/uploadcredit_consider');
    }

    public function postcredit_consider(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        $request->validate([
            'memberID' => 'required|max:5',
            'firstName' => 'required',
            'lastName' => 'required',
            'loanID' => 'required',
            'loanYear' => 'required',
            'branch' => 'required',
            'fileInput' => 'required|file|mimes:pdf',
        ]);
        $uploadedFile = $request->file('fileInput');
        $path = 'file/credit_consider/' . $request->loanYear . '/' . $request->branch . '/' . $request->loanID;
        $hashedFileName = sha1($uploadedFile->getClientOriginalName()) . '.' . $uploadedFile->getClientOriginalExtension();
        $status_id = '1';
        if ($uploadedFile->move(public_path($path), $hashedFileName)) {
            $data = [
                'username' => session('username'),
                'mem_id' => $request->memberID,
                'fname' => $request->firstName,
                'lname' => $request->lastName,
                'loan_year' => $request->loanYear,
                'branch_id' => $request->branch,
                'lnumber_id' => null,
                'loan_id' => $request->loanID,
                'path' => $path,
                'file_name' => $hashedFileName,
                'status_id' => $status_id,
                'date' => date('Y-m-d H:i:s'),
                'note' => null,
            ];
            $return_id = DB::table('credit_consider')->insertGetId($data);
            $code_loan = array('', 'ฉ.', 'สฉ.', 'ส.', 'พ.', 'พค.', 'คส.', 'จท.');
            DB::table('credit_consider')->where('credit_consider_id', $return_id)->update(['lnumber_id' => $code_loan[$request->loanID] . str_pad($return_id, 7, '0', STR_PAD_LEFT) . '/' . $request->loanYear]);
            $data_process = [
                'credit_consider_id' => $return_id,
                'date' => date('Y-m-d H:i:s'),
                'status_id' => $status_id,
            ];
            DB::table('credit_consider_process')->insert($data_process);
            return redirect('/credit_consider')->with('success', 'อัพโหลดไฟล์สำเร็จ');
        } else {
            return redirect()->back()->with('error', 'อัพโหลดไฟล์ไม่สำเร็จ');
        }
    }

    public function report_creditconsider()
    {
        $data = DB::table('credit_consider')
            ->join('branch_name', 'branch_name.branch_id', '=', 'credit_consider.branch_id')
            ->join('credit_type', 'credit_type.credit_id', '=', 'credit_consider.loan_id')
            ->join('status_credit', 'status_credit.status_id', '=', 'credit_consider.status_id')
            ->get();
        return view('officer/credit_consider/report_creditconsider', compact('data'));
    }

    public function searchcredit(Request $request)
    {
        $data = DB::table('credit_upload')->select('credit_upload.id_credit', 'credit_upload.mem_id', 'credit_upload.fname', 'credit_upload.lname', 'credit_upload.fullcont_id', 'credit_upload.path', 'credit_upload.name_upload', 'credit_upload.date_upload', 'credit_upload.year', 'branch_name.name_branch', 'credit_type.credit_name')
            ->where('credit_upload.year', $request->year)
            ->where('credit_upload.branch_id', $request->branch_id)
            ->where('credit_upload.credit_id', $request->credit_id)
            ->join('credit_type', 'credit_type.credit_id', '=', 'credit_upload.credit_id')
            ->join('branch_name', 'branch_name.branch_id', '=', 'credit_upload.branch_id')
            ->orderBy('credit_upload.date_upload', 'desc')
            ->get();
        return view('officer/credit/list_credit', compact('data'));
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function admin_creditconsider()
    {
        $data = DB::table('status_credit')->get();
        return view('officer/admin/admin_creditconsider', compact('data'));
    }

    public function status_form_add()
    {
        return view('officer/admin/status_form_add');
    }

    public function add_status(Request $request)
    {
        DB::table('status_credit')->insert([
            'status_name' => $request->status_name]);
        return redirect()->back()->with('success', 'เพิ่มสำเร็จ');
    }

    public function status_form_edit($status_id)
    {
        $data = DB::table('status_credit')->where('status_id', $status_id)->first();
        return view('officer/admin/status_form_edit', compact('data'));
    }

    public function update_status(Request $request)
    {
        DB::table('status_credit')->where('status_id', $request->status_id)->update([
            'status_name' => $request->status_name]);
        return redirect('/admin_creditconsider')->with('success', 'แก้ไขสำเร็จ');
    }

    public function status_form_delete($status_id)
    {
        DB::table('status_credit')->where('status_id', $status_id)->delete();
        return redirect()->back()->with('success', 'ลบสำเร็จ');
    }

    public function news_upload()
    {
        $data = DB::table('news')
            ->join('news_type', 'news_type.news_typeid', '=', 'news.news_typeid')->orderByDesc('dateupload')
            ->get();
        return view('officer/news_upload/news', compact('data'));
    }

    public function add_news()
    {
        return view('officer/news_upload/add_news');
    }

    public function upload_news(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'news_type' => 'required',
            'date' => 'required',
            'description' => 'required',
            'coverImage' => 'required|file|mimes:jpeg,png,jpg,gif',
            'uploadedFiles.*' => 'required|file|mimes:jpeg,png,jpg,gif',
        ]);

        do {
            $news_number = mt_rand(1, 10000);
            $data = DB::table('news')->where('news_number', $news_number)->first();
        } while ($data != null);
        foreach ($request->file('uploadedFiles') as $file) {
            $hashedFileName = sha1($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/'), $hashedFileName);
            DB::table('picture')->insert([
                'news_number' => $news_number,
                'picture_name' => $hashedFileName,
            ]);
        }

        DB::table('news')->insert([
            'news_number' => $news_number,
            'title' => $request->title,
            'news_typeid' => $request->news_type,
            'dateupload' => $request->date,
            'description' => $request->description,
            'path' => 'uploads/',
            'picture_name' => $hashedFileName = sha1($request->coverImage->getClientOriginalName()) . '.' . $request->coverImage->getClientOriginalExtension(),
        ]);

        return redirect('/news_upload')->with('success', 'News uploaded successfully.');
    }

    public function edit_news($news_number)
    {
        $news = DB::table('news')->where('news_number', $news_number)->first();
        // dd($news);
        return view('officer/news_upload/edit_news', compact('news'));
    }

    public function update_news(Request $request)
    {
        DB::table('news')->where('news_number', $request->news_number)->update([
            'title' => $request->title,
            'news_typeid' => $request->news_type,
            'dateupload' => $request->date,
            'description' => $request->description,
        ]);
        return redirect('/news_upload')->with('success', 'แก้ไขข่าวเสร๊จสิ้น.');
    }

    public function delete_news($news_number)
    {
        $picture_name = DB::table('picture')->where('news_number', $news_number)->select('picture_name')->get();
        foreach ($picture_name as $item) {
            unlink('uploads/' . $item->picture_name);
        }
        DB::table('news')->where('news_number', $news_number)->delete();
        DB::table('picture')->where('news_number', $news_number)->delete();
        return redirect()->back()->with('success', 'Delete Success');
    }

}
