<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required|min:5',
        ]);

        $contact = Contact::create($request->only('name', 'email', 'message'));

            Mail::to('owner@yourwebsite.com')->send(new ContactMail($contact->toArray()));

        return back()->with('success', 'Your message has been sent & saved!');
    }

    public function destroy($id)
{
    $contact = \App\Models\Contact::findOrFail($id);
    $contact->delete();

    return back()->with('success', 'Message deleted successfully!');
}

}
        