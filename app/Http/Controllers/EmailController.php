<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{ public function sendEmail(Request $request)
    {
        // Validate the request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Collect the data
        $data = $request->all();

        // Send the email
        Mail::send([], [], function ($message) use ($data) {
            $message->to('heischatgptpro@gmail.com') // Replace with your email address
                    ->subject('Franchise') // Subject of the email
                    ->from($data['email'], $data['first_name'] . ' ' . $data['last_name'])
                    ->text("Name: {$data['first_name']} {$data['last_name']}\n
                            Email: {$data['email']}\n
                            Phone: {$data['phone']}\n
                            City: {$data['city']}\n
                            District: {$data['district']}\n
                            Message: {$data['message']}"); // Plain text email content
        });

        // Redirect back with a success message
        return back()->with('success', 'Your email has been sent successfully!');
    }

    public function sendContactEmail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Collect data from the request
        $data = $request->all();

        // Send email
        Mail::send([], [], function ($message) use ($data) {
            $message->to('agdemirhalim4@gmail.com') // Replace with your email address
                    ->subject('İletişim') // Email subject
                    ->from($data['email'], $data['name']) // Sender's email and name
                    ->text("Name: {$data['name']}\nEmail: {$data['email']}\nMessage: {$data['message']}"); // Email content
        });

        // Redirect back with a success message
        return back()->with('success', 'Mesajınız başarıyla gönderildi!');
    }
    public function subscribe(Request $request)
{
    // Validate the email input
    $request->validate([
        'email' => 'required|email',
    ]);

    // Collect the email data
    $email = $request->input('email');

    // Send the newsletter subscription email
    Mail::send([], [], function ($message) use ($email) {
        $message->to('agdemirhalim4@gmail.com') // Replace with your email address
                ->subject('Newsletter') // Email subject
                ->from($email, 'Newsletter Subscriber') // Subscriber's email
                ->text("A new user has subscribed to the newsletter.\n\nSubscriber Email: {$email}"); // Email content
    });

    // Redirect back with a success message
    return back()->with('success', 'Thank you for subscribing to our newsletter!');
}
   
}
