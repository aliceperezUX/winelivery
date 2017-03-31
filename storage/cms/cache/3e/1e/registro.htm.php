<?php 
class Cms58ddcef18155b437974669_340b9274f7a2baa19c0cc463be2868d1Class extends \Cms\Classes\PageCode
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
