<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Donor extends Eloquent implements UserInterface, RemindableInterface {
	protected $guarded = [];
	public static $rules = [
			'name'=>'alpha|required',
			'email'=>'email|required|unique:donors',
			'password'=>'required|min:6|alpha_num',
			'city'=>'alpha|required',
			'phno'=>'numeric|required|digits:10'
			];

			
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'donors';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

    public function inbox()
    {
        return $this->hasMany('Message','to');
    }

    public function sent()
    {
        return $this->hasMany('Message','from');
    }

}