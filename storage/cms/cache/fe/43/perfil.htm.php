<?php 
use RainLab\User\Models\User;class Cms5a589424106d3651473319_26a482d69992ee27b74b0e2355f2960fClass extends \Cms\Classes\PageCode
{

public function onProfileForm()
{
    $user = User::find(Auth::getUser()->id);
    $user->name = post("name");
    $user->surname = post("surname");
    $user->email = post("email");
    $user->username = post("email");
    $user->save();
}
}
