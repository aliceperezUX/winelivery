<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

use Andresalice\Winelivery\Models\Address;
use Andresalice\Winelivery\Models\Advertisement;
use Andresalice\Winelivery\Models\Cart;
use Andresalice\Winelivery\Models\Category;
use Andresalice\Winelivery\Models\Comment;
use Andresalice\Winelivery\Models\Country;
use Andresalice\Winelivery\Models\Newsletter;
use Andresalice\Winelivery\Models\Order;
use Andresalice\Winelivery\Models\Porder;
use Andresalice\Winelivery\Models\Product;
use Andresalice\Winelivery\Models\Rating;
use Andresalice\Winelivery\Models\Region;
use Andresalice\Winelivery\Models\Review;
use Andresalice\Winelivery\Models\Sector;
use Andresalice\Winelivery\Models\Slideshow;
use Andresalice\Winelivery\Models\Taste;
use Andresalice\Winelivery\Models\Uva;
use Andresalice\Winelivery\Models\Wishlist;
use Andresalice\Winelivery\Models\Modal;
use RainLab\User\Models\User;
use RainLab\User\Facades\Auth;

// Route::get('/populateEmbutidos', function(){
// 	$products = Product::orderBy('id', 'ASC')->get();
// 	foreach($products as $product){
// 		DB::table('product_product')->insert(['product_id' => 159, 'embutido_id' => $product->id]);
// 		DB::table('product_product')->insert(['product_id' => 160, 'embutido_id' => $product->id]);
// 	}
// });

Route::post('/rest/v1/logIn', function(){
    $email = Input::get('email');
    $password = Input::get('password');
    $user = User::where('email', $email)->first();
    if($user){
        if(Hash::check($password, $user->password)){
            //$user->remember_token = str_random(61);
            $user->save();
            return response()->json(['status' => true, 'user_id' => $user->id, 'user_name' => $user->name, 'user_lastname' => $user->surname, 'remember_token' => $user->remember_token, 'message' => 'Acceso Correcto']);
        } else {
            return response()->json(['status' => false, 'message' => 'Contraseña Incorrecta']);
        }
    } else {
        return response()->json(['status' => false, 'message' => 'Usuario Incorrecto']);
    }
});

Route::post('/rest/v1/signUp', function(){
	$check = User::where('email', Input::get('email'))->first();
	if(!$check){
		$user = Auth::register([
			'name' => Input::get('name'),
			'surname' => Input::get('lastname'),
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			'password_confirmation' => Input::get('password')
		], true);
		if($user){
			$products = Product::where("offer", "!=", 1)->where('type', 1)->where('status', 0)->take(3)->get();
			$mailvars = ['name' => Input::get('name'), 'surname' => Input::get('lastname'), 'products' => $products];
			Mail::send('welcome_mail', $mailvars, function($message) {
				$message->to(Input::get('email'), Input::get('name'));
			});
	        $user->remember_token = str_random(61);
	        $user->reset_code = rand(100000,999999);
	        $user->save();
	        return response()->json(['status' => true, 'user_id' => $user->id, 'user_name' => $user->name, 'user_lastname' => $user->surname, 'remember_token' => $user->remember_token, 'message' => 'Registrado Correctamente']);
	    } else {
	        return response()->json(['status' => false, 'message' => 'Registro Invalido']);
	    }
	} else {
		return response()->json(['status' => false, 'message' => 'Ya existe un usuario registrado con este correo electrónico']);
	}
});

Route::post('/rest/v1/forgotPassword', function(){
	$email = Input::get('email');
	$user = User::where('email', $email)->first();
    if($user){
		$code = $user->reset_code;
	    $mailvars = ['code' => $code, 'email' => $user->email];
		Mail::send('recovery', $mailvars, function($message) use ($user) {
			$message->to($user->email);
		});
		return response()->json(['status' => true, 'message' => 'Correo Valido']);
	} else {
		return response()->json(['status' => false, 'message' => 'Correo Invalido']);
	}
});

Route::post('/rest/v1/resetPassword', function(){
	$code = Input::get('code');
	$password = Input::get('password');
	$user = User::where('reset_code', $code)->first();
	if($user){
		$user->password = $password;
		$user->password_confirmation = $password;
		$user->reset_code = rand(100000,999999);
		$user->remember_token = str_random(61);
		$user->save();
		return response()->json(['status' => true, 'user_id' => $user->id, 'user_name' => $user->name, 'user_lastname' => $user->surname, 'remember_token' => $user->remember_token, 'message' => 'Reinicio Correcto']);
	} else {
		return response()->json(['status' => false, 'message' => 'Código Invalido']);
	}
});

Route::post('/rest/v1/updateToken', function(){
    $user_id = Input::get('user_id');
    if($user_id){
        $user = User::find($user_id);
        $remember_token = Input::get('remember_token');
        if($user->remember_token == $remember_token){
        	$user->push_token = Input::get('token');
        	$user->save();
        	return response()->json(['status' => true, 'message' => 'Token Valido']);
        } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
    } else {
        return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
    }
});

