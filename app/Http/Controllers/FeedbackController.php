<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function getIndex() {
        $feedbacks = Feedback::query()->get();
        return view('Page.contact', compact('feedbacks'));
    }

    public function postFeedback(FeedbackRequest  $request) {
        {
            Feedback::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);
            return redirect()->route('homepage')->with('success', 'Your feedback has been sent.');
        }
    }
}
