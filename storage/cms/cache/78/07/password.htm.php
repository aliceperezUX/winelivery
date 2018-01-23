<?php 
use RainLab\User\Models\User;class Cms5a5bd7f84a2c7201656200_76a83e12a1d2288fe7778819a895ef4cClass extends \Cms\Classes\PageCode
{

public function onChangePasswordForm()
{
    $user = User::find(Auth::getUser()->id);
    $user->password = post("password");
    $user->password_confirmation = post("password_confirmation");
    $user->save();
    Auth::login($user);
}
}
