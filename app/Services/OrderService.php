<?php
namespace App\Services;

use App\Models\Order;
use App\Models\Product;
use App\Traits\ResponsesTrait;
use App\Traits\FileUploadTrait;
use DB;

class OrderService{
    use ResponsesTrait;
    use FileUploadTrait;
    public function addOrder($request){
        DB::beginTransaction();
        $order = Order::create(['user_id' => auth()->id(),
        "payment_type" => $request->payment_type,'delivery_time' => $request->delivery_time ,
        "address_id" =>$request->address_id]);
        $totalPrice=0;
        $seller_id=0;
        foreach( $request->products as $product){
        // foreach( json_encode(json_decode($request->products, true)) as $product){
            $actualProduct=Product::whereId($product['id'])->first();
            $price =$actualProduct->price;
            $seller_id = $actualProduct->seller_id;
            if($actualProduct->quantity < $product['quantity']){
                DB::rollback();
                return $this->failed(null,"maximum quantity to order  $actualProduct->name_en:  $actualProduct->quantity");
            }
            $orderDetails['quantity'] = $product['quantity'];
            $orderDetails['product_id'] = $product['id'];
            $orderDetails['price'] = $product['quantity'] * $price;
            $totalPrice += $orderDetails['price'];
            $order->orderDetails()->create($orderDetails);
            $actualProduct->decrement('quantity',$product['quantity']);
        }
        $data =['seller_id' =>$seller_id ,'total_price' => $totalPrice ,"order_number" => $order->id +10000];

        if($request->hasFile('file')) {
            // Log::error('file');
            $data['file']=$this->uploadFile($request->file, 'sections');     
        }
        $order->update($data);
        DB::commit();
        return $this->success(null,"تم الطلب");
    }

    public function changeOrderStatus($request){
        $order = Order::find($request->id);
        $status =[];
        if($order->status == "delivered" || $order->status == "cancel"){
            return "no action can take to this order";
        }else{
            
            if($request->action == "cancel"){
                $status = ['status' =>"cancel" ,'cancel_time' =>now()];
            }
            else if($order->status == "order_placed"){
                $status = ['status' =>"confirmed" ,'confirmed_time' => now()->format('Y-m-d H:i:s')];
            }
            else if($order->status == "confirmed"){
                $status = ['status' =>"shipped" , 'shipped_time' => now()];
            }
            else if($order->status == "shipped"){
                $status = ['status' =>"out_for_delivery" , 'out_for_delivery_time' => now()];
            }
            else if($order->status == "out_for_delivery"){
                $status = ['status' =>"delivered" ,'actual_delivery_time' =>now()];
            }
            $order->update($status);
        }

    }
}

?>