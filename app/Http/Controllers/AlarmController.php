<?php

namespace App\Http\Controllers;

use App\AlarmMovimento1;
use App\AlarmMovimento2;
use App\AlarmFlame;
use App\AlarmGas;
use App\AlarmState;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Mail\AlarmMov1Mail;
use App\Mail\AlarmMov2Mail;
use App\Mail\AlarmFlameMail;
use App\Mail\AlarmGasMail;

class AlarmController extends Controller
{


    public function createAlarmState(Request $request)
    {
        $alarmState = new AlarmState();
        $alarmState->fill($request->all());
        $alarmState->created_at = Carbon::now();
        $alarmState->save();
    }

    public function createAlarmMov1(Request $request)
    {
        $alarmMov1 = new AlarmMovimento1();
        $alarmMov1->fill($request->all());
        $alarmMov1->created_at = Carbon::now();
        $alarmMov1->save();
    }

    public function createAlarmMov2(Request $request)
    {
        $alarmMov2 = new AlarmMovimento2();
        $alarmMov2->fill($request->all());
        $alarmMov2->created_at = Carbon::now();
        $alarmMov2->save();
    }

    public function createAlarmFlame(Request $request)
    {
        $alarmFlame = new AlarmFlame();
        $alarmFlame->fill($request->all());
        $alarmFlame->created_at = Carbon::now();
        $alarmFlame->save();
    }

    public function createAlarmGas(Request $request)
    {
        $alarmGas = new AlarmGas();
        $alarmGas->fill($request->all());
        $alarmGas->created_at = Carbon::now();
        $alarmGas->save();
    }


    public function liveAlarms(User $user)
    {
        $alarm_State = DB::table('alarmstate')
                        ->orderBy('id', 'desc')
                        ->first();

        $alarm_Mov1 = DB::table('alarm_movimento1')
                        ->orderBy('id', 'desc')
                        ->first();

        $alarm_Mov2 = DB::table('alarm_movimento2')
                        ->orderBy('id', 'desc')
                        ->first();

        $alarm_Gas = DB::table('alarm_gas')
                        ->orderBy('id', 'desc')
                        ->first();

        $alarm_Flame = DB::table('alarm_flame')
                        ->orderBy('id', 'desc')
                        ->first();

        // if ($alarm_State->value == 1 && $alarm_Mov1->value == 1)
        // {
        //     \Mail::to($user)->send(new AlarmMov1Mail);
        // }
        //
        // if ($alarm_State->value == 1 && $alarm_Mov2->value == 1) {
        //     \Mail::to($user)->send(new AlarmMov2Mail);
        // }
        //
        // if ($alarm_Flame->value == 1) {
        //     \Mail::to($user)->send(new AlarmFlameMail);
        // }
        //
        // if ($alarm_Gas->value == 1) {
        //     \Mail::to($user)->send(new AlarmGasMail);
        // }

        return view('home', compact('alarm_State', 'alarm_Mov1', 'alarm_Mov2', 'alarm_Gas', 'alarm_Flame'));
    }



    public function alarmState()
    {
        $alarm_states = AlarmState::All();
        return view('history_state', compact('alarm_states'));
    }

    public function alarms_movimento_1()
    {
        $mov1_alarms = AlarmMovimento1::All();
        return view('history_mov1', compact('mov1_alarms'));
    }

    public function alarms_movimento_2()
    {
        $mov2_alarms = AlarmMovimento2::All();
        return view('history_mov2', compact('mov2_alarms'));
    }

    public function alarms_flame()
    {
        $flame_alarms = AlarmFlame::All();
        return view('history_flame', compact('flame_alarms'));
    }

    public function alarms_gas()
    {
        $gas_alarms = AlarmGas::All();
        return view('history_gas', compact('gas_alarms'));
    }
}
