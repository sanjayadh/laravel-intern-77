<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialLinks extends Model
{
    protected $fillable = ['user_id','icon','link','name'];
}
