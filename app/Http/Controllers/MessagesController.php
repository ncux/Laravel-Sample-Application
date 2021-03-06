<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, ['name'=>'required', 'email'=>'required']);

        // create a new message:
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();

        // redirect
        return redirect('/')->with('success', 'Your message was successfully sent!');
    }


    public function viewMessages() {
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
