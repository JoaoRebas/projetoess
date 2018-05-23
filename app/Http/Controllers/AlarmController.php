<?php

namespace App\Http\Controllers;

use App\AlarmMovimento1;
use App\AlarmMovimento2;
use App\AlarmFlame;
use App\AlarmGas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AlarmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        //
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
        $alarmMov1 = new AlarmMovimento2();
        $alarmMov1->fill($request->all());
        $alarmMov1->created_at = Carbon::now();
        $alarmMov1->save();
    }

    public function createAlarmFlame(Request $request)
    {
        $alarmMov1 = new AlarmFlame();
        $alarmMov1->fill($request->all());
        $alarmMov1->created_at = Carbon::now();
        $alarmMov1->save();
    }

    public function createAlarmGas(Request $request)
    {
        $alarmMov1 = new AlarmGas();
        $alarmMov1->fill($request->all());
        $alarmMov1->created_at = Carbon::now();
        $alarmMov1->save();
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
