<?php 
use Andresalice\Winelivery\Models\Slideshow;use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Advertisement;class Cms58bcc7c0cebb7946591281_2460368845Class extends \Cms\Classes\PageCode
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
    
    /*foreach($rp as $rp)
    {
        $rp->s5 = $rp->stars()->where("stars",5)->count();
        $rp->s4 = $rp->stars()->where("stars",4)->count();
        $rp->s3 = $rp->stars()->where("stars",3)->count();
        $rp->s2 = $rp->stars()->where("stars",2)->count();
        $rp->s1 = $rp->stars()->where("stars",1)->count();
        $sc = 5 * $rp->s5 + 4 * $rp->s4 + 3 * $rp->s3 + 2 * $rp->s2 + 1 * $rp->s1;
        if($sc == 0){$rp->total_stars = 5;}
        else{$rp->total_stars = substr($sc/($rp->s5+$rp->s4+$rp->s3+$rp->s2+$rp->s1), 0, 1);}
    }
    var_dump($rp);
    die();*/

    
    //PRODUCTOS ESPECIALES CALCULO DE ESTRELLAS
    
    $this['mwine'] = $wm;
    $this['recentProducts'] = $rp;
    $this['specialProducts'] = $sp;
}
}
