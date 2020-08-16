<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsletter_subscription extends Model
{
    protected  $table = "newsletter_subscription";

    protected $fillable = ['name', 'email'];
}
