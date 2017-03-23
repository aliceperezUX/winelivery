<?php 
class Cms58c85dbdba42b973304230_2016450728Class extends \Cms\Classes\PageCode
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
