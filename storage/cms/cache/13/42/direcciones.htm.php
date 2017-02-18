<?php 
use Andresalice\Winelivery\Models\Address;use Andresalice\Winelivery\Models\Sector;class Cms58a8df5f06861726137590_2335209221Class extends \Cms\Classes\PageCode
{


public function onStart()
{
    $this['addresses'] = Address::where("user_id",Auth::getUser()->id)->get();
    $this['sectors'] = Sector::get();
}
public function onAddressesForm()
{
    $user_id = Auth::getUser()->id;
    if(Input::has("id_control"))
    {
        $address = Address::where("id",post("id_control"))->update(['sector' => post("sector"),'calle' => post("calle"),'residencial' => post("residencial"),'numero' => post("numero"),'telefono' => post("telefono"),'celular' => post("celular"),'proximo' => post("proximo")]);
    }
    else
    {
        $address = new Address;
        $address->sector = post("sector");
        $address->calle = post("calle");
        $address->residencial = post("residencial");
        $address->numero = post("numero");
        $address->telefono = post("telefono");
        $address->celular = post("celular");
        $address->proximo = post("proximo");
        $address->user_id = $user_id;
        $address->save();
    }
   
    $addresses = Address::where("user_id",$user_id)->get();
    return ['#updateAddresses' => $this->renderPartial('addresses', ['addresses' => $addresses])];
}
public function onDeleteAddress()
{
    $id = post("id");
    $address = Address::find($id);
    $address->delete();
    $addresses = Address::where("user_id",Auth::getUser()->id)->get();
    return ['#updateAddresses' => $this->renderPartial('addresses', ['addresses' => $addresses])];
}
}
