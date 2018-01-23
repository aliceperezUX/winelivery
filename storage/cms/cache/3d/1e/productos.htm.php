<?php 
use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Region;use Andresalice\Winelivery\Models\Category;use Andresalice\Winelivery\Models\Country;class Cms5a66247ae8ae5405718862_162902f99aebfc752bcc652448bc2a3dClass extends \Cms\Classes\PageCode
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
        $products[] = Product::where("status",0)->where("type",1)->orderBy("price",$this['orderBy'])->where('region_id','=',$this->param('region'))->where('category_id','=',$category_id)->where(function($query) use ($desde, $hasta) {
				if($desde){$query->where("price",">=",$desde);}
				if($hasta){$query->where("price","<=",$hasta);}
		})->get();
    }
    else
    {
        $products[] = Product::where("status",0)->orderBy("price",$this['orderBy'])->where('category_id','=',$category_id)->where(function($query) use ($desde, $hasta) {
				if($desde){$query->where("price",">=",$desde);}
				if($hasta){$query->where("price","<=",$hasta);}
		})->get();
    }

    //PRODUCTOS ESPECIALES CALCULO DE ESTRELLAS
    foreach($products as $product)
    {
        foreach($product as $s)
        {
            $s->s5 = $s->stars()->where("stars",5)->count();
            $s->s4 = $s->stars()->where("stars",4)->count();
            $s->s3 = $s->stars()->where("stars",3)->count();
            $s->s2 = $s->stars()->where("stars",2)->count();
            $s->s1 = $s->stars()->where("stars",1)->count();
            $sc = 5 * $s->s5 + 4 * $s->s4 + 3 * $s->s3 + 2 * $s->s2 + 1 * $s->s1;
            if($sc == 0){$s->total_stars = 5;}
            else{$s->total_stars = substr($sc/($s->s5+$s->s4+$s->s3+$s->s2+$s->s1), 0, 1);}
        }
        
    }
    
    $this['products_by_cat'] = $products;
    $this['country_title'] = Country::find($country_id);
    $this['category'] = Category::find($category_id);
}
}
