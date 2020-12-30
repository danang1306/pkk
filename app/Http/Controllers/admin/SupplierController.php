<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Supplier;
use App\Http\Requests\Admin\Supplier\UpdateRequest;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Supplier::paginate(4);
        return view('admin/supplier/index',compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(request $request)
    {
        $search = $request->get('data_search');
        $data = Supplier::where('nama_company', 'like', "%$search%")
                        ->orWhere('email', 'like', '%$search%')
                        ->paginate(4);
        return view('admin/supplier/index',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Supplier::findOrFail($id);
        return view('admin/supplier/edit',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = Supplier::findOrFail($id);
        $data->nama_company = $request->company_name;
        $data->email = $request->email;
        $data->no_telp = $request->no_telp;
        $data->save();
        
        return redirect()->route('admin.supplier')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Supplier::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.supplier')->with('success', 'Delete Successfully');
    }

    public function viewbus($id){
        $data =  Supplier::findOrFail($id);
        $bus = \App\Bus::where('supplier_id',$id)
                    ->get();
        return view('admin/supplier/bus',['data' => $bus,'supplier' => $data]);
    }

    public function destroybus($id)
    {
        $data = \App\Bus::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.supplier')->with('success', 'Delete Bus Successfully');
    }
}
