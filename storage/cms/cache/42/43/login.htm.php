<?php 
class Cms58a8c54f49539853692609_2430501206Class extends \Cms\Classes\PageCode
{
public function onLoginForm()
{
    $user = Auth::authenticate(['login' => post('email'),'password' => post('password')]);
    Auth::login($user, true);
    $loggedIn = Auth::check();
    if($loggedIn){return Redirect::to('/');}
}
}