Route::post('/rest/v1/getHome', function(){
	$user_id = Input::get('user_id');
    if($user_id){
        $user = User::find($user_id);
        $remember_token = Input::get('remember_token');
        if($user->remember_token == $remember_token){
            $bans = Slideshow::take(5)->get();
            $banners = array();
			if($bans){
				foreach($bans as $banner){
					if($banner->images_m){
						$banner->image = $banner->images_m->getPath();
						$banners[] = $banner;
					}
				}
			}
			//$products = Product::where('offer', '<>', 1)->where('status', 0)->where('type', '<>', 2)->orderBy('created_at', 'DESC')->take(4)->get();
			$products = false;
			if($products){
				foreach($products as $product){
					$product->image = $product->featured_image->getPath();
					$product->region = $product->region;
					if($product->region){
						$product->region->country = $product->region->country;
					}
					$product->category = $product->category;
					$product->uvas = $product->uvas;
					if($product->embutidos){
						foreach($product->embutidos as $embutido){
							$embutido->image = $embutido->featured_image->getPath();
						}
					}
					$s5 = $product->stars()->where("stars",5)->count();
					$s4 = $product->stars()->where("stars",4)->count();
					$s3 = $product->stars()->where("stars",3)->count();
					$s2 = $product->stars()->where("stars",2)->count();
					$s1 = $product->stars()->where("stars",1)->count();
					$sc = 5 * $s5 + 4 * $s4 + 3 * $s3 + 2 * $s2 + 1 * $s1;
					if($sc == 0){$product->total_stars = 5;}
					else{$product->total_stars = substr($sc/($s5+$s4+$s3+$s2+$s1), 0, 1);}
					$product->minus_stars = 5 - $product->total_stars;
					$product->reviews = Review::where('product_id', $product->id)->get();
					if($product->reviews){
						foreach($product->reviews as $review){
							$review->taste = $review->taste;
							$review->product = $review->product;
							$review->image = $review->taste->featured_image->getPath();
							$review->starsless = 5 - $review->stars;
						}
					}
					$product->comments = Comment::where('product_id', $product->id)->orderBy('id', 'DESC')->get();
					if($product->comments){
						foreach($product->comments as $comment){
							$comment->user = $comment->user;
						}
					}
				}
			}
			$special_products = Product::where('offer', 1)->where('status', 0)->where('type', '<>', 2)->orderBy('created_at', 'DESC')->take(8)->get();
			if($special_products){
				foreach($special_products as $product){
					$product->image = $product->featured_image->getPath();
					$product->region = $product->region;
					if($product->region){
						$product->region->country = $product->region->country;
					}
					$product->category = $product->category;
					$product->uvas = $product->uvas;
					if($product->embutidos){
						foreach($product->embutidos as $embutido){
							$embutido->image = $embutido->featured_image->getPath();
						}
					}
					$s5 = $product->stars()->where("stars",5)->count();
					$s4 = $product->stars()->where("stars",4)->count();
					$s3 = $product->stars()->where("stars",3)->count();
					$s2 = $product->stars()->where("stars",2)->count();
					$s1 = $product->stars()->where("stars",1)->count();
					$sc = 5 * $s5 + 4 * $s4 + 3 * $s3 + 2 * $s2 + 1 * $s1;
					if($sc == 0){$product->total_stars = 5;}
					else{$product->total_stars = substr($sc/($s5+$s4+$s3+$s2+$s1), 0, 1);}
					$product->minus_stars = 5 - $product->total_stars;
					$product->reviews = Review::where('product_id', $product->id)->get();
					if($product->reviews){
						foreach($product->reviews as $review){
							$review->taste = $review->taste;
							$review->product = $review->product;
							$review->image = $review->taste->featured_image->getPath();
							$review->starsless = 5 - $review->stars;
						}
					}
					$product->comments = Comment::where('product_id', $product->id)->orderBy('id', 'DESC')->get();
					if($product->comments){
						foreach($product->comments as $comment){
							$comment->user = $comment->user;
						}
					}
					if($product->type == 3) $product->type = 2;
				}
			}
			$recommended_products = Product::orderByRaw("RAND()")->where('status', 0)->where('type', '<>', 2)->take(12)->get();
			if($recommended_products){
				foreach($recommended_products as $product){
					$product->image = $product->featured_image->getPath();
					$product->region = $product->region;
					if($product->region){
						$product->region->country = $product->region->country;
					}
					$product->category = $product->category;
					$product->uvas = $product->uvas;
					if($product->embutidos){
						foreach($product->embutidos as $embutido){
							$embutido->image = $embutido->featured_image->getPath();
						}
					}
					$s5 = $product->stars()->where("stars",5)->count();
					$s4 = $product->stars()->where("stars",4)->count();
					$s3 = $product->stars()->where("stars",3)->count();
					$s2 = $product->stars()->where("stars",2)->count();
					$s1 = $product->stars()->where("stars",1)->count();
					$sc = 5 * $s5 + 4 * $s4 + 3 * $s3 + 2 * $s2 + 1 * $s1;
					if($sc == 0){$product->total_stars = 5;}
					else{$product->total_stars = substr($sc/($s5+$s4+$s3+$s2+$s1), 0, 1);}
					$product->minus_stars = 5 - $product->total_stars;
					$product->reviews = Review::where('product_id', $product->id)->get();
					if($product->reviews){
						foreach($product->reviews as $review){
							$review->taste = $review->taste;
							$review->product = $review->product;
							$review->image = $review->taste->featured_image->getPath();
							$review->starsless = 5 - $review->stars;
						}
					}
					$product->comments = Comment::where('product_id', $product->id)->orderBy('id', 'DESC')->get();
					if($product->comments){
						foreach($product->comments as $comment){
							$comment->user = $comment->user;
						}
					}
					if($product->type == 3) $product->type = 2;
				}
			}
			$inlay_products = Product::orderByRaw("RAND()")->where('type', 2)->where('status', 0)->take(12)->get();
			if($inlay_products){
				foreach($inlay_products as $product){
					$product->image = $product->featured_image->getPath();
					$product->region = $product->region;
					if($product->region){
						$product->region->country = $product->region->country;
					}
					$product->category = $product->category;
					$product->uvas = $product->uvas;
					if($product->embutidos){
						foreach($product->embutidos as $embutido){
							$embutido->image = $embutido->featured_image->getPath();
						}
					}
					$s5 = $product->stars()->where("stars",5)->count();
					$s4 = $product->stars()->where("stars",4)->count();
					$s3 = $product->stars()->where("stars",3)->count();
					$s2 = $product->stars()->where("stars",2)->count();
					$s1 = $product->stars()->where("stars",1)->count();
					$sc = 5 * $s5 + 4 * $s4 + 3 * $s3 + 2 * $s2 + 1 * $s1;
					if($sc == 0){$product->total_stars = 5;}
					else{$product->total_stars = substr($sc/($s5+$s4+$s3+$s2+$s1), 0, 1);}
					$product->minus_stars = 5 - $product->total_stars;
					$product->reviews = Review::where('product_id', $product->id)->get();
					if($product->reviews){
						foreach($product->reviews as $review){
							$review->taste = $review->taste;
							$review->product = $review->product;
							$review->image = $review->taste->featured_image->getPath();
							$review->starsless = 5 - $review->stars;
						}
					}
					$product->comments = Comment::where('product_id', $product->id)->orderBy('id', 'DESC')->get();
					if($product->comments){
						foreach($product->comments as $comment){
							$comment->user = $comment->user;
						}
					}
				}
			}
			$categories = Category::orderBy('id', 'ASC')->get();
			$carts = Cart::select(DB::raw('sum(quantity) as carts'))->where('user_id', $user_id)->first()->carts;
			if(!$carts) $carts = 0;
			$wishs = count(Wishlist::where('user_id', $user_id)->get());
			// Monthly wine
			$monthly = Product::where('month', 1)->where('type', 1)->where('status', 0)->first();
			if($monthly){
				$monthly->image = $monthly->featured_image->getPath();
				$monthly->region = $monthly->region;
				$monthly->region->country = $monthly->region->country;
				$monthly->category = $monthly->category;
				$monthly->uvas = $monthly->uvas;
				if($monthly->embutidos){
					foreach($monthly->embutidos as $embutido){
						$embutido->image = $embutido->featured_image->getPath();
					}
				}
				$s5 = $monthly->stars()->where("stars",5)->count();
				$s4 = $monthly->stars()->where("stars",4)->count();
				$s3 = $monthly->stars()->where("stars",3)->count();
				$s2 = $monthly->stars()->where("stars",2)->count();
				$s1 = $monthly->stars()->where("stars",1)->count();
				$sc = 5 * $s5 + 4 * $s4 + 3 * $s3 + 2 * $s2 + 1 * $s1;
				if($sc == 0){$monthly->total_stars = 5;}
				else{$monthly->total_stars = substr($sc/($s5+$s4+$s3+$s2+$s1), 0, 1);}
				$monthly->minus_stars = 5 - $monthly->total_stars;
				$monthly->reviews = Review::where('product_id', $monthly->id)->get();
				if($monthly->reviews){
					foreach($monthly->reviews as $review){
						$review->taste = $review->taste;
						$review->product = $review->product;
						$review->image = $review->taste->featured_image->getPath();
						$review->starsless = 5 - $review->stars;
					}
				}
				$monthly->comments = Comment::where('product_id', $monthly->id)->orderBy('id', 'DESC')->get();
				if($monthly->comments){
					foreach($monthly->comments as $comment){
						$comment->user = $comment->user;
					}
				}
			}
			$modal = Modal::orderBy('id', 'DESC')->first();
			$modal->image = $modal->featured_image_mobile->getPath();
			if($modal->type == 1){
				$modal->product->image = $modal->product->featured_image->getPath();
			}
			return response()->json(['status' => true, 'banners' => $banners, 'products' => $products, 'special_products' => $special_products, 'recommended_products' => $recommended_products, 'inlay_products' => $inlay_products, 'monthly' => $monthly, 'categories' => $categories, 'carts' => $carts, 'wishs' => $wishs, 'modal' => $modal, 'message' => 'Inicio Satisfactorio']);
        } else {
        	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
        }
    } else {
        return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
    }
});

