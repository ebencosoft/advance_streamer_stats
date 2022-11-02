<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['user_id', 'subscription_id', 'braintree_user_id', 'braintree_plan'];
}
