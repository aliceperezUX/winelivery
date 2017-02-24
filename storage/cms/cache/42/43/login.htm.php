<?php 
class Cms58b072cb79627369919537_434011863Class extends \Cms\Classes\PageCode
{
public function onLoginForm()
{
    $user = Auth::authenticate(['login' => post('email'),'password' => post('password')]);
    Auth::login($user, true);
    $loggedIn = Auth::check();
    if($loggedIn){return Redirect::to('/');}
}
}
