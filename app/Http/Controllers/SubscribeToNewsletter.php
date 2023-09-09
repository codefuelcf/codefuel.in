<?php

namespace App\Http\Controllers;

use App\Models\NewsletterEmails;
use Illuminate\Http\Request;

class SubscribeToNewsletter extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email']
        ]);

        NewsletterEmails::create($validated);

        return redirect()->back()->with([
            'messageType' => 'success',
            'message' => 'Your have been subscribed successfully!',
        ]);
    }
}