Route::post('/rest/v1/getProduct', function(){
	$user_id = Input::get('user_id');
    if($user_id){
        $user = User::find($user_id);
        $remember_token = Input::get('remember_token');
        if($user->remember_token == $remember_token){
        	$product_id = Input::get('product_id');
        	$product = Product::find($product_id);
			$product->image = $product->featured_image->getPath();
			$product->region = $product->region;
			if($product->region){
				$product->region->country = $product->region->country;
			}
			$product->category = $product->category;
			$product->uvas = $product->uvas;
			if($product->embutidos){
				foreach($product->embutidos as $embutido){
					$embutido->image = $embutido->featured_image->getPath();
				}
			}
			$s5 = $product->stars()->where("stars",5)->count();
			$s4 = $product->stars()->where("stars",4)->count();
			$s3 = $product->stars()->where("stars",3)->count();
			$s2 = $product->stars()->where("stars",2)->count();
			$s1 = $product->stars()->where("stars",1)->count();
			$sc = 5 * $s5 + 4 * $s4 + 3 * $s3 + 2 * $s2 + 1 * $s1;
			if($sc == 0){$product->total_stars = 5;}
			else{$product->total_stars = substr($sc/($s5+$s4+$s3+$s2+$s1), 0, 1);}
			$product->minus_stars = 5 - $product->total_stars;
			$product->reviews = Review::where('product_id', $product->id)->get();
			if($product->reviews){
				foreach($product->reviews as $review){
					$review->taste = $review->taste;
					$review->product = $review->product;
					$review->image = $review->taste->featured_image->getPath();
					$review->starsless = 5 - $review->stars;
				}
			}
			$product->comments = Comment::where('product_id', $product->id)->orderBy('id', 'DESC')->get();
			if($product->comments){
				foreach($product->comments as $comment){
					$comment->user = $comment->user;
				}
			}
			if($product->type == 3) $product->type = 2;
			return response()->json(['status' => true, 'product' => $product, 'message' => 'Producto Obtenido']);
        } else {
        	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
        }
    } else {
        return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
    }
});

