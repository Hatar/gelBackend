<?php

namespace App\Http\Controllers;

use App\Map;
use App\Device;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\DeviceRequest;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('devices.index',[
            'devices' => Device::all(),
            'maps' => Map::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('devices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeviceRequest $request)
    {
        Device::create([
            'name' => $request->name,
            'description' => $request->description,
            'serial' => $request->serial,
            'ip' => $request->ip,
            'x' => 0,
            'y' => 0,
            'level' =>0,
            'map_id' => $request->map,
        ]);
        return redirect()->route('device.index')->with(['success' => 'Device is Saved']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        return view('maps.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('devices.edit',['device' => Device::findOrFail($id),'maps' => Map::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $validate = $request->validate([
            'name' => "required|string|max:15|unique:devices,name,$id",
            'serial' => "required|string|max:16|unique:devices,serial,$id",
            'ip' => "required|string|max:15|unique:devices,ip,$id",
        ]);
        $device = Device::findOrFail($id);
        $device->name = $validate['name'];
        $device->serial = $validate['serial'];
        $device->ip = $validate['ip'];
        $device->map_id = $request->map;
        $device->save();
        return redirect()->route('device.index')->with(['success' => 'Device is Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete($device);
        session()->flash('success','Device deleted !!');
        return redirect()->route('device.index');
    }

    public function save_position(Request $request,$id)
    {
        $device = Device::findOrFail($request->id);
        if(!$device)
            return redirect()->back();
        $device->x = $request->Latitude;
        $device->y = $request->Longitude;
        $device->save();
        return redirect()->route('device.index')->with(['success' => 'Device Position Updated']);
    }
}
