<?php 
use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Region;use Andresalice\Winelivery\Models\Category;use Andresalice\Winelivery\Models\Country;class Cms58bcc7f8c39bd117481250_529790846Class extends \Cms\Classes\PageCode
{




public function onStart()
{
    $country_id = $this->param('country'); 
    $category_id = $this->param('category');
    $this['regions'] = Region::where('country_id',"=",$country_id)->get();
    $products = array();
    if(Input::has("desde") && Input::has("hasta")){$desde = Input::get("desde"); $hasta = Input::get("hasta");} else {$desde = false; $hasta = false;}
    if(!empty(Input::get("order"))){$this['orderBy'] = Input::get("order");} else {$this['orderBy'] = "ASC";}
    
    if($this->param('region') > 0)
    {
        $products[] = Product::orderBy("price",$this['orderBy'])->where('region_id','=',$this->param('region'))->where('category_id','=',$category_id)->where(function($query) use ($desde, $hasta) {
				if($desde){$query->where("price",">=",$desde);}
				if($hasta){$query->where("price","<=",$hasta);}
		})->get();
    }
    else
    {
        $products[] = Product::orderBy("price",$this['orderBy'])->where('category_id','=',$category_id)->where(function($query) use ($desde, $hasta) {
				if($desde){$query->where("price",">=",$desde);}
				if($hasta){$query->where("price","<=",$hasta);}
		})->get();
    }

    $this['products_by_cat'] = $products;
    $this['country_title'] = Country::find($country_id);
    $this['category'] = Category::find($category_id);
}
}
