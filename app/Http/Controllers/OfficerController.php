<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $request->session()->forget('user_id');
        $request->session()->forget('username');
        $request->session()->forget('br_no');
        $request->session()->forget('level_code');
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
        $data_member = DB::connection('mysql_second')->table('MEM_H_MEMBER')->where([
            ['MEM_ID', '=', $mem_id],
            ['BR_NO', '=', $br_no],
        ])->first();
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
}
