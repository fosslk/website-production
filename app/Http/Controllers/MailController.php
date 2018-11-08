<?php
/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/13/2018
 * Time: 8:48 PM
 *
 * File Name: MailController.php
 * Project: Foss.lk Sri lanka
 */
namespace App\Http\Controllers;
use App\Mail\SendMail;
use Mail;
use App\Contact;


use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send()


    {
      // Mail::send(['text'=>'mail'],['name','Tharindu'],function($message){
         //  $message->to('hatchathuranga@gmail.com','To Tharindu')->subject('Contact mail');
       //    $message->from('hatchathuranga@gmail.com','Tharindu');
       //});
        //return redirect()->back();

        $contact = Contact::all();

        Mail::to('hatchathuranga@gmail.com')->send(new SendMail($contact));
    }
}
