<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlarmMovimento2 extends Model
{
    protected $table = 'alarm_movimento2';
    protected $fillable = [
   'id', 'value',
   ];

    public function statusToStr()
    {
        switch ($this->value) {
            case '0':
                return 'No Movement Detected';
                break;
            case '1':
                return 'Movement Detected';
                break;

            default:
                # code...
                break;
        }
    }
}
