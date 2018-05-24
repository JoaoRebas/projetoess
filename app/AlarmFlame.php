<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlarmFlame extends Model
{
    protected $table = 'alarm_flame';
    protected $fillable = [
   'id', 'value',
   ];

    public function statusToStr()
    {
        switch ($this->value) {
            case '0':
                return 'Fire Not Detected';
                break;
            case '1':
                return 'Fire Detected';
                break;

            default:
                # code...
                break;
        }
    }
}
