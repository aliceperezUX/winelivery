<?php 
use RainLab\User\Models\User;class Cms58c2ed6b343a4714598059_1900137253Class extends \Cms\Classes\PageCode
{

public function onProfileForm()
{
    $user = User::find(Auth::getUser()->id);
    $user->name = post("name");
    $user->surname = post("surname");
    $user->email = post("email");
    $user->save();
}
}
