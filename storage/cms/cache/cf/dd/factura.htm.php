<?php 
use Renatio\DynamicPDF\Classes\PDF;use Andresalice\Winelivery\Models\Order;use Andresalice\Winelivery\Models\Porder;class Cms5a6627a17efde332382504_403915a3ee339a2bae210e14023e1409Class extends \Cms\Classes\PageCode
{



public function onStart()
{
    
    $order = Order::find($this->param('id'));
    $products = Porder::where("order_id", $order->id)->get();
    $total = 0;
    foreach($products as $p)
    {
        $total += $p->product->price * $p->quantity;
    }
    return PDF::loadTemplate('prueba', ["order" => $order, "products" => $products, "total" => $total])->stream();
}
}
