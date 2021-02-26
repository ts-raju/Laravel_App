<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Province::find(1)->getDistrict;
        $prv = Province::all();
        return view('backend.address.state', compact('prv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'pno'=>'required','unique',
            'pName'=>'required',
            'pNameNepali'=>'required',
        ]);

        Province::create([
            'pno' => $request->pno,
            'pName' => $request->pName,
            'pNameNepali' => $request->pNameNepali,
        ]);
        // Province::create($request->all());
        // return redirect()->route('backend.address.state')->with('success', 'Province Successfully Added !!');

        return redirect('/admin/province')->with('success','Province Successfully Added !!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Province $province)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $province = Province::findOrFail($request->pid);
        $province->update($request->all());
        return back()->with('success', 'Province Successfully Updated !!');

    //     $request->validate([
    //         'pno' => 'required',
    //         'pName' => 'required',
    //         'pNameNepali' => 'required',
    //         // "photo"=>"image|max:2024|",
    //     ]);

    //    $province->update([
    //         'pno' => $request->pno,
    //         'pName' => $request->pName,
    //         'pNameNepali' => $request->pNameNepali,
    //     ]);

        // return redirect()->route('backend.address.state')->with('success', 'Province Successfully Added !!');

        // return redirect('/admin/province')->with('success', 'Province Successfully Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $prv = Province::findOrFail($request->id);
        $prv->delete();
        return back()->with('error', 'Province Successfully Deleted !!');
        // return redirect()->route('province.index')->with('error', 'Province Successfully Deleted !!');
    }
}
