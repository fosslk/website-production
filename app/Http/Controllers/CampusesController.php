<?php

namespace App\Http\Controllers;

use App\Campus;
use Illuminate\Http\Request;
use Session;
use App\User;
use Illuminate\Notifications\Notification;

class CampusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.campuses.index')->with('campuses', Campus::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.campuses.create');
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
            'featured' => 'required|image',
            'about' => 'required|max:300',
        ]);

        $featured = $request->featured;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/campuses', $featured_new_name);

        $campus = Campus::create([
            'name' => $request->name,
            'content' => $request->content,
            'featured' => '/uploads/campuses/' . $featured_new_name,
            'slug' => str_slug($request->name),
            'about' => $request->about,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'github' => $request->github,
            'linkedin' => $request->linkedin,

        ]);

        //Slack Updates
        //$user = User::first();
        //$user->notify(new NewSlackCampus("New Campus"));
        return redirect()->back();


        Session::flash('success', 'Campus created succesfully.');


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
        $campus = Campus::find($id);

        return view('admin.campuses.edit')->with('campus', $campus);
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
            'name' => 'required',
            'about' => 'required|max:300'
        ]);

        $campus = Campus::find($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;

            $featured_new_name = time() . $featured->getClientOriginalName();

            $featured->move('uploads/campuses', $featured_new_name);

            $post->featured = '/uploads/campuses/'.$featured_new_name;

        }

        $campus->name = $request->name;
        $campus->about = $request->about;
        $campus->content = $request->content;
        $campus->facebook = $request->facebook;
        $campus->twitter = $request->twitter;
        $campus->github = $request->github;
        $campus->linkedin = $request->linkedin;

        $campus->save();


        Session::flash('success', 'Campus updated successfully.');

        return redirect()->route('campuses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campus = Campus::find($id);

        $campus->delete();

        Session::flash('success', 'Campus deleted permanently.');

        return redirect()->back();
    }
}
