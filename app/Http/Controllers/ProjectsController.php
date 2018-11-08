<?php
/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/17/2018
 * Time: 12:09 AM
 *
 * File Name: ProjectsController.php
 * Project: Foss.lk Sri lanka
 */

namespace App\Http\Controllers;

use App\Notifications\NewSlackProject;
use App\Project;
use Session;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Notifications\Notification;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.projects.index')->with('projects', Project::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
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
            'title' => 'required',
            'featured' => 'required|image',
            'content' => 'required',
        ]);

        $featured = $request->featured;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/projects', $featured_new_name);

        $project = Project::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => '/uploads/projects/' . $featured_new_name,
            'category' => $request->category,
            'slug' => str_slug($request->title),
        ]);

        //Slack Updates
        $user = User::first();
        $user->notify(new NewSlackProject("New Project"));
        return redirect()->back();


        Session::flash('success', 'Project created succesfully.');


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
        $project = Project::find($id);

        return view('admin.projects.edit')->with('project', $project);
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
            'title' => 'required',
            'content' => 'required',
        ]);

        $project = Project::find($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;

            $featured_new_name = time() . $featured->getClientOriginalName();

            $featured->move('uploads/projects', $featured_new_name);

            $project->featured = '/uploads/projects/'.$featured_new_name;

        }

        $project->title = $request->title;
        $project->content = $request->content;
        $project->category = $request->category;

        $project->save();


        Session::flash('success', 'Project updated successfully.');

        return redirect()->route('projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project= Project::find($id);

        $project->delete();

        Session::flash('success', 'The Project was Deleted');

        return redirect()->back();
    }
}
