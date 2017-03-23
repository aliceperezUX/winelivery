<?php 
use Andresalice\Winelivery\Models\Product;class Cms58d43f7e0acd1137355124_1442599213Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $rp = Product::where('title', 'LIKE', '%'.Input::get('search').'%')->take(4)->get();
    foreach($rp as $r)
    {
        $r->s5 = $r->stars()->where("stars",5)->count();
        $r->s4 = $r->stars()->where("stars",4)->count();
        $r->s3 = $r->stars()->where("stars",3)->count();
        $r->s2 = $r->stars()->where("stars",2)->count();
        $r->s1 = $r->stars()->where("stars",1)->count();
        $sc = 5 * $r->s5 + 4 * $r->s4 + 3 * $r->s3 + 2 * $r->s2 + 1 * $r->s1;
        if($sc == 0){$r->total_stars = 5;}
        else{$r->total_stars = substr($sc/($r->s5+$r->s4+$r->s3+$r->s2+$r->s1), 0, 1);}
    }
    
    $this['products_search'] = $rp;
}
}
