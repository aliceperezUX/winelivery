<?php 
class Cms589f9b12ac568432593964_960849748Class extends \Cms\Classes\PageCode
{
public function onLoginForm()
{
    $user = Auth::authenticate(['login' => post('email'),'password' => post('password')]);
    Auth::login($user, true);
    $loggedIn = Auth::check();
    if($loggedIn){return Redirect::to('/');}
}
}
