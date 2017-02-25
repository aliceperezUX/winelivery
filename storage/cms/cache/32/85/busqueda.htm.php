<?php 
use Andresalice\Winelivery\Models\Product;class Cms58b0fdb41f7e2528308839_2419923483Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $this['products_search'] = Product::where('title', 'LIKE', '%'.Input::get('search').'%')->take(4)->get();
}
}
