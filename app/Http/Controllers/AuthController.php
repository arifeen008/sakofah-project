<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        $request->validate([
            'user_id' => 'required',
            'password' => 'required',
        ], [
            'user_id.required' => 'กรุณาใส่ username',
            'password.required' => 'กรุณาใส่ password',
        ]);

        $data = DB::connection('mysql_second')->table('bk_h_teller_control')
            ->where([
                'user_id' => $request->user_id,
                'password' => $request->password,
            ])->select('USER_ID', 'BR_NO', 'USER_NAME', 'LEVEL_CODE')->first();
        if (!empty($data)) {
            $request->session()->put('user_id', $data->USER_ID);
            $request->session()->put('username', $data->USER_NAME);
            $request->session()->put('br_no', $data->BR_NO);
            $request->session()->put('level_code', $data->LEVEL_CODE);
            $userAgent = $request->header('User-Agent');
            $agent = new \Jenssegers\Agent\Agent();
            $agent->setUserAgent($userAgent);
            DB::table('signin_history')->insert([
                'user_id' => $data->USER_ID,
                'branch_id' => $data->BR_NO,
                'user_name' => $data->USER_NAME,
                'login_time' => date('Y-m-d H:i:s'),
                'ip_address' => $request->ip(),
                'browser' => $agent->browser(),
                'version' => $agent->version($agent->browser()),
                'platform' => $agent->platform(),
            ]);
            return view('officer/member/searchMember');
        }

        return redirect()->back()->with('error', 'Username กับ Password ไม่ถูกต้อง');

    }

    public function logout(Request $request)
    {
        session()->flush();
        return redirect('/');
    }
}
