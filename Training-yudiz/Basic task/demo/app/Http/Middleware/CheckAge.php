<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
        if(session()->has('user_id')){
            echo "Logged in successfully and Welcome to dashboard!! "; 
            if($request->age <18){
                    echo "This page is for 18+ user age.";
                }
            return $next($request);
        }else{
            // dd('mout');1
            return redirect('no-access');
        }
        // if($request->age <18){
        //     // 
        //     echo "This page is for 18+ user age.";
        //     die;
        // }

        // if ($request->input('token') !== 'my-secret-token') {
        //     return redirect('welcome');
        // }

        return $next($request);
    }
    public function terminate($request,$response){
        echo "<br>Executing statements of terminate method of Terminate Function.<br>shutting down";
    }
}
