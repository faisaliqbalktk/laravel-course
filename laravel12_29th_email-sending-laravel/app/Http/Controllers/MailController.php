<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $to = "faisaliqbal90909@gmail.com";
        $msg = "dummy mail by faisal iqbal";
        $subject = "Code Step By Step";

        Mail::to($to)->send(new WelcomeEmail($msg, $subject));

        return "Email sent successfully to static email.";
    }

      public function sendFormEmail(Request $request)
    {
        $to = $request->to;
        $msg = $request->message;
        $subject = $request->subject;

        Mail::to($to)->send(new WelcomeEmail($msg, $subject));

        return "Email sent successfully to form email.";
    }
}