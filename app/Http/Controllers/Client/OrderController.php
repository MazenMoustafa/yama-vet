<?php

namespace App\Http\Controllers\Client;

use App\Models\Order;
use App\Services\OrderService;
use App\Traits\ResponsesTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\City\CheckRequest;
use App\Http\Requests\Client\Order\StoreRequest;
use App\Http\Requests\Client\Order\CancelRequest;

class OrderController extends Controller
{
    use ResponsesTrait;
    public function index(){
        $orders=Order::whereUserId(auth()->id())
        ->select('id','status','order_number','updated_at'
       // ,
        // 'confirmed_time','shipped_time'
        )
        ->get();
        return $this->success($orders);
    }

    public function tracking(CheckRequest $request){
        $order=Order::whereId($request->id)
        ->with('driver:id,name,phone')
        ->first();
        return $this->success($order);
    }

    public function store(StoreRequest $request ,OrderService $service){
        $result = $service->addOrder($request);
        return $result;
    }
    
    public function cancelOrder(CancelRequest $request){
        $order = Order::find($request->id);
        if($order->status != "out_for_delivery" || $order->status != "delivered" ){
            $order->update(['status' => "cancel"]);
            return $this->success(null,trans('lang.order_cancel'));
        }
        else{
            return $this->success(null,trans('lang.order_not_cancel'));
        }
    }
}
