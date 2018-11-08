<?php
/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/19/2018
 * Time: 01:44 AM
 *
 * File Name: PilotsController.php
 * Project: Foss.lk Sri lanka
 */
namespace App\Http\Controllers;

use Session;
use App\Pilot;
use App\Notifications\NewPilot;
use Illuminate\Notifications\Notification;
use App\User;

use Illuminate\Http\Request;

class PilotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pilots.index')
            ->with('pilots', Pilot::all());
    }

    public function singlePilot($slug)
    {
        $pilot = Pilot::where('slug', $slug)->first();

        return view('admin.pilots.contact')
            ->with('pilot', $pilot)
            ->with('pilots', Pilot::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'university' => 'required',
            'mobile' => 'required',
            'about' => 'required',
            'linkedin' => 'required',
        ]);

        $pilot = (new \App\Pilot)->create([
            'name' => $request->name,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'university' => $request->university,
            'mobile' => $request->mobile,
            'about' => $request->about,
            'slug' => str_slug($request->email),
        ]);

        //Send Notification Email for Admin
        //$user = User::first();
        //$user->notify(new NewPilot("New FOSS Pilot"));

        return redirect()->route('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pilot = Pilot::find($id);
        $pilot->delete();

        Session::flash('success', 'The Pilot was Deleted.');

        return redirect()->back();

    }
}
