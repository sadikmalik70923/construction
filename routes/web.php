<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

Route::get('/', function () {
    $counters = config('counters');
    return view('home', compact('counters'));
});
Route::get('/about', function () { return view('about'); });
Route::get('/services', function () { return view('services'); });
Route::get('/faq', function () { return view('faq'); });
Route::get('/projects', function () { return view('projects'); });
Route::get('/sustainability', function () { return view('sustainability'); });
Route::get('/news', function () { return view('news'); });


Route::get('/admin/contacts', function () {
    $contacts = Contact::latest()->paginate(10); // 10 per page
    return view('admin.contacts', compact('contacts'));
});

Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');


Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
