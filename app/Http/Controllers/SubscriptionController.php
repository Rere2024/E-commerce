<?php

namespace App\Http\Controllers;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;
use App\Notifications\SubscriptionSuccess;  // Import the notification
use Illuminate\Support\Facades\Notification;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Save the subscription data to the database
        $subscriber = Subscriber::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        // Flash a success message to the session
        session()->flash('success', 'Thank you for subscribing!');

        // Optionally, send a confirmation email
        Mail::to($subscriber->email)->send(new SubscriptionConfirmation($subscriber));

        Notification::route('mail', $subscriber->email)->notify(new SubscriptionSuccess());

        // Redirect back with a success notification
        return redirect()->back();
    }
}
