<?php

namespace App\Services;

use Razorpay\Api\Api;

use function Laravel\Prompts\error;

class PaymentServices
{
    private $id;
    private $secret;
    private $api;

    public function __construct()
    {
        $this->id = config('services.razorpay.key');
        $this->secret = config('services.razorpay.secret');
        $this->api = new Api($this->id, $this->secret);
    }

    public function createOrder(string $amount)
    {
        $orderData = [
            'amount' => $amount * 100, // Amount in paise (e.g., 50000 = ₹500)
            'currency' => 'INR',
            'receipt' => 'receipt#1',
            'payment_capture' => 1 // Auto capture
        ];

        try {
            $order = $this->api->order->create($orderData);
            info('Order Created in Razorpay: ' . print_r($order, true));
            return $order;
        } catch (\Exception $e) {
            error("Error in creating order: " . $e->getMessage());
            throw new \Exception('Error in creating order: ' . $e->getMessage());
        }
    }

    public function verifyPaymentSignature(array $data)
    {
        try {
            info('Payment Signature Verifing in Razorpay: ' . print_r($data, true));
            $result = $this->api->utility->verifyPaymentSignature($data);
            info('Payment Signature Verified in Razorpay: ' . $result);
            return $result;
        } catch (\Exception $th) {
            error("Error in Verifying Payment Signature: " . $th->getMessage());
            throw new \Exception('Error in Verifying Payment Signature: ' . $th->getMessage());
        }
    }
}
