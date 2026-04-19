<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function send(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $contactReceiver = env('CONTACT_RECEIVER_EMAIL', 'go.green.website.2026@gmail.com');

        try {
            Mail::to($contactReceiver)->send(new ContactMail($validated));
        } catch (Throwable $e) {
            Log::error('Failed to send contact form email', [
                'to' => $contactReceiver,
                'from' => $validated['email'] ?? null,
                'subject' => $validated['subject'] ?? null,
                'error' => $e->getMessage(),
            ]);

            return back()->withInput()->withErrors([
                'mail' => 'Gagal mengirim pesan. Silakan coba lagi atau hubungi kami via Instagram.',
            ]);
        }

        return back()->with('success', 'Message sent successfully! We will get back to you soon.');
    }
}
