<?php

namespace App\Http\Middleware\User;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class ActiveUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // dd( $request->get('is_active'));
        $id= $request->route('user_id');
        $sql = User::where('id','=',$id)->first('is_active');
        // dd($sql);
        
        // $status = $request->$sql;
        // dd($status);
        if($sql->is_active == '0') {
             abort(404);
        }
        return $next($request);
        

        // if(active()->user()->is_active){
        //     return redirect('user.view');
        // }
        // if (auth()->user()->status == 'active') {
        //     return $next($request);
        // }
        // return response()->json('Your account is inactive');
        // else{
        //     abort(401);
        // }        
        //     if($request->is_active = 1){
        //         return redirect('view');
                
        //     return $next($request);
        //     }
        //     else{
        // // dd('mout');1
        // }
        
            // return redirect('no-access');
    }
}