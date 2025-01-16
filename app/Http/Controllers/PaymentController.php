<?php

namespace App\Http\Controllers;

use App\Services\PaymentServices;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\OrderServices;

// class PaymentController extends Controller
// {
//     public function index()
//     {
//         return view('pages.payments.payment');
//     }
    
//     public function paymentRenewalLisence(string $id = "license")
//     {
//         return view('pages.payments.paymentRenewalLisence', compact('id'));
//     }

//     public function success()
//     {
//         return view('pages.payments.success');
//     }

//     public function createOrder(Request $request, PaymentServices $paymentServices, OrderServices $orderServices, User $user)
//     {
//         $values = $request->validate([
//             'amount' => 'required|numeric',
//         ]);

//         try {
//             $order = $paymentServices->createOrder($values['amount']);
//             // $payment_id = $user::find(Auth::id())->payments()->latest()->first()->id;
//             // ($order->id && $payment_id) ? $orderServices->create(id: $order->id, payment_id: $payment_id, amount: $values['amount']) : null;
//             return response()->json(["id" => $order->id, "currency" => $order->currency, "amount" => $order->amount]);
//         } catch (\Exception $e) {
//             return response()->json(['status' => false, 'message' => $e->getMessage()]);
//         }
//     }

//     public function paymentCallback(Request $request, PaymentServices $paymentServices)
//     {
//         // validation
//         $data = $request->validate([
//             'razorpay_order_id' => 'required',
//             'razorpay_payment_id' => 'required',
//             'razorpay_signature' => 'required',
//         ]);
//         info("Payment Callback: " . print_r($data, true));

//         //check transaction
//         // $paymentServices->verifyPaymentSignature([...$data]);

//         // // save in database
//         // $this->transactionDataBase->create(["order_id" => $this->getSession('order_id'), "created_payment_id" => $data['razorpay_payment_id'], "created_signature" => $data['razorpay_signature']]);

//         // //destroy session order
//         // session()->forget('order_id');

//         // // redirect
//         // return redirect('/success');
//     }

//     public function createSession(array $data)
//     {
//         session($data);
//     }

//     public function getSession(string $key)
//     {
//         if (!session('order_id')) {
//             throw new \InvalidArgumentException('Invalid session');
//         }
//         return session('order_id');
//     }

//     public function forgotSession()
//     {
//         if (!session('order_id')) {
//             throw new \InvalidArgumentException('Invalid session');
//         }
//         session()->forget('order_id');
//     }
// }
