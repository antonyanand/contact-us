<?php

namespace Contacts\Http\Controllers;

use App\Http\Controllers\Controller;
use Contacts\Mail\ContactConfirm;
use Contacts\Models\Contact;
use Mail;

class ContactController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contact::contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store()
    {

        Contact::create(request()->all());
        Mail::to(config('contact.send_mail_to'))->send(new ContactConfirm(request()->get('message')));
    }

}