<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Create a new contact entry
        Contact::create($validated);

        // Send email
        Mail::send('emails.contact', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'contactMessage' => $validated['message']
        ], function($message) use ($validated) {
            $message->to('aimanmahmud69@gmail.com') // Replace with your actual email
                    ->subject('New Contact Form Submission: ' . $validated['subject']);
        });

        return back()->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
