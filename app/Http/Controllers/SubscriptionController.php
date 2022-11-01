<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Streamlabplan;
use App\Subscription;
use Braintree;

class SubscriptionController extends Controller
{
    public function loadsubscription(){
       
        $user = Auth::user();
        $sub = Subscription::where('user_id',$user->id)->get();
        return response()->json($sub,);
    }

    public function store(Request $request)
     {
       
        //$user = Auth:user();
       $customer = Auth::user();

        $result = Braintree\CreditCard::create([
            'customerId' => $customer->braintree_user_id,
            'number' => $request->cardnum,
            'expirationDate' => $request->months.'/'.$request->years,
            'cvv' => $request->cvc
        ]);


        $resultsubscription = Braintree\Subscription::create([
            'paymentMethodToken' => $result->creditCard->token,
            'planId' => $request->plan
          ]);


          if($resultsubscription->success){

            Subscription::create([
                'user_id' => $customer->id,
                'subscription_id' => $resultsubscription->subscription->id,
                'braintree_user_id' => $customer->braintree_user_id,
                'braintree_plan' => $request->plan,
                'status'=> 'active'
                
            ]);      
            

        } 
        return response()->json(
            
            $resultsubscription,                
       
        );  
       
    }
    public function cancelsubscription(Request $request)
     {
        $result = Braintree\Subscription::cancel($request->subscription_id);

        return response()->json(
            
            $result,                
       
        );  
     }
}
