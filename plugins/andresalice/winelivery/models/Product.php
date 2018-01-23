<?php namespace Andresalice\Winelivery\Models;

use Model;
use DB;
use RainLab\User\Models\User;

/**
 * Model
 */
class Product extends Model
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
    public $table = 'andresalice_winelivery_products';

    public $attachOne = ['featured_image' => ['System\Models\File'], 'featured_image_big' => ['System\Models\File']];

    // public $belongsTo = [
    //     'uva' => 'Andresalice\Winelivery\Models\Uva',
    //     'country' => 'Andresalice\Winelivery\Models\Country',
    //     'region' => 'Andresalice\Winelivery\Models\Region',
    //     'category' => 'Andresalice\Winelivery\Models\Category'
    // ];
    public $belongsTo = [
        'uva' => 'Andresalice\Winelivery\Models\Uva',
        'region' => 'Andresalice\Winelivery\Models\Region',
        'category' => 'Andresalice\Winelivery\Models\Category'
    ];

    public $belongsToMany = [
        'uvas' => ['Andresalice\Winelivery\Models\Uva'],
        'embutidos' => ['Andresalice\Winelivery\Models\Product', 'key' => 'embutido_id', 'scope' => 'embutidos']
    ];

    public $hasMany = ['stars' => ['Andresalice\Winelivery\Models\Rating'], 'comments' => ['Andresalice\Winelivery\Models\Comment']];

    public function beforeSave(){
        if($this->notification == 1){
            $this->notification = 0;
            $users = User::where('push_token', '<>', '')->where('is_notification', 1)->get();
            if($users){
                $tokens = [];
                foreach($users as $user){
                    $tokens[] = $user->push_token;
                }
                $data = ["tokens" => $tokens, "profile" => "wineliveryrd_fcm_production", "notification" => ["message" => $this->title, "ios" => ["sound" => "default", "badge" => 1], "payload" => ["product_id" => $this->id]]];
                $data_string = json_encode($data);
                $ch = curl_init('https://api.ionic.io/push/notifications');                                                                      
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                    'Content-Type: application/json',
                    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJiYzMzMjI2NC1hM2M5LTRmMDktYWUwMC00MjhiNDExZDlmMmMifQ.c6z9_I85O09SmmoTMVw1AVy3FkDDhsKKcrqDAYy7pzo' 
                ));                                                                                                            
                $result = curl_exec($ch);
                // Firebase Notification
                // $data = ["to" => "/topics/Notifications", "notification" => ["title" => "WineliveryRD", "text" => $this->title], "data" => ["product_id" => $this->id, "title" => $this->title, "text"=> $this->title, "isFrom" => "notifications"], "time_to_live" => 600];
                // $data_string = json_encode($data);                                                      
                // $ch = curl_init('https://fcm.googleapis.com/fcm/send');                                                                      
                // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
                // curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
                // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
                // curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                //     'Content-Type: application/json',                                                                                
                //     'Authorization:key=AAAAVR7K0eU:APA91bEaaUSMq7xqSIzP5Ktbkok8ylmFgbmTXQGfJGINtoDpl5foM3yBbvinSJ7jv_mOZn4X1EOXSjmLPZ_ajPFHr81hlqBxXHyCvFCY0j4IiAl3HPGSCF4Z0n_soLHNWWCQNyaYlWCH'                                                                  
                // ));                                                                                                            
                // $result = curl_exec($ch);
                // curl_close($ch);
            }
        }
        if($this->status == 1)
        {
            DB::table('andresalice_winelivery_carts')->where('product_id', '=', $this->id)->delete();
        }
    }

    public function scopeEmbutidos($query){
        return $query->where('type', '=', 2);
    }

    public function scopeStatus($query){
        return $query->where('type', '=', 1);
    }

    public function listStatus ($keyValue=null, $fieldName=null) 
    {
        return [1 => 'Vino', 2 => 'Embutido', 3 => 'Destilado'];
    }

}