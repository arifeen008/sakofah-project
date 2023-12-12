<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Officer;

class OfficerController extends Controller
{
    protected $connection = 'mysql_second';
    public function login(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'password' => 'required',
        ], [
            'user_id.required' => 'ใส่ username',
            'password.required' => 'ใส่ password',
        ]);

        $data = [
            'user_id' => $request->user_id,
            'password' => $request->password,
        ];

        $result = DB::connection('mysql_second')->table('bk_h_teller_control')->where('user_id', $request->user_id)->where('password', $request->password)->first();
        dd($result);
    }
}
