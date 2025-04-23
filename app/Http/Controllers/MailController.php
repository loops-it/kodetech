<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailSubmit(Request $request)
    {
        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|max:255',
            'message' => 'required|string',
        ]);

        

        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('info@kodetech.co')
            ->subject('Contact Form Submission from ' . $request->first_name . ' ' . $request->last_name);
            $message->from($request->email, $request->first_name);
        });

        return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon!');
    }
} 
