<?php 
use Andresalice\Winelivery\Models\Product;class Cms588ae2a92c0fb474321394_799414700Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $this['products_search'] = Product::where('title', 'LIKE', '%'.Input::get('search').'%')->take(4)->get();
}
}
