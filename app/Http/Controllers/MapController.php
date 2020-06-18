<?php

namespace App\Http\Controllers;

use App\Map;
use App\Device;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMap;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use DataTables;
use File;
class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('maps.index');
    }

    public function retrievemap()
    {
        return view('maps.retrievemaps',['maps'=> Map::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('maps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMap $request,Map $map)
    {
        $image = $request->file('path');
        $extension = $image->getClientOriginalExtension();//Getting extension
        $originalname = $image->getClientOriginalName();//Getting original name
        $path = $image->move('image', $originalname);//This will store in customize folder
        $imgsizes = $path->getSize();
        $data = getimagesize($path);
        $width = $data[0];
        $height = $data[1];
        $mimetype = $image->getClientMimeType();//Get MIME type
        //Start Store Data
        $map->name = $request->name;
        $map->path =$originalname;
        $map->width =  $width;
        $map->height = $height;
        $map->save();
        return redirect()->route('retrievemaps');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Map  $maps
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $map = Map::with('devices')->find($id);
        $devices = $map->devices;
        $path = $map->path;
        //return view('maps.show')->with('devices',$devices,'path',$path);
        return view('maps.show',[
            'devices' => $devices,
            'path' => $path
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('maps.edit',['map' => Map::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Map  $maps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $map = Map::findOrFail($id);
        if(!$request->file('path')){
            session()->flash('error','Please Upload Photo !!');
            return redirect()->back();
        }else {
            $image = $request->file('path');
            $extension = $image->getClientOriginalExtension();//Getting extension
            $originalname = $image->getClientOriginalName();//Getting original name
            $path = $image->move('image', $originalname);//This will store in customize folder
            $imgsizes = $path->getSize();
            $data = getimagesize($path);
            $width = $data[0];
            $height = $data[1];
            $mimetype = $image->getClientMimeType();//Get MIME type
            //Start Store Data
            $map->name = $request->name;
            $map->path =$originalname;
            $map->width =  $width;
            $map->height = $height;
            $map->save();
            session()->flash('success','Map is Updated');
            return redirect()->route('retrievemaps');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Map $map)
    {
        $map->delete($map);
        session()->flash('success','Map deleted !!');
        return redirect()->route('retrievemaps');
    }

    public function configDevice($id)
    {
        $map = Map::with('devices')->find($id);
        $devices = $map->devices;
        $path = $map->path;
        return view('maps.configDevice',[
            'devices' => $devices,
            'path' => $path
        ]);
    }
}
