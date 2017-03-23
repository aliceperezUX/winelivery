<?php 
use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Review;use Andresalice\Winelivery\Models\Rating;use Andresalice\Winelivery\Models\Comment;class Cms58d4352857c89700180467_3918353527Class extends \Cms\Classes\PageCode
{




public function onStart()
{
    $this['product'] = Product::find($this->param('id'));
    $this['products'] = Product::where("category_id",$this['product']->category_id)->where("id","!=", $this['product']->id)->take(12)->get();
    $this['reviews'] = Review::where("product_id",$this['product']->id)->get();
    if(Auth::check())
    {
        $this['rating'] = Rating::where("user_id",Auth::getUser()->id)->where("product_id",$this->param('id'))->first();
    }
    $this['comments'] = Comment::orderBy("id","DESC")->get();
    //$this['stars'] = Rating::where("product_id",$this['product']->id)->select('stars',DB::raw('count(stars) as total'))->groupBy("stars")->get();
    $this['stars5'] = Rating::where("stars",5)->where("product_id",$this['product']->id)->count();
    $this['stars4'] = Rating::where("stars",4)->where("product_id",$this['product']->id)->count();
    $this['stars3'] = Rating::where("stars",3)->where("product_id",$this['product']->id)->count();
    $this['stars2'] = Rating::where("stars",2)->where("product_id",$this['product']->id)->count();
    $this['stars1'] = Rating::where("stars",1)->where("product_id",$this['product']->id)->count();
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
    $comments = Comment::orderBy("id","DESC")->get();
    return ['#comment' => $this->renderPartial('comments', ['comments' => $comments])];
}
}
