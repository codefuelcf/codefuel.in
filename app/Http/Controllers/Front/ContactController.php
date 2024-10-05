<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        return inertia('Contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:250'],
            'email' => ['required', 'email', 'min:2', 'max:250'],
            'message' => ['required', 'string', 'min:2', 'max:2000'],
            'google_recaptcha_response' => ['required', 'string']
        ]);

        $reacptcha = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('GOOGLE_RECAPTCHA_SECRET_KEY'),
            'response' => $data['google_recaptcha_response'],
        ])->json();

        if ($reacptcha['success']) {
            ContactForm::create($data);
        }



        return to_route('front.contact');
    }
}
