<?php 
use Andresalice\Winelivery\Models\Slideshow;use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Advertisement;class Cms58bc6959b1816964283893_3320250211Class extends \Cms\Classes\PageCode
{



public function onStart()
{
    $this['slideshows'] = Slideshow::get();
    $this['recentProducts'] = Product::where("offer","!=",1)->orderBy("id","DESC")->take(4)->get();
    $this['specialProducts'] = Product::where("offer","=",1)->take(4)->get();
    $this['mwine'] = Product::where("month","=",1)->first();
    $this['advertisements'] = Advertisement::orderBy("id","ASC")->get();
}
}
