<?php
/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/13/2018
 * Time: 9:53 PM
 *
 * File Name: FrontController.php
 * Project: Foss.lk Sri lanka
 */

namespace App\Http\Controllers;

use App\Campus;
use App\Post;
use App\Blog;
use App\Category;
use App\Event;
use App\Contributor;
use App\Project;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(6);

        $blogs = Blog::orderBy('created_at','desc')->paginate(6);

        return View('welcome',['posts' => $posts,'blogs' => $blogs])
            ->with('categories', Category::all());
    }

    public function aboutus()
    {

       return View('pages.aboutus');
    }

    public function consultant()
    {

        return View('pages.consultant');
    }

    public function campuses()
    {

        return View('pages.campuses')->with('campuses', Campus::all());
    }

    public function singleCampus($slug)
    {
        $campus = Campus::all();
        return view('pages.campuses', compact('campus'));
    }

    public function topcontributors()
    {

        return View('pages.top-contributors')
            ->with('contributors', Contributor::all());
    }

    public function news()
    {

        return View('pages.news')
            ->with('posts', Post::all());
    }

    public function events()
    {

        return View('pages.events')
            ->with('events', Event::all());
    }
 
    public function pilot()
    {

        return View('pages.pilot');
    }

    public function fosspilot()
    {

        return View('pages.foss-pilot');
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

    public function posts()
    {
        return view('pages.posts')
            ->with('posts', Post::all())
            ->with('categories', Category::all());
    }

    public function blog()
    {
        return view('pages.blog')
            ->with('blogs', Blog::all());
    }



    public function singleBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        $next_id = Blog::where('id', '>', $blog->id)->min('id');
        $prev_id = Blog::where('id', '<', $blog->id)->max('id');

        return view('pages.singleblogpost')->with('blog', $blog)
            ->with('title', $blog->title)
            ->with('next', Blog::find($next_id))
            ->with('prev', Blog::find($prev_id));
    }

    public function projects()
    {
        return view('pages.projects')
            ->with('projects', Project::all());
    }

    public function contactus()
    {

        return view('pages.contact');
    }

    public function success()
    {
        return view('contactsuccess');
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('pages.singlepost')->with('post', $post)
            ->with('title', $post->title)
            ->with('next', Post::find($next_id))
            ->with('prev', Post::find($prev_id))
            ->with('categories', Category::all());
    }


    public function singleProject($slug)
    {
        $project = Project::where('slug', $slug)->first();

        $next_id = Project::where('id', '>', $project->id)->min('id');
        $prev_id = Project::where('id', '<', $project->id)->max('id');

        return view('pages.singleproject')->with('project', $project)
            ->with('title', $project->title)
            ->with('next', Project::find($next_id))
            ->with('prev', Project::find($prev_id));
    }

    public function singleEvent($slug)
    {
        $event = Event::where('slug', $slug)->first();

        $next_id = Event::where('id', '>', $event->id)->min('id');
        $prev_id = Event::where('id', '<', $event->id)->max('id');

        return view('pages.singleevent')->with('event', $event)
            ->with('title', $event->title)
            ->with('next', Event::find($next_id))
            ->with('prev', Event::find($prev_id));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
