<?php 
class Cms588ab77308beb743853837_1928986892Class extends \Cms\Classes\PageCode
{
public function onRegisterForm()
{
    $user = Auth::register([
    'name' => post('name'),
    'surname' => post('last_name'),
    'email' => post('email'),
    'password' => post('password'),
    'password_confirmation' => post('password_confirmation')
    ],true);
    
    Auth::login($user);
    $loggedIn = Auth::check();
    if($loggedIn){return Redirect::to('/');}
}
}
