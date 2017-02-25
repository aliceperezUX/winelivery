<?php 
use Andresalice\Winelivery\Models\Cart;class Cms58b0cf7e8551f596632694_3540950076Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $exists = Cart::where("user_id",Auth::getUser()->id)->exists();
    if(!$exists)
    {
        return Redirect::to('/');
    }
}
}
