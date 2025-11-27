<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Show the contact form page.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Handle form submission and send (or log) email.
     */
    public function send(Request $request)
    {
        // Validate inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Store in database
        $contact = Contact::create($validated);

        // Try sending email — fallback to log if fails
        try {
            Mail::to('rajsinghrishabh6@gmail.com')->send(new ContactMail($contact));
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Your message has been sent successfully! We’ll get back to you soon.');
    }

    /**
     * Delete a contact message (Admin).
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return back()->with('success', 'Contact message deleted successfully.');
    }
}
