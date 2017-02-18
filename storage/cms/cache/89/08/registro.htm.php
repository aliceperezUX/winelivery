<?php 
class Cms58a8c553b5284558576593_3918257951Class extends \Cms\Classes\PageCode
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
