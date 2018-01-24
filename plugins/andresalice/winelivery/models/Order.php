<?php namespace Andresalice\Winelivery\Models;

use Model;
use DB;
use BackendAuth;
use RainLab\User\Models\User;
use Andresalice\Winelivery\ModelsProduct;

/**
 * Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andresalice_winelivery_orders';

    public $belongsTo = [
        'user' => 'RainLab\User\Models\User',
        'address' => 'Andresalice\Winelivery\Models\Address'
    ];

    public $hasMany = [
        'porder' => ['Andresalice\Winelivery\Models\Porder', 'key' => 'order_id']
    ];

    public function beforeSave()
    {
        $loggedIn = BackendAuth::check();
        if($loggedIn)
        {
            $this->status = "Completada";
            $user = User::find($this->user_id);
            if($this->user_id != 780)
            {
                $this->name = $user->name;
                $this->surname = $user->surname;
                $this->email = $user->email;
            }
            $total = 0;
            foreach($this->porder as $p)
            {
                $product = Product::find($p->product_id);
                $total += $product->price * $p->quantity;
                $product->stock = $product->stock - $p->quantity;
            }
            $total = $total + 90;
            $this->total = number_format((float)$total); 
            $this->order_token = str_random(61);
        }
    }

    public function listPago ($keyValue=null, $fieldName=null) 
    {
        return ['Tarjeta' => 'Tarjeta', 'Efectivo' => 'Efectivo'];
    }

    // public function getSymbolsAttribute()
    // {
    //     if(!empty($this["attributes"]["symbol"]))
    //     {
    //        $symbol = Symbols::find($this["attributes"]["symbol"]);
    //        return $symbol->symbols->getThumb(50, 50, 'crop');
    //     }
    // }
}