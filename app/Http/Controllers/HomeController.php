<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PaymentTransaction;
use App\Models\Payment;


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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_type=Auth::user()->user_type;
        if($user_type=='admin'){
            
            return view('backend.admin.dashboard');
            
        }else{
            
            return view('backend.branch.dashboard');
        }
    }

    public function customer()
    {
      
        $list = User::where('user_type','customer')->where('id', '!=', Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        return view('backend.admin.customer.index',compact('list'));


    }

    function update_status_subscription(Request $request)
    {
      if ($request->stat == 'enable') {
          Payment::create([
              'user_id'=>$request->user_id,
              'payment_id'=>rand(11111,99999),
              'payment_amount'=>$request->amount,
              'method'=>'upi',
              'currency'=>'INR',
              'plan_name'=>'Plan of '.$request->amount,
              'plan_status'=>'success',
          ]);

          $response_data=json_decode($request->payment_details);
          $payment = PaymentTransaction::where('mt_id',$response_data->data->merchantTransactionId)->first();
          $payment->payment_details = $request->payment_details;
          $payment->status = 'success';
          $payment->save();
          
          $user = User::find($request->user_id);
          auth()->login($user, false);
         return redirect()->route('home_user');
      } else {
            auth()->login($user, false);
            return redirect()->route('home_user');
      }
   } 

   
}
