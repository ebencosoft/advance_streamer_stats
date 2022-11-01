<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Streamlabplan extends Model
{
    protected $fillable = ['name', 'slug', 'braintree_plan', 'cost', 'description'];
}
