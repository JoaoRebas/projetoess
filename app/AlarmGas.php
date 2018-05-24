<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlarmGas extends Model
{
    protected $table = 'alarm_gas';

    protected $fillable = [
   'id', 'value',
   ];

    public function statusToStr()
    {
        switch ($this->value) {
           case '0':
               return 'No Gas Detected';
               break;
           case '1':
               return 'Gas Detected';
               break;

           default:
               # code...
               break;
       }
    }
}
