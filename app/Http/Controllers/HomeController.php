<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    public function plans($type)
    {
        $item = "";
        \Cart::clear();
        switch($type){
            case "Minimum";
                $item = [
                    'id' => 1,
                    'name' => $type ." Yearly subscription",
                    'price' => 299.99,
                    'quantity' => 1,
                    'attributes' => [
                        'Users' => 10,
                        'Backups' => 5,
                        'Disk space' => '10 GB',
                        'Emails' => 1000,
                    ],
                    'conditions' => new \Darryldecode\Cart\CartCondition(['name' => 'VAT 14.0%', 'type' => 'tax', 'target' => 'subtotal', 'value' => '14.0%',])
                ];
                break;
            case "Start";
                $item = [
                    'id' => 2,
                    'name' => $type ." Yearly subscription",
                    'price' => 499.99,
                    'quantity' => 1,
                    'attributes' => [
                        'Users' => 15,
                        'Backups' => 10,
                        'Disk space' => '15 GB',
                        'Emails' => 5000,
                    ],
                    'conditions' => new \Darryldecode\Cart\CartCondition(['name' => 'VAT 14.0%', 'type' => 'tax', 'target' => 'subtotal', 'value' => '14.0%',])
                ];
                break;
            case "Standard";
                $item = [
                    'id' => 3,
                    'name' => $type ." Yearly subscription",
                    'price' => 899.99,
                    'quantity' => 1,
                    'attributes' => [
                        'Users' => 25,
                        'Backups' => 15,
                        'Disk space' => '25 GB',
                        'Emails' => 10000,
                    ],
                    'conditions' => new \Darryldecode\Cart\CartCondition(['name' => 'VAT 14.0%', 'type' => 'tax', 'target' => 'subtotal', 'value' => '14.0%',])
                ];
                break;
            case "Premium";
                $item = [
                    'id' => 4,
                    'name' => $type ." Yearly subscription",
                    'price' => 1199.99,
                    'quantity' => 1,
                    'attributes' => [
                        'Users' => 50,
                        'Backups' => 25,
                        'Disk space' => '50 GB',
                        'Emails' => 15000,
                    ],
                    'conditions' => new \Darryldecode\Cart\CartCondition(['name' => 'VAT 14.0%', 'type' => 'tax', 'target' => 'subtotal', 'value' => '14.0%',])
                ];
                break;
            case "Elite";
                $item = [
                    'id' => 5,
                    'name' => $type ." Yearly subscription",
                    'price' => 1499.99,
                    'quantity' => 1,
                    'attributes' => [
                        'Users' => 100,
                        'Backups' => 30,
                        'Disk space' => '100 GB',
                        'Emails' => 20000,
                    ],
                    'conditions' => new \Darryldecode\Cart\CartCondition(['name' => 'VAT 14.0%', 'type' => 'tax', 'target' => 'subtotal', 'value' => '14.0%',])
                ];
                break;

        }
        \Cart::add($item);
        //return \Cart::getContent();
        return redirect('checkout');
    }

    public function checkout()
    {
        return view('home');
    }
}