Route::post('/rest/v1/getProducts', function(){
	$user_id = Input::get('user_id');
    if($user_id){
        $user = User::find($user_id);
        $remember_token = Input::get('remember_token');
        if($user->remember_token == $remember_token){
        	$category_id = Input::get('category_id');
        	$country_id = Input::get('country_id');
        	$region_id = Input::get('region_id');
        	$range = Input::get('range');
        	if($region_id){
        		$products = Product::orderBy('created_at', 'DESC')->where('status', 0)->where(function($query) use ($category_id, $region_id, $range){
					if($category_id){ $query->where('category_id', $category_id); }
					if($region_id){ $query->where('region_id', $region_id); }
					if($range){
						$range = explode("-", $range);
						$query->where('price', '>', $range[0])->where('price', '<', $range[1]);
					}
				})->get();
        	} else if($country_id){
				$products = array();
        		$regions = Region::where('country_id', $country_id)->get();
        		if($regions){
        			foreach($regions as $region){
        				$region_id = $region->id;
        				$prods = Product::orderBy('created_at', 'DESC')->where('status', 0)->where(function($query) use ($category_id, $region_id, $range){
							if($category_id){ $query->where('category_id', $category_id); }
							if($region_id){ $query->where('region_id', $region_id); }
							if($range){
								$range = explode("-", $range);
								$query->where('price', '>', $range[0])->where('price', '<', $range[1]);
							}
						})->get();
						if($prods){
							foreach($prods as $product){
								$products[] = $product;
							}
						}
        			}
        		}
			} else {
				$products = Product::orderBy('created_at', 'DESC')->where('status', 0)->where(function($query) use ($category_id, $range){
					if($category_id){ $query->where('category_id', $category_id); }
					if($range){
						$range = explode("-", $range);
						$query->where('price', '>', $range[0])->where('price', '<', $range[1]);
					}
				})->get();
			}
			if($products){
				foreach($products as $product){
					$product->image = $product->featured_image->getPath();
					$product->region = $product->region;
					if($product->region){
						$product->region->country = $product->region->country;
					}
					$product->category = $product->category;
					$product->uvas = $product->uvas;
					if($product->embutidos){
						foreach($product->embutidos as $embutido){
							$embutido->image = $embutido->featured_image->getPath();
						}
					}
					$s5 = $product->stars()->where("stars",5)->count();
					$s4 = $product->stars()->where("stars",4)->count();
					$s3 = $product->stars()->where("stars",3)->count();
					$s2 = $product->stars()->where("stars",2)->count();
					$s1 = $product->stars()->where("stars",1)->count();
					$sc = 5 * $s5 + 4 * $s4 + 3 * $s3 + 2 * $s2 + 1 * $s1;
					if($sc == 0){$product->total_stars = 5;}
					else{$product->total_stars = substr($sc/($s5+$s4+$s3+$s2+$s1), 0, 1);}
					$product->minus_stars = 5 - $product->total_stars;
					$product->reviews = Review::where('product_id', $product->id)->get();
					if($product->reviews){
						foreach($product->reviews as $review){
							$review->taste = $review->taste;
							$review->product = $review->product;
							$review->image = $review->taste->featured_image->getPath();
							$review->starsless = 5 - $review->stars;
						}
					}
					$product->comments = Comment::where('product_id', $product->id)->orderBy('id', 'DESC')->get();
					if($product->comments){
						foreach($product->comments as $comment){
							$comment->user = $comment->user;
						}
					}
					if($product->type == 3) $product->type = 2;
				}
			}
			$categories = Category::orderBy('id', 'ASC')->get();
			if($categories){
				foreach($categories as $category){
					if($category->countries){
						foreach($category->countries as $country){
							if($country->regions){
								$country->regions = $country->regions;
							} else {
								$country->regions = [];
							}
						}
					} else {
						$category->countries = [];
					}
				}
			}
			return response()->json(['status' => true, 'products' => $products, 'categories' => $categories, 'message' => 'Productos Obtenidos']);
        } else {
        	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
        }
    } else {
        return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
    }
});

