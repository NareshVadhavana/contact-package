<?php

namespace Naresh\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Naresh\Contact\models\Contact;
use Naresh\Contact\Mail\ContactMailable;
use Mail;


class ContactController extends Controller
{

	public function index()
	{
		return view('contact::contact');
	}

	public function send(Request $request)
	{
		$data = [
			'name' => $request->name,
			'email' => $request->email,
			'message' => $request->message,
		];

		Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($data['message'], $data['name']));

		Contact::create($data);

		return redirect(route('contact'));
	}

}
