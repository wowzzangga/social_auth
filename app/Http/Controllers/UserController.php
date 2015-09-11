<?php namespace App\Http\Controllers;

use App\User;
use Auth;


class UserController extends Controller {


	public function __construct()
	{
		$this->user = Auth::user();
	}
    
    public function getUserInfo()
    {
        dd($this->user);
    }
}