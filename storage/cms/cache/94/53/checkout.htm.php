<?php 
use Andresalice\Winelivery\Models\Cart;class Cms58c2ea2ec3f22872989259_3713371551Class extends \Cms\Classes\PageCode
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
