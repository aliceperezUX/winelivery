<?php 
class Cms58d435220382e950578115_4168694309Class extends \Cms\Classes\PageCode
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
