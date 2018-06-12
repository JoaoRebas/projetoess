<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlarmState extends Model
{
    protected $table = 'alarmstate';
    protected $fillable = [
   'id','value',
   ];

    public function statusToStr()
    {
        switch ($this->value) {
            case '0':
                return 'Not Armed';
                break;
            case '1':
                return 'Armed';
                break;

            default:
                # code...
                break;
        }
    }
}
