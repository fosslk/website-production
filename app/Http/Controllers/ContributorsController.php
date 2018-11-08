<?php

/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/14/2018
 * Time: 11:20 PM
 *
 * File Name: ContributorsController.php
 * Project: Foss.lk Sri lanka
 */

namespace App\Http\Controllers;
use App\Notifications\NewSlackContributor;
use Session;
use App\Auth;
use App\Contributor;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Notifications\Notification;

class ContributorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contributors.index')->with('contributors', Contributor::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contributors.create');
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
            'avatar' => 'required|image',
        ]);

        $avatar = $request->avatar;

        $avatar_new_name = time().$avatar->getClientOriginalName();

        $avatar->move('uploads/contributors', $avatar_new_name);

        $contributor = Contributor::create([
            'name' => $request->name,
            'about' => $request->about,
            'avatar' => '/uploads/contributors/' . $avatar_new_name,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'github' => $request->github,
            'linkedin' => $request->linkedin,
        ]);


        Session::flash('success', 'Contributor Added succesfully.');

        //Slack Updates
        //$user = User::first();
        //$user->notify(new NewSlackContributor("New Contributor"));

        return redirect()->back();

        return redirect()->back();

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
        $contributor = Contributor::find($id);

        return view('admin.contributors.edit')->with('contributor', $contributor);
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
        $this->validate($request, [
            'name' => 'required'
        ]);

        $contributor = Contributor::find($id);

        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;

            $avatar_new_name = time() . $avatar->getClientOriginalName();

            $avatar->move('uploads/contributors', $avatar_new_name);

            $contributor->avatar = '/uploads/contributors/'.$avatar_new_name;

        }

        $contributor->name = $request->name;
        $contributor->about = $request->about;
        $contributor->facebook = $request->facebook;
        $contributor->twitter = $request->twitter;
        $contributor->github = $request->github;
        $contributor->linkedin = $request->linkedin;

        $contributor->save();


        Session::flash('success', 'Contributor updated successfully.');

        return redirect()->route('contributors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contributor = Contributor::find($id);

        $image_path = public_path().'/'.$contributor->avatar;
        unlink($image_path);

        $contributor->delete();

        Session::flash('success', 'Contributor deleted permanently.');

        return redirect()->back();
    }
}
