<?php 
use RainLab\User\Models\User;class Cms58a89e18c7e36494778693_148368876Class extends \Cms\Classes\PageCode
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
