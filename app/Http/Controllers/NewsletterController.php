<?php

namespace App\Http\Controllers;

use App\Models\NewslettterEmails;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Register for newsletter
     */
    public function register(Request $request) {
        $request->validate([
            'email' => ['required', 'email']
        ]);

        NewslettterEmails::create([
            'email' => $request->input('email')
        ]);

        session()->flash('newsletterSignupMessage', 'Your have been subscribed successfully!');

        return redirect()->back();
    }
}
