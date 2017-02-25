<?php 
use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Review;class Cms58b127b8b9162644162531_1813482526Class extends \Cms\Classes\PageCode
{


public function onStart()
{
    $this['product'] = Product::find($this->param('id'));
    $this['products'] = Product::where("category_id",$this['product']->category_id)->where("id","!=", $this['product']->id)->take(12)->get();
    $this['reviews'] = Review::where("product_id",$this['product']->id)->get();
}
}
