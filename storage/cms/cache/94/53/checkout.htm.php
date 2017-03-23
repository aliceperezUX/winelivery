<?php 
use Andresalice\Winelivery\Models\Cart;class Cms58c852f317f13463774793_2611629275Class extends \Cms\Classes\PageCode
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
