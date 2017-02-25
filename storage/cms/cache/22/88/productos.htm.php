<?php 
use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Region;use Andresalice\Winelivery\Models\Category;use Andresalice\Winelivery\Models\Country;class Cms58b10483377c3585157879_120667641Class extends \Cms\Classes\PageCode
{




public function onStart()
{
    $country_id = $this->param('country'); 
    $category_id = $this->param('category');
    $this['regions'] = Region::where('country_id',"=",$country_id)->get();
    $products = array();
    if(!empty(Input::get("order"))){$this['orderBy'] = Input::get("order");} else {$this['orderBy'] = "ASC";}
    if($this->param('region') > 0)
    {
        $products[] = Product::orderBy("price",$this['orderBy'])->where('region_id','=',$this->param('region'))->where('category_id','=',$category_id)->get();
    }
    else
    {
        $products[] = Product::orderBy("price",$this['orderBy'])->where('category_id','=',$category_id)->get();
    }

    $this['products_by_cat'] = $products;
    $this['country_title'] = Country::find($country_id);
    $this['category'] = Category::find($category_id);
}
}