Route::post('/rest/v1/searchProducts', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			$query = Input::get('query');
			$products = Product::where('title', 'LIKE', '%'. $query .'%')->where('status', 0)->orderBy('created_at', 'DESC')->get();
			if($products){
				foreach($products as $product){
					$product->image = $product->featured_image->getPath();
					$product->region = $product->region;
					if($product->region){
						$product->region->country = $product->region->country;
					}
					$product->category = $product->category;
					$product->uvas = $product->uvas;
					if($product->embutidos){
						foreach($product->embutidos as $embutido){
							$embutido->image = $embutido->featured_image->getPath();
						}
					}
					$s5 = $product->stars()->where("stars",5)->count();
					$s4 = $product->stars()->where("stars",4)->count();
					$s3 = $product->stars()->where("stars",3)->count();
					$s2 = $product->stars()->where("stars",2)->count();
					$s1 = $product->stars()->where("stars",1)->count();
					$sc = 5 * $s5 + 4 * $s4 + 3 * $s3 + 2 * $s2 + 1 * $s1;
					if($sc == 0){$product->total_stars = 5;}
					else{$product->total_stars = substr($sc/($s5+$s4+$s3+$s2+$s1), 0, 1);}
					$product->minus_stars = 5 - $product->total_stars;
					$product->reviews = Review::where('product_id', $product->id)->get();
					if($product->reviews){
						foreach($product->reviews as $review){
							$review->taste = $review->taste;
							$review->product = $review->product;
							$review->image = $review->taste->featured_image->getPath();
							$review->starsless = 5 - $review->stars;
						}
					}
					$product->comments = Comment::where('product_id', $product->id)->orderBy('id', 'DESC')->get();
					if($product->comments){
						foreach($product->comments as $comment){
							$comment->user = $comment->user;
						}
					}
					if($product->type == 3) $product->type = 2;
				}
			}
			return response()->json(['status' => true, 'products' => $products, 'message' => 'Busqueda Realizada']); 
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/getProfile', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
	        return response()->json(['status' => true, 'user' => $user, 'message' => 'Perfil Obtenido']);
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/updateProfile', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			if(Input::get("name") && Input::get("lastname") && Input::get("email")){
				$user = User::find($user_id);
				$user->name = Input::get("name");
				$user->surname = Input::get("lastname");
				$user->email = Input::get("email");
				$user->username = $user->email;
				$user->save();
				return response()->json(['status' => true, 'message' => 'Perfil Actualizado']);
			} else {
				return response()->json(['status' => false, 'message' => 'Error Actualizando Perfil']);
			}
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/updatePassword', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			if(Input::get("password")){
				$user = User::find($user_id);
				$user->password = Input::get("password");
				$user->password_confirmation = Input::get("password");
				$user->save();
				return response()->json(['status' => true, 'message' => 'Contraseña Actualizada']);
			} else {
				return response()->json(['status' => false, 'message' => 'Error Actualizando Contraseña']);
			}
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/updateNotifications', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
	    	$user = User::find($user_id);
			$user->is_notification = Input::get("notifications");
			$user->save();
			return response()->json(['status' => true, 'message' => 'Notificaciones Actualizadas']);
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/addToCart', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			$product_id = Input::get('product_id');
			if($user_id && $product_id){
				$check = Cart::where('user_id', $user_id)->where('product_id', $product_id)->first();
				if($check){
					$check->quantity++;
					$check->save();
				} else {
					$cart = new Cart;
					$cart->user_id = $user_id;
					$cart->product_id = $product_id;
					$cart->quantity = 1;
					$cart->save();
				}
				return response()->json(['status' => true, 'message' => 'Agregado al carrito']);
			} else {
				return response()->json(['status' => false, 'message' => 'Error agregando al carrito']);
			}
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/addToWishlist', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			$product_id = Input::get('product_id');
			if($user_id && $product_id){
				$check = Wishlist::where('user_id', $user_id)->where('product_id', $product_id)->first();
				if($check){
					$check->delete();
					return response()->json(['status' => true, 'message' => 'Eliminado del wishlist']);
				} else {
					$wishlist = new Wishlist;
					$wishlist->user_id = $user_id;
					$wishlist->product_id = $product_id;
					$wishlist->save();
					return response()->json(['status' => true, 'message' => 'Agregado al wishlist']);
				}
			} else {
				return response()->json(['status' => false, 'message' => 'Error agregando al carrito']);
			}
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/deleteFromCart', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			$product_id = Input::get('product_id');
			if($user_id && $product_id){
				$check = Cart::where('user_id', $user_id)->where('id', $product_id)->first();
				if($check){
					$check->delete();
				}
				return response()->json(['status' => true, 'message' => 'Producto Eliminado']);
			} else {
				return response()->json(['status' => false, 'message' => 'No se pudo eliminar el producto']);
			}
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/updateCart', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			$product_id = Input::get('product_id');
			if($user_id && $product_id){
				$quantity = Input::get('quantity');
				$check = Cart::where('user_id', $user_id)->where('id', $product_id)->first();
				if($check && $check->product->stock > $quantity){
					$check->quantity = $quantity;
					$check->save();
					return response()->json(['status' => true, 'message' => 'Producto Actualizado']);
				} else {
					return response()->json(['status' => false, 'message' => 'No tenemos esa cantidad de vinos para ' . $check->product->title]);
				}
			} else {
				return response()->json(['status' => false, 'message' => 'No se pudo actualizar el producto']);
			}
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/getCart', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			$products = Cart::where('user_id', '=', $user_id)->get();
			if($products){
				$total = 0;
				$inlay_products = [];
				$inlay_ids = [];
				foreach($products as $product){
					$product->product->image = $product->product->featured_image->getPath();
					$product->product->region = $product->product->region;
					if($product->product->region){
						$product->product->region->country = $product->product->region->country;
					}
					$product->product->category = $product->product->category;
					$product->product->uvas = $product->product->uvas;
					if($product->product->embutidos){
						foreach($product->product->embutidos as $embutido){
							$embutido->image = $embutido->featured_image->getPath();
							if(!in_array($embutido->id, $inlay_ids)){
								$inlay_products[] = $embutido;
								$inlay_ids[] = $embutido->id;
							}
						}
					}
					$s5 = $product->product->stars()->where("stars",5)->count();
					$s4 = $product->product->stars()->where("stars",4)->count();
					$s3 = $product->product->stars()->where("stars",3)->count();
					$s2 = $product->product->stars()->where("stars",2)->count();
					$s1 = $product->product->stars()->where("stars",1)->count();
					$sc = 5 * $s5 + 4 * $s4 + 3 * $s3 + 2 * $s2 + 1 * $s1;
					if($sc == 0){$product->product->total_stars = 5;}
					else{$product->product->total_stars = substr($sc/($s5+$s4+$s3+$s2+$s1), 0, 1);}
					$product->product->minus_stars = 5 - $product->product->total_stars;
					$product->product->reviews = Review::where('product_id', $product->product->id)->get();
					if($product->product->reviews){
						foreach($product->product->reviews as $review){
							$review->taste = $review->taste;
							$review->product = $review->product;
							$review->image = $review->taste->featured_image->getPath();
							$review->starsless = 5 - $review->stars;
						}
					}
					$product->product->comments = Comment::where('product_id', $product->product->id)->orderBy('id', 'DESC')->get();
					if($product->product->comments){
						foreach($product->product->comments as $comment){
							$comment->user = $comment->user;
						}
					}
					if($product->product->type == 3) $product->product->type = 2;
					$total += $product->product->price * $product->quantity;
				}
			}
			return response()->json(['status' => true, 'products' => $products, 'inlay_products' => $inlay_products, 'total' => $total, 'message' => 'Carrito Obtenido']);
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/getWishlist', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			$products = Wishlist::where('user_id', '=', $user_id)->get();
			if($products){
				foreach($products as $product){
					$product->product->image = $product->product->featured_image->getPath();
					$product->product->region = $product->product->region;
					if($product->product->region){
						$product->product->region->country = $product->product->region->country;
					}
					$product->product->category = $product->product->category;
					$product->product->uvas = $product->product->uvas;
					if($product->product->embutidos){
						foreach($product->product->embutidos as $embutido){
							$embutido->image = $embutido->featured_image->getPath();
						}
					}
					$s5 = $product->product->stars()->where("stars",5)->count();
					$s4 = $product->product->stars()->where("stars",4)->count();
					$s3 = $product->product->stars()->where("stars",3)->count();
					$s2 = $product->product->stars()->where("stars",2)->count();
					$s1 = $product->product->stars()->where("stars",1)->count();
					$sc = 5 * $s5 + 4 * $s4 + 3 * $s3 + 2 * $s2 + 1 * $s1;
					if($sc == 0){$product->product->total_stars = 5;}
					else{$product->product->total_stars = substr($sc/($s5+$s4+$s3+$s2+$s1), 0, 1);}
					$product->product->minus_stars = 5 - $product->product->total_stars;
					$product->product->reviews = Review::where('product_id', $product->product->id)->get();
					if($product->product->reviews){
						foreach($product->product->reviews as $review){
							$review->taste = $review->taste;
							$review->product = $review->product;
							$review->image = $review->taste->featured_image->getPath();
							$review->starsless = 5 - $review->stars;
						}
					}
					$product->product->comments = Comment::where('product_id', $product->product->id)->orderBy('id', 'DESC')->get();
					if($product->product->comments){
						foreach($product->product->comments as $comment){
							$comment->user = $comment->user;
						}
					}
					if($product->product->type == 3) $product->product->type = 2;
				}
			}
			return response()->json(['status' => true, 'products' => $products, 'message' => 'Wishlist Obtenido']);
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/getCheckout', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			$addresses = Address::where('user_id', '=', $user_id)->get();
			$sectors = Sector::orderBy('title', 'ASC')->get();
			return response()->json(['status' => true, 'addresses' => $addresses, 'sectors' => $sectors, 'message' => 'Checkout Obtenido']);
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/getHistory', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
	    	$filter = Input::get('filter');
	    	switch($filter){
	    		case 1:
	    			$orders = Order::where('user_id', $user_id)->get();
	    			break;
	    		case 2:
	    			$from_date = date("Y-m-d");
	    			$to_date = date("Y-m-d");
	    			$from_date = $from_date . " 00:00:00";
	    			$to_date = $to_date . " 23:59:59";
	    			$orders = Order::where('user_id', $user_id)->where('created_at', '>', $from_date)->where('created_at', '<', $to_date)->get();
	    			break;
	    		case 3:
	    			$from_date = date("Y-m-d", strtotime("-1 months"));
	    			$to_date = date("Y-m-d");
	    			$orders = Order::where('user_id', $user_id)->where('created_at', '>', $from_date)->where('created_at', '<', $to_date)->get();
	    			break;
	    		case 4:
	    			$from_date = date("Y-m-d", strtotime("-6 months"));
	    			$to_date = date("Y-m-d");
	    			$orders = Order::where('user_id', $user_id)->where('created_at', '>', $from_date)->where('created_at', '<', $to_date)->get();
	    			break;
	    		case 5:
	    			$from_date = date("Y-m-d", strtotime("-12 months"));
	    			$to_date = date("Y-m-d");
	    			$orders = Order::where('user_id', $user_id)->where('created_at', '>', $from_date)->where('created_at', '<', $to_date)->get();
	    			break;
	    		default:
	    			$orders = Order::where('user_id', $user_id)->get();
	    			break;
	    	}
		    foreach($orders as $order)
		    {
		        $order->quantity = 0;
		        foreach($order->porder as $porder)
		        {
		            $order->quantity += $porder->quantity;
		        }
		    }
			return response()->json(['status' => true, 'orders' => $orders]);
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/createOrder', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			$address = Address::find(Input::get('address_id'));
			// Create Order
			$user = User::find($user_id);
			$cart = Cart::where('user_id', $user->id)->get();
		    $sum = 0;
		    foreach($cart as $c){ $sum += $c->product->price * $c->quantity; }
			$order = new Order();
			$order->user_id = $user->id;
			$order->name = $user->name;
			$order->surname = $user->surname;
			$order->email = $user->email;
			$order->address = "Sector: " . $address->sector . "       Calle: " . $address->calle . "       Residencial: " . $address->residencial . "      No.:" . $address->numero . "       Proximo a: " . $address->proximo;
			$order->telefono = $address->telefono;
			$order->celular = $address->celular;
			$order->total = "RD$" . ($sum + 90);
			$order->status = "Pendiente";
			$order->order_token = str_random(61);
			$order->rnc = "NO RNC";
			$order->pago = "SIN PAGO";
			$order->cambio = "SIN CAMBIO";
			$order->save();
			foreach($cart as $c){
				DB::table("product_order")->insert(['order_id' => $order->id, 'product_id' => $c->product_id, 'quantity' => $c->quantity]);
			}
			// Cart
			$cart_total = $sum;
			$cart_total_envio = $sum + 90;
			$cart_counter = Cart::where("user_id","=", $user->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
			Cart::where("user_id", $user->id)->delete();
			// Order
			$order->saddress = $address->calle . ", " . $address->casa . " " . $address->numero . ", " . $address->sector . ", " . $address->proximo . ", " . $address->telefono;
			$order->stotal = $sum;
			$order->scounter = $cart_counter;
			return response()->json(['status' => true, 'order' => $order, 'message' => 'Orden Creada']);
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/createAddressOrder', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			$sector = Input::get('sector');
			$street = Input::get('street');
			$home = Input::get('home');
			$number = Input::get('number');
			$phone = Input::get('phone');
			$celphone = Input::get('celphone');
			$next = Input::get('next');
			// Create Address
			$address = new Address;
			$address->user_id = $user_id;
			$address->sector = $sector;
			$address->calle = $street;
			$address->residencial = $home;
			$address->numero = $number;
			$address->telefono = $phone;
			$address->celular = $celphone;
			$address->proximo = $next;
			$address->save();
			// Create Order
			$user = User::find($user_id);
			$cart = Cart::where('user_id', $user->id)->get();
		    $sum = 0;
		    foreach($cart as $c){ $sum += $c->product->price * $c->quantity; }
			$order = new Order();
			$order->user_id = $user->id;
			$order->name = $user->name;
			$order->surname = $user->surname;
			$order->email = $user->email;
			$order->address = "Sector: " . $address->sector . "       Calle: " . $address->calle . "       Residencial: " . $address->residencial . "      No.:" . $address->numero . "       Proximo a: " . $address->proximo;
			$order->telefono = $address->telefono;
			$order->celular = $address->celular;
			$order->total = "RD$" . ($sum + 90);
			$order->status = "Pendiente";
			$order->order_token = str_random(61);
			$order->rnc = "NO RNC";
			$order->pago = "SIN PAGO";
			$order->cambio = "SIN CAMBIO";
			$order->save();
			foreach($cart as $c){
				DB::table("product_order")->insert(['order_id' => $order->id, 'product_id' => $c->product_id, 'quantity' => $c->quantity]);
			}
			// Cart
			$cart_total = $sum;
			$cart_total_envio = $sum + 90;
			$cart_counter = Cart::where("user_id","=", $user->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
			Cart::where("user_id", $user->id)->delete();
			// Order
			$order->saddress = $address->calle . ", " . $address->casa . " " . $address->numero . ", " . $address->sector . ", " . $address->proximo . ", " . $address->telefono;
			$order->stotal = $sum;
			$order->scounter = $cart_counter;
			return response()->json(['status' => true, 'order' => $order, 'message' => 'Orden Creada']);
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/processOrder', function(){
	// Email to user
	$cart_total = $sum;
	$cart_total_envio = $sum + 90;
	$cart_counter = Cart::where("user_id","=", $user->id)->select(DB::raw('sum(quantity) as cart_counter'))->first()->cart_counter;
	$mailvars = ['cart' => $cart, 'address' => $address, 'cart_total' => $cart_total, 'cart_total_envio' => $cart_total_envio, 'cart_counter' => $cart_counter];
	Mail::send('Orders', $mailvars, function($message) use ($user) {
		$message->to($user->email, $user->username);
	});
	// Email to admin
    Mail::send('Orders_admin', [], function($message) use ($user) {
    	$message->to("wineliveryrd@gmail.com", "Luis Peña");
    });
});

