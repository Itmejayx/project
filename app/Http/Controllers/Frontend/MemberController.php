<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\User;
use App\Http\Requests\MbRegisRequest;
use App\Http\Requests\MemberLoginRequest;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('frontend.register');
       
    }
    public function store(MbRegisRequest $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $password = bcrypt($request->get('password'));
        $phone = $request->get('phone');
        $message = $request->get('message');
        $address = $request->get('address');
        $country = $request->get('country');
        $file = $request->file('avatar');
        $avt = $file->getClientOriginalName();
        $data = [
                'name' =>$name,
                'email' =>$email,
                'password'=>$password,
                'phone' => $phone,
                'message'=> $message,
                'address' => $address,
                'country' => $country,
                'avatar' => $avt,
                'level' =>'0'

            ];
        if(User::create($data)){
            $file->move('upload/register',$file->getClientOriginalName());
        }
        return redirect()->back()->with('success',__('Register account success'));
    }
    public function viewlogin()
    {
        return view('frontend.login');
       
    }
    public function login(MemberLoginRequest $request)
    {
        // $request->validated();
        $login = [
            'email' => $request->email,
            'password' => $request->password,
            'level'=> 0
        ];
        $remember = false;
        if($request->remember_me){
            $remember = true;
        }
        if(Auth::attempt($login,$remember)){
            return redirect('/');
        }else{
            return redirect()->back()->withErrors('Login account error');
        }
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
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
