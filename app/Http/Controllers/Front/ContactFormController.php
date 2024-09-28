<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        return inertia('Contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['string', 'min:2', 'max:250'],
            'email' => ['email', 'min:2', 'max:250'],
            'message' => ['string', 'min:2', 'max:2000'],
        ]);

        ContactForm::create($data);

        return to_route('front.contact');
    }
}
