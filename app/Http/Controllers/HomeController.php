<?php
/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/17/2018
 * Time: 03:06 PM
 *
 * File Name: HomeController.php
 * Project: Foss.lk Sri lanka
 */

namespace App\Http\Controllers;

use App\Campus;
use App\User;
use App\Post;
use App\Contact;
use App\Category;
use App\Project;
use App\Pilot;
use App\Event;
use App\Contributor;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard')
            ->with('users_count', User::all()->count())
            ->with('posts_count', Post::all()->count())
            ->with('contacts_count', Contact::all()->count())
            ->with('events_count', Event::all()->count())
            ->with('projects_count', Project::all()->count())
            ->with('pilot_count', Pilot::all()->count())
            ->with('contributors_count', Contributor::all()->count())
            ->with('categories_count', category::all()->count());
    }

    public function dashboard()
    {
        return view('admin.dashboard-new')
            ->with('users_count', User::all()->count())
            ->with('posts_count', Post::all()->count())
            ->with('contacts_count', Contact::all()->count())
            ->with('events_count', Event::all()->count())
            ->with('projects_count', Project::all()->count())
            ->with('pilots_count', Pilot::all()->count())
            ->with('contributors_count', Contributor::all()->count())
            ->with('categories_count', Category::all()->count())
            ->with('campuses_count', Campus::all()->count());
    }
}
