<?php 
use Andresalice\Winelivery\Models\Order;class Cms58b127a68178e242035654_2305879266Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $this['orders'] = DB::table("andresalice_winelivery_orders as o")->join("product_order as po","po.order_id","=","o.id")->groupBy("order_id")->select("po.*","o.*")->get();
}
}
