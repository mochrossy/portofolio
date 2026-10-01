<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        $data = $request->validated();

        Mail::to(config('mail.contact_address', 'admin@localhost'))
            ->send(new ContactMessage(
                senderName: $data['name'],
                senderEmail: $data['email'],
                messageBody: $data['message'],
            ));

        return back()->with('success', 'Terima kasih! Pesan Anda sudah terkirim.');
    }
}
