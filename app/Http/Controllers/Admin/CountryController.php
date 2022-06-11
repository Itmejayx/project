<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddRequest;
use App\Http\Requests\EditRequest;
use Illuminate\Support\Facades\DB;
use App\Models\country;

class CountryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = country::paginate(2);
        return view('admin.country',compact('show'));
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('admin.add');
    }
    public function save(AddRequest $request)
    {
        //
        // $request->validated();
        $name = $request->get('title');
        country::create
        ([
            'name' =>$name
        ]);
        return redirect()->to('/admin/country'); 
    }
    public function edit($id)
    {
        //
        $edit = country::where('id',$id)
        ->get();
        return view('admin.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        // $request->validated();
        $name = $request->get('title');
        country::where('id',$id)
        ->update([
            'name'=>$name,
        ]);
        return redirect()->to('/admin/country');
    }
    public function delete($id)
    {
        country::where('id',$id)->delete();
        return redirect()->to('/admin/country');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
