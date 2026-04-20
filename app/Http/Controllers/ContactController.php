<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('bytebuzz36@gmail.com')->send(new ContactMail($data));
            return back()->with('success', 'Thank you! Your message has been sent successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, something went wrong. Please try again later. Error: ' . $e->getMessage())->withInput();
        }
    }
}
