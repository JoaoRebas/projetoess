<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlarmFlame extends Model
{

    protected $table = 'alarm_flame';
    protected $fillable = [
   'id', 'value',
   ];


}
