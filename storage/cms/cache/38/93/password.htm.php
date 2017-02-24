<?php 
use RainLab\User\Models\User;class Cms58b07400cc556250174207_1782001683Class extends \Cms\Classes\PageCode
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
