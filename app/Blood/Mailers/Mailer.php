<?php namespace Bllod\Mailers;

Use Illuminate\Support\Facades\Mail;

abstract class Mailer{

    public function sendTo($donor,$subject,$view,$data = [])
    {
        Mail::queue($view,$data,function($message) use($donor, $subject){
            $message->to($donor->email)->subject($subject);
        });

    }
}