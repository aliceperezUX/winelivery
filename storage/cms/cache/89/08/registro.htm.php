<?php 
class Cms589f9af79b9f2309403169_4245297528Class extends \Cms\Classes\PageCode
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
