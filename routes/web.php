<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🏠 Home Page
Route::get('/', function () {
    $counters = config('counters');
    return view('home', compact('counters'));
})->name('home');

// ℹ️ About Us
Route::view('/about', 'about')->name('about');

// 👑 Leadership Pages
Route::view('/ceo', 'ceo')->name('ceo');
Route::view('/md', 'md')->name('md');
Route::view('/founder', 'founder')->name('founder');
Route::view('/team', 'team')->name('team');


// Legal & Information Pages
Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/sitemap', function () {
    return view('sitemap');
})->name('sitemap');

// 🧱 Services
Route::view('/services', 'services')->name('services');

// 🏗️ Our Projects (Gallery)
Route::get('/projects', function () {
    $projects = [
        ['slug' => 'pearlshire-bond-enclave', 'title' => 'Pearlshire - Bond Enclave', 'image' => asset('images/projects/Spinneys-1.jpg'), 'category' => 'Commercial'],
        ['slug' => 'community', 'title' => 'Community', 'image' => asset('images/projects/2024-10-09.webp'), 'category' => 'Residential'],
        ['slug' => 'central-downtown', 'title' => 'The Central Downtown', 'image' => asset('images/projects/3.jpg'), 'category' => 'Commercial'],
        ['slug' => 'samana-hills', 'title' => 'Samana Hills', 'image' => asset('images/projects/Nighet2.webp'), 'category' => 'Residential'],
        ['slug' => 'private-villas', 'title' => 'Private Villas', 'image' => asset('images/projects/WhatsApp-Image-2023-03-07-at-13.24.42.jpeg'), 'category' => 'Luxury Homes'],
        ['slug' => 'plazzo-heights', 'title' => 'Plazzo Heights', 'image' => asset('images/projects/Plazzo_14.webp'), 'category' => 'Residential'],
        ['slug' => 'park-vista', 'title' => 'Park Vista', 'image' => asset('images/projects/2022-03-15.webp'), 'category' => 'Residential'],
        ['slug' => 'palm-jumeirah', 'title' => 'Palm Jumeirah', 'image' => asset('images/projects/071fz8dtrdg64w5vcw9seqmto5eg.png'), 'category' => 'Luxury Development'],
        ['slug' => 'o-ten', 'title' => 'O Ten', 'image' => asset('images/projects/NFyiGv5IEppPtxXIOZmm.jpeg'), 'category' => 'Commercial'],
        ['slug' => 'empire-residence', 'title' => 'Empire Residence', 'image' => asset('images/projects/2024-09-15.webp'), 'category' => 'Residential'],
    ];

    return view('projects_modern', compact('projects'));
})->name('projects');

// 🏢 Individual Project Pages (Dynamic)
Route::get('/projects/{slug}', function ($slug) {
    $viewPath = "projects.$slug";
    if (view()->exists($viewPath)) {
        return view($viewPath);
    }
    abort(404);
})->name('project.detail');

// 🌱 Sustainability
Route::view('/sustainability', 'sustainability')->name('sustainability');

// 📰 News
Route::view('/news', 'news')->name('news');

// 💼 Careers
Route::view('/careers', 'careers')->name('careers');

// 📞 Contact Us
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// 🧾 Admin Panel - View All Contacts
Route::get('/admin/contacts', function () {
    $contacts = Contact::latest()->paginate(10);
    return view('admin.contacts', compact('contacts'));
})->name('admin.contacts');

// 🗑️ Admin - Delete Contact Message
Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])
    ->name('admin.contacts.destroy');

// 📄 Additional Pages for Navigation
Route::view('/projects/residential', 'projects')->name('projects.residential');
Route::view('/projects/commercial', 'projects')->name('projects.commercial');
Route::view('/projects/infrastructure', 'projects')->name('projects.infrastructure');
Route::view('/projects/international', 'projects')->name('projects.international');
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');
Route::view('/sitemap', 'sitemap')->name('sitemap');