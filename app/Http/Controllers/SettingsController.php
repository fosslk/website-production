<?php
/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/13/2018
 * Time: 8:48 PM
 *
 * File Name: SettingsController.php
 * Project: Foss.lk Sri lanka
 */
namespace App\Http\Controllers;

use Session;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.settings.settings')->with('settings', Setting::first());
    }

    public function update(Request $request)
    {
        $this->validate(request(), [
            'site_name' => 'required',
            'site_description' => 'required',
            'contact_number' => 'required',
            'contact_email' => 'required',
            'address' => 'required'
        ]);



        $settings = Setting::first();



        if($request->hasFile('logo'))
        {
            $logo = $request->logo;

            $logo_new_name = time() . $logo->getClientOriginalName();

            $logo->move('uploads/logo', $logo_new_name);

            $settings->logo = 'uploads/logo/'.$logo_new_name;

        }


        $settings->site_name = request()->site_name;
        $settings->site_description = request()->site_description;
        $settings->address = request()->address;
        $settings->contact_email = request()->contact_email;
        $settings->contact_number = request()->contact_number;

        $settings->save();

        Session::flash('success','Settings updated.');

        return redirect()->back();
    }
}
