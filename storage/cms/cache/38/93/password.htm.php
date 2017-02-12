<?php 
use RainLab\User\Models\User;class Cms589fb98ad623d545716880_284122676Class extends \Cms\Classes\PageCode
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
