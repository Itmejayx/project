<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddBlogRequest;
use App\Http\Requests\EditBlogRequest;
use Illuminate\Support\Facades\DB;
use App\Models\blog;



class BlogController extends Controller
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
        // $show = blog::all();
        $brands = blog::paginate(2);
        return view('admin.blog',compact('brands'));
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
        
        return view('admin.addblog');
    }
    public function save(AddBlogRequest $request)
    {
        // $request -> validated();
        $name = $request->get('title');
        $file = $request->file('image');
        $avt = $file->getClientOriginalName();
        $file->move('upload/blog',$file->getClientOriginalName());

        // $image = $file->getClientOriginalName();
        $description = $request->get('description');
        $content = $request->get('content');
        blog::create
        ([
            'title' =>$name,
            'image' => $avt,
            'description' => $description,
            'content' => $content
        ]);
        return redirect()->to('/admin/blog'); 
       
    }
    public function edit($id)
    {
        $edit = blog::where('id',$id)
        ->get();
        return view('admin.editblog',compact('edit'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditBlogRequest $request, $id)
    {
        $name = $request->get('title');
        $file = $request->file('image');
        $image = $file->getClientOriginalName();
        $file->move('upload/blog',$file->getClientOriginalName());
        $description = $request->get('description');
        $content = $request->get('content');
        blog::where('id',$id)
        ->update([
            'title'=>$name,
            'image'=>$image,
            'description' => $description,
        ]);
        return redirect()->to('/admin/blog');
       
    }
    public function delete($id)
    {
        blog::where('id',$id)->delete();
        return redirect()->to('/admin/blog');
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
