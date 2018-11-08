<?php
/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/13/2018
 * Time: 8:55 PM
 *
 * File Name: Admin.php
 * Project: Foss.lk Sri lanka
 */

namespace App\Http\Middleware;

use Auth;
use Session;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!Auth::user()->admin)
        {
            Session::flash('info', 'You do not have permissions to perform this action.');

            return redirect()->back();
        }

        return $next($request);

    }
}
