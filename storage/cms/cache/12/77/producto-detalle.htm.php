<?php 
use Andresalice\Winelivery\Models\Product;class Cms589f9f31099d1071947388_633300799Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $this['product'] = Product::find($this->param('id'));
    $this['products'] = Product::where("category_id",$this['product']->category_id)->where("id","!=", $this['product']->id)->take(12)->get();
}
}
