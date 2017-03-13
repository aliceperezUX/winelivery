<?php 
class Cms58bce31769730372616552_577874887Class extends \Cms\Classes\PageCode
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
