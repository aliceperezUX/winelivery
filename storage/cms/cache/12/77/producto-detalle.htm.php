<?php 
use Andresalice\Winelivery\Models\Product;class Cms588ae89378118823831531_996306354Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $this['product'] = Product::find($this->param('id'));
    $this['products'] = Product::where("category_id",$this['product']->category_id)->where("id","!=", $this['product']->id)->take(12)->get();
}
}
