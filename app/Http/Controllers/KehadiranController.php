<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kehadiran;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class KehadiranController extends Controller
{
    function __construct(){
        $this->Kehadiran = new Kehadiran();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kehadiran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'in' => 'required',
            'out' => 'required',
            'hour' => 'required',
            'location' => 'required',
            'deviceid' => 'required'
        ]);
        // dd($data);

        $kehadiran = Kehadiran::create([
            'in' => $request->in,
            'out' => $request->out,
            'hour' => $request->hour,
            'location' => $request->location,
            'deviceid' => $request->deviceid,
        ]);
        return redirect()->route('kehadiran/index')->with('success','Data created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=[
            'kehadiran' => $this->Kehadiran->detailKehadiran($id)
            ];
        return view('kehadiran.edit', $data);

        // return view('livewire.kehadiran-datatables')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $kehadiran = Kehadiran::where('id', $request->id)->update([
            'in' => $request->in,
            'out' => $request->out,
            'hour' => $request->hour,
            'location' => $request->location,
            'deviceid' => $request->deviceid
        ]);

        return redirect()->route('kehadiran/index')->with('success','Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kehadiran::findOrFail($id);
        // dd($data);
        $data->delete();
        return redirect()->route('kehadiran/index')->with('danger','Data deleted successfully!');
    }
}
