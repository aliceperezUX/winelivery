<?php 
use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Region;use Andresalice\Winelivery\Models\Category;class Cms589fd7d98801b131898845_787393978Class extends \Cms\Classes\PageCode
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
    $this['products_by_cat'] = $products;
    $this['category'] = Category::find($category_id);
}
}
