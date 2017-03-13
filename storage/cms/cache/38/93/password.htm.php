<?php 
use RainLab\User\Models\User;class Cms58bceffed9455720010541_2768452378Class extends \Cms\Classes\PageCode
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
