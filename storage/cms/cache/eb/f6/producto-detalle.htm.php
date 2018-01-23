<?php 
use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Review;use Andresalice\Winelivery\Models\Rating;use Andresalice\Winelivery\Models\Comment;class Cms5a5faecfd4536458382873_80c6becc05118c573b754c7c2040c282Class extends \Cms\Classes\PageCode
{




public function onStart()
{
    $this['product'] = Product::find($this->param('id'));
    $this['products'] = Product::where("status",0)->where("type",1)->where("category_id",$this['product']->category_id)->where("id","!=", $this['product']->id)->take(12)->get();
    $embutidos = $this['product']->embutidos;
    //PRODUCTOS RANDOM CALCULO DE ESTRELLAS
    foreach($embutidos as $r)
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
    $this['embutidos'] = $embutidos;
    if(Review::where("product_id",$this['product']->id)->exists())
    {
       $this['reviews'] = Review::where("product_id",$this['product']->id)->get(); 
    }
    else
    {
       $this['reviews'] = false;
    }
    
    if(Auth::check())
    {
        $this['rating'] = Rating::where("user_id",Auth::getUser()->id)->where("product_id",$this->param('id'))->first();
    }
    $this['comments'] = Comment::where("product_id",$this->param("id"))->orderBy("id","DESC")->get();
    //$this['stars'] = Rating::where("product_id",$this['product']->id)->select('stars',DB::raw('count(stars) as total'))->groupBy("stars")->get();
    $this['stars5'] = Rating::where("stars",5)->where("product_id",$this['product']->id)->count();
    $this['stars4'] = Rating::where("stars",4)->where("product_id",$this['product']->id)->count();
    $this['stars3'] = Rating::where("stars",3)->where("product_id",$this['product']->id)->count();
    $this['stars2'] = Rating::where("stars",2)->where("product_id",$this['product']->id)->count();
    $this['stars1'] = Rating::where("stars",1)->where("product_id",$this['product']->id)->count();
    $this['url'] = Request::url();
}
public function onStarsForm()
{
    $user_id = Auth::getUser()->id;
    $product_id = post("product_id");
    $ra = Rating::where("user_id",$user_id)->where("product_id",$product_id)->first();
    if(!empty($ra))
    {
        $r = Rating::find($ra->id);
        $r->stars = post("estrellas");
        $r->save();
    }
    else
    {
        $r = new Rating();
        $r->product_id = $product_id;
        $r->user_id = $user_id;
        $r->stars = post("estrellas");
        $r->save();
    }
}
public function onCommentForm()
{
    $r = new Comment();
    $r->product_id = post("product_id");
    $r->user_id = Auth::getUser()->id;
    $r->comment = post("comment");
    $r->save();
    $comments = Comment::where("product_id",$this->param("id"))->orderBy("id","DESC")->get();
    return ['#comment' => $this->renderPartial('comments', ['comments' => $comments])];
}
}
