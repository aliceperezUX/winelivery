<?php 
use Andresalice\Winelivery\Models\Product;class Cms588aec77a4fff807982233_939908789Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $this['products_by_cat'] = Product::where("category_id",$this->param('cat'))->where("region_id","=", $this->param('reg'))->take(12)->get();
}
}
