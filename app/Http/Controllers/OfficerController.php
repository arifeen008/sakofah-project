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
            return view('officer/officer/search_member/search_member');
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

    public function officer()
    {
        return view('officer.search_member.search_member');
    }
}