Route::post('/rest/v1/createAddress', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
	    	$edit_id = Input::get('edit_id');
			$sector = Input::get('sector');
			$street = Input::get('street');
			$home = Input::get('home');
			$number = Input::get('number');
			$phone = Input::get('phone');
			$celphone = Input::get('celphone');
			$next = Input::get('next');
			if($edit_id){
				$address = Address::find($edit_id);
			} else {
				$address = new Address;
			}
			$address->user_id = $user_id;
			$address->sector = $sector;
			$address->calle = $street;
			$address->residencial = $home;
			$address->numero = $number;
			$address->telefono = $phone;
			$address->celular = $celphone;
			$address->proximo = $next;
			$address->save();
			return response()->json(['status' => true, 'message' => 'Direccion Creada']);
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/deleteAddress', function(){
	$user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
			$address_id = Input::get('address_id');
			if($user_id && $address_id){
				$check = Address::where('user_id', $user_id)->where('id', $address_id)->first();
				if($check){
					$check->delete();
				}
				return response()->json(['status' => true, 'message' => 'Producto Eliminado']);
			} else {
				return response()->json(['status' => false, 'message' => 'No se pudo eliminar el producto']);
			}
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/submitStars', function(){
    $user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
	    	$product_id = Input::get('product_id');
    		$check = Rating::where('user_id', $user_id)->where('product_id', $product_id)->first();
		    if($check){
		        $check->stars = Input::get('stars');
		        $check->save();
		        return response()->json(['status' => true, 'message' => 'Estrellas Modificadas']);
		    } else {
		        $rating = new Rating;
		        $rating->product_id = $product_id;
		        $rating->user_id = $user_id;
		        $rating->stars = Input::get('stars');
		        $rating->save();
		        return response()->json(['status' => true, 'message' => 'Estrellas Agregadas']);
		    }
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});

Route::post('/rest/v1/submitReview', function(){
    $user_id = Input::get('user_id');
	if($user_id){
	    $user = User::find($user_id);
	    $remember_token = Input::get('remember_token');
	    if($user->remember_token == $remember_token){
	    	$product_id = Input::get('product_id');
		    $comment = new Comment;
		    $comment->product_id = $product_id;
		    $comment->user_id = $user_id;
		    $comment->comment = Input::get('review');
		    $comment->save();
		    $reviews = Review::where('product_id', $product_id)->get();
		    return response()->json(['status' => true, 'message' => 'Comentario Agregado', 'reviews' => $reviews]);
	    } else {
	    	return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	    }
	} else {
	    return response()->json(['status' => false, 'message' => 'El usuario no esta autenticado']);
	}
});