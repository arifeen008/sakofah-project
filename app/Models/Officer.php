<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Officer extends Model
{
    use HasFactory;

    public function login(Request $request)
    {
        // $data = DB::connection('mysql_second')->table('bk_h_teller_control')->where('user_id', $request->user_id)->where('password', $request->password)->first();
        // return $data;

        // Validate the user's login credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        if (auth()->attempt($credentials)) {
            // Authentication passed...

            // Get the authenticated user
            $user = auth()->user();

            // Store user data in the session
            $request->session()->put('user', $user);

            // Redirect to the desired location
            return redirect()->intended('/dashboard');
        }

        // Authentication failed...
        return back()->withErrors(['email' => 'Invalid login credentials']);
    }
}
