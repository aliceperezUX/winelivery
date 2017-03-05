<?php 
class Cms58b6b9bfee398076572824_1438280218Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    session()->put('from', URL::previous());
}
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
    if($loggedIn)
    {
        return redirect(session()->pull('from',$this->redirectTo));
    }
}
}
