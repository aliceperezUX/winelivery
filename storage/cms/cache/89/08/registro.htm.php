<?php 
class Cms58c30e894d9fc495051653_3851262472Class extends \Cms\Classes\PageCode
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
    if(Auth::check())
    {
        //return redirect(session()->pull('from',$this->redirectTo));
        return Redirect::to('/');
    }
}
}
