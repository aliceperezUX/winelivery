<?php 
class Cms58b6b90eddb3b129075954_949001892Class extends \Cms\Classes\PageCode
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
