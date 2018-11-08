<?php

/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/22/2018
 * Time: 12:48 AM
 *
 * File Name: BlogsController.php
 * Project: Foss.lk Sri lanka
 */

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Blog;
use App\user;
use App\Notifications\Newslack;
use Illuminate\Notifications\Notification;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.index')->with('blogs', Blog::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.blog.create');
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

        $featured->move('uploads/blog', $featured_new_name);

        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => '/uploads/blog/' . $featured_new_name,
            'slug' => str_slug($request->title),
            'user_id' => Auth::id()
        ]);


        Session::flash('success', 'Post created succesfully.');

        //Slack Updates
        //$user = User::first();
        //$user->notify(new Newslackblog("New BlogPost"));
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
        $blog = Blog::find($id);

        return view('admin.blog.edit')->with('blog', $blog);
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

        $blog = Blog::find($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;

            $featured_new_name = time() . $featured->getClientOriginalName();

            $featured->move('uploads/blog', $featured_new_name);

            $blog->featured = '/uploads/blog/'.$featured_new_name;

        }

        $blog->title = $request->title;
        $blog->content = $request->content;

        $blog->save();


        Session::flash('success', 'Blogpost updated successfully.');

        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        Session::flash('success', 'The Blogpost was just trashed.');

        return redirect()->back();
    }

    public function trashed() {
        $blogs = Blog::onlyTrashed()->get();

        return view('admin.blog.trashed')->with('blogs', $blogs);
    }

    public function kill($id)
    {
        $blog = Blog::withTrashed()->where('id', $id)->first();

        $blog->forceDelete();

        Session::flash('success', 'Blogpost deleted permanently.');

        return redirect()->back();
    }

    public function restore($id)
    {
        $blog = Blog::withTrashed()->where('id', $id)->first();

        $blog->restore();

        Session::flash('success', 'Blogpost restored successfully.');

        return redirect()->route('blogs');
    }
}
