<?php 
use Andresalice\Winelivery\Models\Slideshow;use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Advertisement;class Cms58df2680554eb972409084_d7e92819c5491f87b0c87fb8e1f45cbbClass extends \Cms\Classes\PageCode
{



public function onStart()
{
    $this['slideshows'] = Slideshow::get();
    $this['advertisements'] = Advertisement::orderBy("id","ASC")->get();
    $rp = Product::where("offer","!=",1)->orderBy("id","DESC")->take(4)->get();
    $sp = Product::where("offer","=",1)->take(4)->get();
    $wm = Product::where("month","=",1)->first();
    //VINO DEL MES CALCULO DE ESTRELLAS
    $wm->s5 = $wm->stars()->where("stars",5)->count();
    $wm->s4 = $wm->stars()->where("stars",4)->count();
    $wm->s3 = $wm->stars()->where("stars",3)->count();
    $wm->s2 = $wm->stars()->where("stars",2)->count();
    $wm->s1 = $wm->stars()->where("stars",1)->count();
    $sc = 5 * $wm->s5 + 4 * $wm->s4 + 3 * $wm->s3 + 2 * $wm->s2 + 1 * $wm->s1;
    if($sc == 0){$wm->total_stars = 5;}
    else{$wm->total_stars = substr($sc/($wm->s5+$wm->s4+$wm->s3+$wm->s2+$wm->s1), 0, 1);}
    //PRODUCTOS RECIENTES CALCULO DE ESTRELLAS
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
    //PRODUCTOS ESPECIALES CALCULO DE ESTRELLAS
    foreach($sp as $s)
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
    $this['mwine'] = $wm;
    $this['recentProducts'] = $rp;
    $this['specialProducts'] = $sp;
}
}
