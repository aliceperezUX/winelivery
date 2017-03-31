<?php 
class Cms58ddd41874112331392330_9592ab7d72b56dfdc0865a43baac5852Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    session()->put('from', URL::previous());
}
public function onLoginForm()
{
    $user = Auth::authenticate(['login' => post('email'),'password' => post('password')]);
    Auth::login($user, true);
    $loggedIn = Auth::check();
    if($loggedIn)
    {
        return redirect(session()->pull('from',$this->redirectTo));
    }
}
}
