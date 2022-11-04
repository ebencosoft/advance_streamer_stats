<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'transactionId','user_id','subscription_id', 'amount', 'paymentStatus', 'paymentDate','responseMessage'
    ];

    public function subscription()
    {
    	return $this->belongsTo('App\Subscription');
    }//

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
