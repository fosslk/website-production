<?php
/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/19/2018
 * Time: 01:42 AM
 *
 * File Name: ContactsController.php
 * Project: Foss.lk Sri lanka
 */

namespace App\Http\Controllers;

use App\Contact;
use App\Notifications\Newcontact;
use Illuminate\Notifications\Notification;
use Mail;
use App\User;

use Session;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contacts.index')
            ->with('contacts', Contact::all());
    }

    public function singleContact($slug)
    {
        $contact = Contact::where('slug', $slug)->first();

        return view('admin.contacts.contact')
            ->with('contact', $contact)
            ->with('contacts', Contact::all());
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
            'first_name' => 'required',
            'email' => 'required',
            'country' => 'required',
            'last_name' => 'required',
            'telephone' => 'required',
        ]);

        $contact = (new \App\Contact)->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'country' => $request->country,
            'telephone' => $request->telephone,
            'content' => $request->content,
            'slug' => str_slug($request->email),
        ]);


        //Send Notification Email for Admin
        //$user = User::first();
        //$user->notify(new Newcontact("New Contact"));

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
        $contact = Contact::find($id);
        $contact->delete();

        Session::flash('success', 'The Contact was just trashed.');

        return redirect()->back();
    }
}
