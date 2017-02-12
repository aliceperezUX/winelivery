<?php 
use RainLab\User\Models\User;class Cms589fb2e38f4c7067691073_2458396331Class extends \Cms\Classes\PageCode
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
