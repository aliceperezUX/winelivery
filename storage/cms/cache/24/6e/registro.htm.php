<?php 
use Andresalice\Winelivery\Models\Product;use RainLab\User\Models\User;class Cms5a5986941572c616505719_e7753794b622116c51fdfff1deace2c9Class extends \Cms\Classes\PageCode
{


public function onStart()
{
    session()->put('from', URL::previous());
}
public function onRegisterForm()
{
    $code = rand(100000,999999);
    $user = Auth::register([
    'name' => post('name'),
    'surname' => post('last_name'),
    'email' => post('email'),
    'password' => post('password'),
    'password_confirmation' => post('password_confirmation')
    ],true);
    
    $user->reset_code = rand(100000,999999);
    $user->save();
    $products = Product::where("offer","!=",1)->take(3)->get();
    
    $mailvars = ['name' => post('name'), 'surname' => post('last_name'), 'products' => $products];
    Mail::send('welcome_mail', $mailvars, function($message) {
    	$message->to(post('email'), post('name'));
    });
    
    Auth::login($user);
    if(Auth::check())
    {
        $user = User::find(Auth::getUser()->id);
        $user->reset_code = $code;
        $user->save();
        //return redirect(session()->pull('from',$this->redirectTo));
        return Redirect::to('/');
    }
}
}
