<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ตรวจสอบว่ามีข้อมูลใน session หรือไม่
        if (!session()->has('user_id')) {
            // ถ้าไม่มีให้ redirect ไปยังหน้า login
            return redirect('/login');
        }
        return $next($request);
    }
}
