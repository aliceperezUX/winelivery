<?php 
use Andresalice\Winelivery\Models\Category;use Andresalice\Winelivery\Models\Product;use Andresalice\Winelivery\Models\Advertisement;use Andresalice\Winelivery\Models\Newsletter;class Cms588ae6cd79ca3414947263_3619855573Class extends \Cms\Classes\LayoutCode
{




public function onStart()
{
    $this['categories'] = Category::get();
    $this['recentProducts'] = Product::where("offer","!=",1)->orderBy("id","DESC")->take(4)->get();
    $this['specialProducts'] = Product::where("offer","=",1)->take(4)->get();
    $this['mwine'] = Product::where("month","=",1)->first();
    $this['advertisements'] = Advertisement::orderBy("id","ASC")->get();
    $this['randomProducts'] = Product::orderByRaw("RAND()")->take(12)->get();
    $this['user'] = Auth::getUser();
}
public function onNewsletterForm()
{
    $exists = Newsletter::where("email","=",post("email_newsletter"))->exists();
    if($exists)
    {
        return false;
    }
    else
    {
        $n = new Newsletter();
        $n->email = post('email_newsletter');
        $n->save();
    }
}
public function onLogout()
{
    Auth::logout();
    return Redirect::to('/');
}
}
