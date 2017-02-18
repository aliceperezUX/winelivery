<?php 
use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Region;use Andresalice\Winelivery\Models\Category;use Andresalice\Winelivery\Models\Country;class Cms58a8a82968a05937729857_61512928Class extends \Cms\Classes\PageCode
{




public function onStart()
{
    $country_id = $this->param('country'); 
    $category_id = $this->param('category');
    $regions = Region::where('country_id',"=",$country_id)->get();
    $products = array();
    foreach($regions as $r)
    {
        $products[] = Product::where('region_id','=',$r->id)->where('category_id','=',$category_id)->get();
    }
    $this['country_title'] = Country::find($country_id);
    $this['products_by_cat'] = $products;
    $this['category'] = Category::find($category_id);
}
}
