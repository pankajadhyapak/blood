<?php namespace Blood\Mailers;

use Bllod\Mailers\Mailer;
Use Donor;
class DonorMailer extends Mailer{

    public function welcome(Donor $donor){
        $view ="emails.donors.join";
        $data = [
        'email' => $donor->email
        ];
        $subject = "Welcome to Blood Bank With You Forever";

        return $this->sendTo($donor,$subject,$view,$data);
    }
}