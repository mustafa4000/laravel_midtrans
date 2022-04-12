<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function payment_handler(Request $request)
    {
        $json = json_decode($request->getContent());
        // return $json;
        $signature_key = hash('sha512', $json->order_id . $json->status_code . $json->gross_amount . env('PAYMENT_SECRET_KEY'));

        if ($signature_key == $json->signature_key) {
            // return "This is invalid signature";
            return abort(404);
        }

        // status berhasil 
        $order = Order::where('order_id', $json->order_id)->first();
        return $order->update(['status'=>$json->transaction_status]);
    }
}
