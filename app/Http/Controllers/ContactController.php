<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
     public function contactUs() {
        return view('contact-us');
    }

    public function submitForm(Request $request)
    {
        // Step 1: Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required',
        ], [
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
        ]);

        // Step 2: Verify reCAPTCHA with Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('services.recaptcha.secret_key'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        if (! $response->json('success')) {
            return back()
                ->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed.'])
                ->withInput();
        }

        // Step 3: Set admin email
        $adminEmail = config('mail.admin_email');

        // Step 4: Send email
        Mail::raw(
            "Name: {$request->name}\nEmail: {$request->email}\nPhone: {$request->phone}\nSubject: {$request->subject}\nMessage:\n{$request->message}",
            function ($message) use ($adminEmail, $request) {
                $message->to($adminEmail)
                    ->subject('New Contact Message: ' . $request->subject)
                    ->replyTo($request->email);
            }
        );

        return back()->with('success', 'Thank you for contacting us!');
    }
}
