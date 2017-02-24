<?php 
use RainLab\User\Models\User;class Cms58b073fc1e6bc340480995_2912559460Class extends \Cms\Classes\PageCode
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
