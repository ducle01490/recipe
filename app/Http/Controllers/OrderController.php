<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Response;

use App\Recipe;
use App\Customer;
use App\Order;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();

            $name = $data["name"];
            $address = $data["address"];
            $phone = $data["phone"];
            $quantity = $data["quantity"];
            $note = $data["note"];
            $productId = $data["productId"];
            $type = $data["type"];
            //TYPE: 1-recipe 0-menu
            //TODO: validate data
            $user = DB::table('customers')->where('name', $name)->first();

            $customer = Customer::where([
                   'name' => $name,
                   'address' => $address,
                   'phone' => $phone
            ])->first();

            if (!$customer) {
                $customer = new Customer();
                $customer->name = $name;
                $customer->address = $address;
                $customer->phone = $phone;
                $customer->save();

                if (!$customer->id) {
                    return Response::json(array('status'=>'failed', 'messages' => "Lỗi khi tạo dữ liệu. Vui lòng liên hệ hotline!"));
                }
            }

            $order = new Order();
            $order->customerId = $customer->id;
            $order->productId = $productId;
            $order->productType = $type;
            $order->quantity = $quantity;
            $order->userNote = $note;
            $order->status = 0;

            $order->save();
            if (!$order->id) {
                return Response::json(array('status'=>'failed', 'messages' => "Lỗi khi tạo dữ liệu. Vui lòng liên hệ hotline!"));
            }
            
            return Response::json(array('status'=>'success', 'messages' => "Received data"));
        }
    }
}
