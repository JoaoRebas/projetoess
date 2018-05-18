<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlarmGas extends Model
{

    protected $table = 'alarm_gas';

    protected $fillable = [
   'id', 'value',
   ];


}
