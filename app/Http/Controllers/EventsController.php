<?php
/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/15/2018
 * Time: 12:07 AM
 *
 * File Name: EventsController.php
 * Project: Foss.lk Sri lanka
 */

namespace App\Http\Controllers;
use App\Notifications\NewSlackEvent;
use Auth;
use App\User;
use App\Event;
use Session;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.events.index')->with('events', Event::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
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
            'description' => 'required',
            'location' => 'required',
            'date' => 'required'
        ]);

        $featured = $request->featured;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/events', $featured_new_name);

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
            'featured' => 'uploads/events/' . $featured_new_name,
            'slug' => str_slug($request->title),
        ]);


        Session::flash('success', 'Event created succesfully.');


        //Slack Updates
        //$user = User::first();
        //$user->notify(new NewSlackEvent("New Event"));

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
        $event = Event::find($id);

        return view('admin.events.edit')->with('event', $event);
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
            'description' => 'required',
            'location' => 'required',
            'date' => 'required'
        ]);

        $event = Event::find($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;

            $featured_new_name = time() . $featured->getClientOriginalName();

            $featured->move('uploads/events', $featured_new_name);

            $event->featured = 'uploads/events/'.$featured_new_name;

        }

        $event->title = $request->title;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->date = $request->date;

        $event->save();

        Session::flash('success', 'Event updated successfully.');

        return redirect()->route('events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        $event->delete();

        Session::flash('success', 'Event deleted permanently.');

        return redirect()->back();
    }

    public function trashed() {
        $events = Event::onlyTrashed()->get();

        return view('admin.events.trashed')->with('events', $events);
    }

    public function kill($id)
    {
        $event = Event::withTrashed()->where('id', $id)->first();

        $event->forceDelete();

        Session::flash('success', 'Event deleted permanently.');

        return redirect()->back();
    }

    public function restore($id)
    {
        $event = Event::withTrashed()->where('id', $id)->first();

        $event->restore();

        Session::flash('success', 'Event restored successfully.');

        return redirect()->route('events');
    }
}
