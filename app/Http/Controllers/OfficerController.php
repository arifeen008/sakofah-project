<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfficerController extends Controller
{
    protected $connection = 'mysql_second';

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
            ->select('MEM_H_MEMBER.MEM_ID', 'MEM_H_MEMBER.BR_NO', 'BK_M_BRANCH.BR_NAME', 'MEM_H_MEMBER.FNAME', 'MEM_H_MEMBER.LNAME')
            ->get();
        return view('officer/member/searchDataMember', compact('data'));
    }

    public function data_member(Request $request)
    {
        // ข้อมูลสมาชิก
        $data_member = DB::connection('mysql_second')->table('MEM_H_MEMBER')
            ->where('MEM_ID', $request->mem_id)
            ->where('BR_NO', $request->br_no)
            ->select('FNAME', 'LNAME', 'ID_CARD', 'DMY_BIRTH', 'SEX', 'FATHER', 'MOTHER', 'MARRIAGE_STATUS', 'BLO_GROUP', 'ADDRESS', 'MOO_ADDR', 'TUMBOL', 'LINE_ID', 'EMAIL', 'MOBILE_TEL')
            ->first();
        // ข้อมูลบัญชีเงินฝาก
        $deposit_member = DB::connection('mysql_second')->table('BK_H_SAVINGACCOUNT')->where([
            ['MEM_ID', '=', $request->mem_id],
            ['BR_NO', '=', $request->br_no],
        ])
            ->select('ACCOUNT_NO', 'ACCOUNT_NAME', 'BALANCE', 'ACCOUNT_NO')
            ->get();
        // ข้อมูลสินเชื่อที่เปิด
        $opened_credit_member = DB::connection('mysql_second')->table('LOAN_M_CONTACT')->where([
            ['LOAN_M_CONTACT.MEM_ID', '=', $request->mem_id],
            ['LOAN_M_CONTACT.BR_NO', '=', $request->br_no],
            ['LOAN_M_CONTACT.LCONT_STATUS_FLAG', '=', '1'],
        ])
            ->join('LOAN_M_REGISTER', function ($join) {
                $join->on('LOAN_M_REGISTER.CODE', '=', 'LOAN_M_CONTACT.CODE');
                $join->on('LOAN_M_REGISTER.BR_NO', '=', 'LOAN_M_CONTACT.BR_NO');
            })
            ->join('LOAN_M_SUB_NAME', function ($join) {
                $join->on('LOAN_M_SUB_NAME.L_TYPE_CODE', '=', 'LOAN_M_CONTACT.L_TYPE_CODE');
                $join->on('LOAN_M_SUB_NAME.LSUB_CODE', '=', 'LOAN_M_CONTACT.LSUB_CODE');
            })
            ->select('LOAN_M_CONTACT.LCONT_ID', 'LOAN_M_SUB_NAME.LSUB_NAME', 'LOAN_M_CONTACT.LCONT_DATE', 'LOAN_M_REGISTER.END_PAYDEPT', 'LOAN_M_CONTACT.LCONT_APPROVE_SAL', 'LOAN_M_CONTACT.LCONT_AMOUNT_INST', 'LOAN_M_CONTACT.LCONT_AMOUNT_SAL', 'LOAN_M_CONTACT.CODE', 'LOAN_M_CONTACT.BR_NO')
            ->orderByDesc('LOAN_M_CONTACT.LCONT_DATE')
            ->get();
        // ข้อมูลสินเชื่อที่ปิด
        $closed_credit_member = DB::connection('mysql_second')->table('LOAN_M_CONTACT')->where([
            ['LOAN_M_CONTACT.MEM_ID', '=', $request->mem_id],
            ['LOAN_M_CONTACT.BR_NO', '=', $request->br_no],
            ['LOAN_M_CONTACT.LCONT_STATUS_FLAG', '=', '4'],
        ])
            ->join('LOAN_M_REGISTER', function ($join) {
                $join->on('LOAN_M_REGISTER.CODE', '=', 'LOAN_M_CONTACT.CODE');
                $join->on('LOAN_M_REGISTER.BR_NO', '=', 'LOAN_M_CONTACT.BR_NO');
            })
            ->join('LOAN_M_SUB_NAME', function ($join) {
                $join->on('LOAN_M_SUB_NAME.L_TYPE_CODE', '=', 'LOAN_M_CONTACT.L_TYPE_CODE');
                $join->on('LOAN_M_SUB_NAME.LSUB_CODE', '=', 'LOAN_M_CONTACT.LSUB_CODE');
            })
            ->select('LOAN_M_CONTACT.LCONT_ID', 'LOAN_M_SUB_NAME.LSUB_NAME', 'LOAN_M_CONTACT.LCONT_DATE', 'LOAN_M_REGISTER.END_PAYDEPT', 'LOAN_M_CONTACT.LCONT_APPROVE_SAL', 'LOAN_M_CONTACT.LCONT_AMOUNT_INST', 'LOAN_M_CONTACT.LCONT_AMOUNT_SAL', 'LOAN_M_CONTACT.CODE', 'LOAN_M_CONTACT.BR_NO')
            ->orderByDesc('LOAN_M_CONTACT.LCONT_DATE')
            ->get();
        // ข้อมูลหุ้น
        $stock_select = DB::connection('mysql_second')->table('SHR_MEM')->where([
            ['SHR_MEM.MEM_ID', '=', $request->mem_id],
            ['SHR_MEM.BR_NO', '=', $request->br_no],
        ])
            ->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO', '=', 'SHR_MEM.BR_NO')
            ->join('WEL_H_MEMBER', function ($join) {
                $join->on('WEL_H_MEMBER.MEM_ID', '=', 'SHR_MEM.MEM_ID');
                $join->on('WEL_H_MEMBER.BR_NO', '=', 'SHR_MEM.BR_NO');
            })
            ->select('SHR_MEM.MEM_ID', 'BK_M_BRANCH.BR_NAME', 'SHR_MEM.SHR_SUM_BTH', 'WEL_H_MEMBER.MEM_AGE_OLD', 'SHR_MEM.POINT_SHR')
            ->first();
        // ข้อมูลอายุหุ้น
        $stock_age = DB::connection('mysql_second')->table('SHR_T_SHARE')->select(DB::raw('SUM(SHR_ADV_COUNT) as total'))->where('MEM_ID', $request->mem_id)->where('BR_NO', $request->br_no)->where('TMP_DATE_REC', '>=', '2019-07-01')->first();
        // ข้อมูลการฝากหุ้น
        $stock_details = DB::connection('mysql_second')->table('SHR_T_SHARE')
            ->where('SHR_T_SHARE.MEM_ID', $request->mem_id)
            ->where('SHR_T_SHARE.BR_NO', $request->br_no)
            ->join('SHR_TBL', 'SHR_T_SHARE.SHR_NO', '=', 'SHR_TBL.SHR_NO')
            ->select('SHR_T_SHARE.SLIP_NO', 'SHR_TBL.SHR_NA', 'SHR_T_SHARE.TMP_SHARE_QTY', 'SHR_T_SHARE.TMP_SHARE_BHT', 'SHR_T_SHARE.TMP_DATE_TODAY', 'SHR_T_SHARE.SHR_SUM_BTH')
            ->orderBy('TMP_DATE_TODAY', 'DESC')
            ->get();
        // ข้อมูลเงินปันผล
        $dividend = DB::connection('mysql_second')->table('SHR_PAY_DIVIDEND')->where([
            ['SHR_PAY_DIVIDEND.MEM_ID', '=', $request->mem_id],
            ['SHR_PAY_DIVIDEND.BR_NO', '=', $request->br_no],
            ['SHR_PAY_DIVIDEND.SHR_YEAR', '=', '2023'],
        ])
            ->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO', '=', 'SHR_PAY_DIVIDEND.BR_NO_PAY')
            ->select('SHR_PAY_DIVIDEND.SHR_YEAR', 'SHR_PAY_DIVIDEND.SHR_OUT_DATE', 'SHR_PAY_DIVIDEND.SHR_SUMUP_DIV', 'BK_M_BRANCH.BR_NAME')
            ->first();
        return view('officer/member/data_member', compact('data_member', 'deposit_member', 'opened_credit_member', 'closed_credit_member', 'stock_select', 'stock_age', 'stock_details', 'dividend'));
    }

    public function account_details(Request $request)
    {
        $account = DB::connection('mysql_second')->table('BK_T_FINANCE')->where('F_FROM_ACC', $request->account_number)->orderByDesc('F_TIME')->get();
        return view('officer/member/account_details', compact('account'));
    }

    public function loan_details(Request $request)
    {
        $loan_select = DB::connection('mysql_second')->table('LOAN_M_CONTACT')
            ->select('LOAN_M_CONTACT.LCONT_ID', 'LOAN_M_CONTACT.L_TYPE_CODE', 'LOAN_M_CONTACT.LSUB_CODE', 'LOAN_M_CONTACT.LCONT_DATE', 'LOAN_M_CONTACT.LCONT_APPROVE_SAL', 'LOAN_M_CONTACT.LCONT_AMOUNT_INST', 'LOAN_M_CONTACT.LCONT_AMOUNT_SAL', 'LOAN_M_REGISTER.END_PAYDEPT', 'LOAN_M_SUB_NAME.LSUB_NAME')
            ->where('LOAN_M_CONTACT.BR_NO', $request->br_no)
            ->where('LOAN_M_CONTACT.CODE', $request->code)
            ->join('LOAN_M_REGISTER', 'LOAN_M_REGISTER.CODE', '=', 'LOAN_M_CONTACT.CODE')
            ->join('LOAN_M_SUB_NAME', function ($join) {
                $join->on('LOAN_M_SUB_NAME.L_TYPE_CODE', '=', 'LOAN_M_CONTACT.L_TYPE_CODE')
                    ->on('LOAN_M_SUB_NAME.LSUB_CODE', '=', 'LOAN_M_CONTACT.LSUB_CODE');
            })
            ->first();
        $loan_detail = DB::connection('mysql_second')->table('LOAN_M_PAYDEPT')->where([
            ['CODE', '=', $request->code],
            ['BR_NO', '=', $request->br_no],
            ['LPD_NUM_INST', '>', '0'],
        ])->orderByDesc('LPD_DATE')->select('LPD_DATE', 'SUM_SAL', 'LCONT_BAL_AMOUNT', 'LPD_NUM_INST')->get();
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
            ->orderByDesc('date')
            ->get();
        return view('officer/publish/publish', compact('data'));
    }

    public function upload_publish()
    {
        return view('officer/publish/upload_publish');
    }

    public function add_publish(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'type_announcement' => 'required',
            'uploadFile' => 'required',
        ]);
        $uploadedFile = $request->file('uploadFile');
        $path = 'file/inside_publish/';
        $hashedFileName = sha1($uploadedFile->getClientOriginalName()) . time() . '.' . $uploadedFile->getClientOriginalExtension();
        if ($uploadedFile->move(public_path($path), $hashedFileName)) {
            DB::table('internal_announcement')->insert([
                'title' => $request->title,
                'date' => $request->date,
                'type_announcement' => $request->type_announcement,
                'uploadfile' => $hashedFileName,
            ]);
        }
        return redirect()->back()->with('success', 'อัพโหลดประกาศเสร็จสิ้น');
    }

    public function edit_publish()
    {
        $data = DB::table('internal_announcement')->get();
        return view('officer/publish/edit_publish', compact('data'));
    }

    // public function update_publish(Request $request)
    // {
    //     $request->validate([
    //         'internal_id' => 'required',
    //         'title' => 'required',
    //         'date' => 'required',
    //         'type_announcement' => 'required',
    //         'uploadFile' => 'required',
    //     ]);
    //     $uploadedFile = $request->file('uploadFile');
    //     $path = 'file/inside_publish/';
    //     $hashedFileName = sha1($uploadedFile->getClientOriginalName()) . '.' . $uploadedFile->getClientOriginalExtension();
    //     $file = DB::table('internal_announcement')->where('internal_id', $request->internal_id)->select('uploadfile')->first();
    //     if (unlink($path . $file->uploadfile) && $uploadedFile->move(public_path($path), $hashedFileName)) {
    //         DB::table('internal_announcement')->insert([
    //             'title' => $request->title,
    //             'date' => $request->date,
    //             'type_announcement' => $request->type_announcement,
    //             'uploadfile' => $hashedFileName,
    //         ]);
    //     }
    // }

    public function delete_publish($internal_id)
    {
        $file = DB::table('internal_announcement')->where('internal_id', $internal_id)->select('uploadfile')->first();
        if (unlink('file/inside_publish/' . $file->uploadfile)) {
            DB::table('internal_announcement')->where('internal_id', $internal_id)->delete();
            return redirect()->back()->with('success', 'Delete this publish success');
        } else {
            return redirect()->back()->with('error', 'Cannot delete this publish');
        }

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

    public function add_performance()
    {
        return view('officer/performance/add_performance');
    }

    public function postPerformance(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        $request->validate([
            'document_name' => 'required',
            'documentFile' => 'required|mimes:xls,xlsx',
        ]);
        $uploadedFile = $request->file('documentFile');
        $hashedFileName = md5($uploadedFile->getClientOriginalName()) . time() . '.' . $uploadedFile->getClientOriginalExtension();
        if ($uploadedFile->move(public_path('file/performance/'), $hashedFileName)) {
            DB::table('credit_upload')->insert([
                'document_name' => $request->document_name,
                'path' => 'file/perfomance/',
                'file_name' => $hashedFileName,
                'date' => date('Y-m-d'),
            ]);
            return redirect()->back()->with('success', 'เพิ่มผลการดำเนินงานแล้ว');
        } else {
            return redirect()->back()->with('error', 'Error');
        }
    }
    public function postcredit(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        $request->validate([
            'memberID' => 'required|max:5',
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
        $hashedFileName = md5($uploadedFile->getClientOriginalName()) . time() . '.' . $uploadedFile->getClientOriginalExtension();
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
        $data = DB::table('credit_consider')->where('credit_consider.username', session('username'))->join('status_credit', 'credit_consider.status_id', '=', 'status_credit.status_id')->get();
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
        $data = DB::table('credit_consider')->where('credit_consider_id', $credit_consider_id)->first();
        return view('officer/credit_consider/creditconsider_detail', compact('data', 'accept', 'reject'));
    }

    public function accept_creditconsider(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        DB::table('credit_consider')->where('credit_consider_id', $request->credit_consider_id)->update([
            'status_id' => $request->result,
        ]);
        DB::table('credit_consider_process')->insert([
            'credit_consider_id' => $request->credit_consider_id,
            'date' => date('Y-m-d H:i:s'),
            'status_id' => $request->result,
        ]);
        return redirect('/creditconsider')->with('success', 'อนุมัติสำเร็จ');
    }

    public function reject_creditconsider(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        DB::table('credit_consider')->where('credit_consider_id', $request->credit_consider_id)->update([
            'status_id' => $request->result,
            'note' => $request->note,
        ]);
        DB::table('credit_consider_process')->insert([
            'credit_consider_id' => $request->credit_consider_id,
            'date' => date('Y-m-d H:i:s'),
            'status_id' => $request->result,
        ]);
        return redirect('/creditconsider')->with('success', 'ปฏิเสธสำเร็จ');
    }

    public function uploadcredit_consider()
    {
        return view('officer/credit_consider/uploadcredit_consider');
    }

    public function postcredit_consider(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        $request->validate([
            'mem_id' => 'required|max:5',
            'firstname' => 'required',
            'lastname' => 'required',
            'loan_type' => 'required',
            'loan_year' => 'required',
            'branch' => 'required',
            'fileInput' => 'required|file|mimes:pdf',
        ]);
        $uploadedFile = $request->file('fileInput');
        $hashedFileName = sha1($uploadedFile->getClientOriginalName()) . time() . '.' . $uploadedFile->getClientOriginalExtension();
        $name_loan = array('', 'ฉุกเฉิน', 'สามัญฉุกเฉิน', 'สามัญ', 'พิเศษ', 'พิเศษโครงการ', 'โครงการสินทรัพย์', 'สวัสดิการเจ้าหน้าที่');
        $code_loan = array('', 'ฉ.', 'สฉ.', 'ส.', 'พ.', 'พค.', 'คส.', 'จท.');
        if ($uploadedFile->move(public_path('file/credit_consider/'), $hashedFileName)) {
            $return_id = DB::table('credit_consider')->insertGetId([
                'username' => session('username'),
                'mem_id' => $request->mem_id,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'loan_year' => $request->loan_year,
                'branch_name' => $request->branch,
                'lnumber_id' => null,
                'loan_type' => $name_loan[$request->loan_type],
                'file_name' => $hashedFileName,
                'status_id' => '1',
                'date' => date('Y-m-d H:i:s'),
                'note' => null,
            ]);
            DB::table('credit_consider')->where('credit_consider_id', $return_id)->update(['lnumber_id' => $code_loan[$request->loan_type] . str_pad($return_id, 7, '0', STR_PAD_LEFT) . '/' . $request->loan_year]);
            $data_process = [
                'credit_consider_id' => $return_id,
                'date' => date('Y-m-d H:i:s'),
                'status_id' => '1',
            ];
            DB::table('credit_consider_process')->insert($data_process);
            return redirect('/credit_consider')->with('success', 'อัพโหลดไฟล์สำเร็จ');
        } else {
            return redirect()->back()->with('error', 'อัพโหลดไฟล์ไม่สำเร็จ');
        }
    }

    public function report_creditconsider()
    {
        $data = DB::table('credit_consider')->join('status_credit', 'status_credit.status_id', '=', 'credit_consider.status_id')->get();
        return view('officer/credit_consider/report_creditconsider', compact('data'));
    }

    public function searchcredit(Request $request)
    {
        $data = DB::table('credit_upload')
            ->select('credit_upload.id_credit', 'credit_upload.mem_id', 'credit_upload.fname', 'credit_upload.lname', 'credit_upload.fullcont_id', 'credit_upload.path', 'credit_upload.file_name', 'credit_upload.name_upload', 'credit_upload.date_upload', 'credit_upload.year', 'branch_name.name_branch', 'credit_type.credit_name')
            ->where('credit_upload.year', $request->year)
            ->where('credit_upload.branch_id', $request->branch_id)
            ->where('credit_upload.credit_id', $request->credit_id)
            ->join('credit_type', 'credit_type.credit_id', '=', 'credit_upload.credit_id')
            ->join('branch_name', 'branch_name.branch_id', '=', 'credit_upload.branch_id')
            ->orderBy('credit_upload.date_upload', 'desc')
            ->get();
        return view('officer/credit/list_credit', compact('data'));
    }

    // public function CreditDownload(Request $request)
    // {
    //     $filename = $request->fullcont_id;
    //     $file = $request->file_name;
    //     $path = $request->path;
    //     if (file_exists($path . '/' . $file)) {
    //         $fileUrl = asset($path . '/' . $file);
    //         return redirect( $fileUrl);
    //     }
    //     else{
    //         return redirect()->back()->with('error','ไฟล์มีปัญหา');
    //     }
    // }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function admin_creditconsider()
    {
        $data = DB::table('status_credit')->get();
        return view('officer/admin/admin_creditconsider', compact('data'));
    }

    public function data_creditconsider()
    {
        $data = DB::table('credit_consider')
            ->join('status_credit', 'status_credit.status_id', '=', 'credit_consider.status_id')
            ->get();
        return view('officer/admin/data_creditconsider', compact('data'));
    }

    public function delete_creditconsider($credit_consider_id)
    {
        $file = DB::table('credit_consider')->where('credit_consider_id', $credit_consider_id)->select('file_name')->first();
        if (unlink('file/credit_consider/' . $file->file_name)) {
            DB::table('credit_consider')->where('credit_consider_id', $credit_consider_id)->delete();
            DB::table('credit_consider_process')->where('credit_consider_id', $credit_consider_id)->delete();
            return redirect()->back()->with('success', 'ลบแล้ว');
        } else {
            return redirect()->back()->with('error', 'ลบไม่ได้');
        }

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
        $data = DB::table('news')->join('news_type', 'news.news_typeid', '=', 'news_type.news_typeid')
            ->select('title', 'news_typename', 'dateupload', 'news_number', 'news_number')->orderByDesc('dateupload')
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
            $hashedFileName = sha1($file->getClientOriginalName()) . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/'), $hashedFileName);
            DB::table('picture')->insert([
                'news_number' => $news_number,
                'picture_name' => $hashedFileName,
            ]);
        }

        $coverImage = $request->file('coverImage');
        $hashedcoverImage = sha1($coverImage->getClientOriginalName()) . time() . '.' . $coverImage->getClientOriginalExtension();
        $coverImage->move(public_path('uploads/'), $hashedcoverImage);
        DB::table('news')->insert([
            'news_number' => $news_number,
            'title' => $request->title,
            'news_typeid' => $request->news_type,
            'dateupload' => $request->date,
            'description' => $request->description,
            'path' => 'uploads/',
            'picture_name' => $hashedcoverImage,
        ]);

        return redirect('/news_upload')->with('success', 'News uploaded successfully.');
    }

    public function edit_news($news_number)
    {
        $news = DB::table('news')->where('news_number', $news_number)->first();
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
            if (file_exists(public_path('uploads/' . $item->picture_name))) {
                unlink('uploads/' . $item->picture_name);
            }
        }
        DB::table('news')->where('news_number', $news_number)->delete();
        DB::table('picture')->where('news_number', $news_number)->delete();
        return redirect()->back()->with('success', 'Delete Success');
    }

    public function admin_credit()
    {
        $data = DB::table('credit_upload')
            ->join('credit_type', 'credit_type.credit_id', '=', 'credit_upload.credit_id')
            ->join('branch_name', 'branch_name.branch_id', '=', 'credit_upload.branch_id')
            ->get();
        return view('officer/admin/admin_credit', compact('data'));
    }

    public function admin_delete_credit($id_credit)
    {
        $data = DB::table('credit_upload')->where('id_credit', $id_credit)->select('path', 'file_name')->first();
        unlink($data->path . '/' . $data->file_name);
        DB::table('credit_upload')->where('id_credit', $id_credit)->delete();
        return redirect()->back()->with('success', 'Delete Success');
    }

    public function login_history()
    {
        $data = DB::table('signin_history')->orderByDesc('login_time')
            ->join('branch_name', 'branch_name.branch_id', '=', 'signin_history.branch_id')
            ->select('signin_history.user_id', 'signin_history.branch_id', 'branch_name.name_branch', 'signin_history.user_name', 'signin_history.login_time', 'signin_history.ip_address')
            ->get();
        return view('officer/admin/login_history', compact('data'));
    }

    public function login_history_person($user_id, $br_no)
    {
        $officer = DB::table('signin_history')->where('user_id', $user_id)->where('branch_id', $br_no)->select('user_name')->first();
        $data = DB::table('signin_history')->orderByDesc('login_time')->where('user_id', $user_id)->where('branch_id', $br_no)->get();
        return view('officer/admin/login_history_person', compact('data', 'officer'));
    }

    public function all_officer()
    {
        $data = DB::connection('mysql_second')->table('BK_H_TELLER_CONTROL')
            ->join('BK_M_BRANCH', 'BK_M_BRANCH.BR_NO', '=', 'BK_H_TELLER_CONTROL.BR_NO')
            ->select('BK_H_TELLER_CONTROL.USER_ID', 'BK_H_TELLER_CONTROL.BR_NO', 'BK_M_BRANCH.BR_NAME', 'BK_H_TELLER_CONTROL.USER_NAME')->get();
        return view('officer/admin/all_officer', compact('data'));
    }

    public function asset_list()
    {
        $data = DB::table('asset')->join('asset_type', 'asset.asset_type', '=', 'asset_type.asset_type')->get();
        return view('officer/asset/asset', compact('data'));
    }

    public function add_asset()
    {
        return view('officer/asset/add_asset');
    }

    public function uploadAsset(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        $request->validate([
            'title' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'contact' => 'required',
            'asset_type' => 'required',
            'coverImage' => 'required',
            'Images' => 'required',
        ]);

        $uploadedFile = $request->file('coverImage');
        $hashedFileName = sha1($uploadedFile->getClientOriginalName()) . time() . '.' . $uploadedFile->getClientOriginalExtension();
        $asset_id = DB::table('asset')->insertGetId([
            'title' => $request->title,
            'description1' => $request->description1,
            'description2' => $request->description2,
            'contact' => $request->contact,
            'asset_type' => $request->asset_type,
            'picture_name' => $hashedFileName,
            'date' => date('Y-m-d'),
        ]);
        foreach ($request->file('Images') as $file) {
            $hashedFileName = sha1($file->getClientOriginalName()) . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('asset/'), $hashedFileName);
            DB::table('asset_picture')->insert([
                'asset_number' => $asset_id,
                'picture_name' => $hashedFileName,
            ]);
        }
        return redirect('/asset_list')->with('success', 'เพิ่มสำเร็จ');
    }

    public function delete_asset($asset_number)
    {
        $picture_name = DB::table('asset_picture')->where('asset_number', $asset_number)->select('picture_name')->get();
        foreach ($picture_name as $item) {
            unlink('asset/' . $item->picture_name);
        }
        DB::table('asset')->where('asset_number', $asset_number)->delete();
        DB::table('asset_picture')->where('asset_number', $asset_number)->delete();
        return redirect()->back()->with('success', 'Delete Success');
    }

    public function report($data = null)
    {
        return view('officer/report/report', compact('data'));
    }

    public function summaryReport(Request $request)
    {
        $request->validate(['month' => 'required', 'year' => 'required']);
        $month = $request->month;
        $year = $request->year;
        $date = Carbon::create($year, $month, 1, 0, 0, 0);
        if ($date->month >= 7) {
            $date->addYear();
            $month = $date->month;
            $year = $date->year;
        }
        $common_in = DB::connection('mysql_second')->table('MEM_H_MEMBER')->whereMonth('MEM_DATE', $month)->whereYear('MEM_DATE', $year)->where('MEMTYPE_ID', '1')->count();
        $common_out = DB::connection('mysql_second')->table('MEM_H_MEMBER')->whereMonth('TRIED_DATE', $month)->whereYear('TRIED_DATE', $year)->where('MEMTYPE_ID', '1')->count();
        $associated_in = DB::connection('mysql_second')->table('MEM_H_MEMBER')->whereMonth('MEM_DATE', $month)->whereYear('MEM_DATE', $year)->where('MEMTYPE_ID', '2')->count();
        $associated_out = DB::connection('mysql_second')->table('MEM_H_MEMBER')->whereMonth('TRIED_DATE', $month)->whereYear('TRIED_DATE', $year)->where('MEMTYPE_ID', '2')->count();
        return view('officer/report/report', compact('common_in', 'common_out', 'associated_in', 'associated_out'));
    }
}
