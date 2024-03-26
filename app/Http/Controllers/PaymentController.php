<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function Payment(Request $request)
    {
        $api = 'test';
        $amount = \Cart::getTotal()-session()->get('coupons'.'amount')+10000;
        $redirect = route('site.Payment.verify');
        $result = $this->send($api, $amount, $redirect);
        $result = json_decode($result);
        if($result->status) {
            $go = "https://pay.ir/pg/$result->token";
            return redirect()->to($go);
        } else {
            echo $result->errorMessage;
        }
    }
    public function send($api, $amount, $redirect, $mobile = null, $factorNumber = null, $description = null) {
        return $this->curl_post('https://pay.ir/pg/send', [
            'api'          => $api,
            'amount'       => $amount,
            'redirect'     => $redirect,
            'mobile'       => $mobile,
            'factorNumber' => $factorNumber,
            'description'  => $description,
        ]);
    }

    public function verify($api, $token) {
        return $this->curl_post('https://pay.ir/pg/verify', [
            'api' 	=> $api,
            'token' => $token,
        ]);
    }
    public function PaymentVerify()
    {
        $api = 'test';
        $token = $_GET['token'];
        $result = json_decode($this->verify($api,$token));
        if(isset($result->status)){
            if($result->status == 1){
                echo "<h1>تراکنش با موفقیت انجام شد</h1>";
            } else {
                echo "<h1>تراکنش با خطا مواجه شد</h1>";
            }
        } else {
            if($_GET['status'] == 0){
                echo "<h1>تراکنش با خطا مواجه شد</h1>";
            }
        }
    }

    public  function curl_post($url, $params)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
        $res = curl_exec($ch);
        curl_close($ch);

        return $res;
    }
}
