<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller {
    function index() {
        $orders = DB::table('orders')
            ->Join('status', 'orders.StatusId', '=','status.StatusId')
            ->select('orders.*', 'status.*')->orderBy('orders.OrderId', 'desc')->get();
        $status = DB::table('status')->select()->get();
        return view('admin/order/order', compact('orders', 'status'));
    }

    function OrderDetail($OrderId) {
        $orderDetail = DB::table('orders')
            ->Join('orderdetail', 'orders.OrderId', '=','orderdetail.OrderId')
            ->Join('product', 'orderdetail.ProductId', '=','product.ProductId')
            ->Join('variant', 'orderdetail.VariantId', '=','variant.VariantId')
            ->Where('orders.OrderId', $OrderId)
            ->Select('orders.*', 'orderdetail.OrderDetailId', 'variant.Color', 'variant.VariantName', 'orderdetail.Quantity', 'product.Price as ProductPrice', 'variant.Price as VariantPrice')
            ->get();
        $status = DB::table('status')->select()->get();
        return view('admin/order/orderdetail', compact('orderDetail', 'status'));
    }

    function UpdateStatus(Request $request, $orderId, $status) {
        $order = DB::table('orders')
            ->where('OrderId', $orderId)
            ->update(['StatusId' => $status]);
        return $order;
    }

    function ShowByStatusOrder(Request $request, $status) {
        if ($status == 0) {
            $orders = DB::table('orders')
                ->Join('status', 'orders.StatusId', '=','status.StatusId')
                ->select('orders.*', 'status.*')
                ->orderBy('orders.OrderId', 'desc')
                ->get();
        } else {
            $orders = DB::table('orders')
                ->Join('status', 'orders.StatusId', '=','status.StatusId')
                ->where('orders.StatusId', $status)
                ->select('orders.*', 'status.*')
                ->orderBy('orders.OrderId', 'desc')
                ->get();
        }
        return view('admin/order/order_render', compact('orders'));
    }
}
