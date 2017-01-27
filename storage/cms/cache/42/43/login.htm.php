<?php 
class Cms588abfb4e434e528247938_3751676243Class extends \Cms\Classes\PageCode
{
public function onLoginForm()
{
    $user = Auth::authenticate(['login' => post('email'),'password' => post('password')]);
    Auth::login($user, true);
    $loggedIn = Auth::check();
    if($loggedIn){return Redirect::to('/');}
}
}
