<?php 
use RainLab\User\Models\User;class Cms58c85de03f276068062476_827034616Class extends \Cms\Classes\PageCode
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
