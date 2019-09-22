<?php

namespace App\Http\Controllers;
use App\User;
use Session;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     


 public function __construct()
 {
     
 }

 /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */


 public function login(){
    //  return 123;
    //  $email= $request->input('email');
	// 			$pass= $request->input('password');
	// 			//return $username;
	// 			//return $pass;
	// 			$user = DB::table('users')->select('password')->where('email',$email)->get();
	// 			//return $user;
	// 			if($pass == $user[0]->password)
	// 				{
	// 						$request->session()->put('username',$username);
	// 						return "abhay";
	// 				}
	// 			else
	// 			{
    //                 $request->session()->flash('error','Invalid Username & Password');
    //             }
    //                 // return redirect()->route('admin_login');
                    
     $email=request()->email;
     $pwd=request()->password;

       request()->validate([
        'email' =>'email|required',
        'password'=>'required'
       ]);

       $user=User::where('email',$email)->first();
    //    $ans=Hash::check('password',$user->password);
    $ans=false; 
    if($user->email==$email && $user->password==$pwd)
        $ans=true;
       if($ans==true)
            {
                // $_SESSION['user']=$user;
                Session::put('user', $user);
               return view('dashboard',compact('user'));
            }
       else 
       return  back()->withErrors(['Wrong Credentials']);     
 }

 public function logout(){
     Session::forget('user');
     return \redirect()->route('welcome');
 }
  
 public function index()
 {
     return view('home');
 }

 public function showDashboard () {
     
    if(Session::get('user')==null){
        
        return redirect()->route('welcome');
    }
           
     else $user=Session::get('user')->first();  

     return view('dashboard',compact('user')) ;
 }

 public function contact(){
     $user=User::all();
    //this can be visited by any guest user
     return view('contact');
 }

 public function profileDetails () {

     if(Session::get('user')==null)
            return redirect()->route('welcome');
     else $user=Session::get('user')->first();    
     
     return view('profiledetails',compact('user')) ;
 }

 public function sendReport () {
    if(Session::get('user')==null)
         return redirect()->route('welcome');
    else $user=Session::get('user')->first();  
     return view('sendreport',compact('user')) ;
 }

 public  function viewReport() {
    if(Session::get('user')==null)
            return redirect()->route('welcome');
    else $user=Session::get('user')->first(); 
     return view('viewreport',compact('user')) ;
 }

 public function rate () {
    if(Session::get('user')==null)
             return redirect()->route('welcome');
    else $user=Session::get('user')->first(); 

     return view('rate',compact('user')) ;
 }

public function viewrate () {
    if(Session::get('user')==null)
              return redirect()->route('welcome');
    else $user=Session::get('user')->first(); 

            $review = DB::table('review')
            ->select(
                DB::raw("r_for_id as id"),         
                DB::raw("punctuality as punc"),
                DB::raw("behaviour as bhvr"),
                DB::raw("targets_acheived as targ"),
                DB::raw("contribution as cntrb"),
                )
            ->orderBy("id")
            // ->groupBy(DB::raw("id"))
            ->get();

            $user = DB::table('users')->select(
                DB::raw("user_id as id"),
                DB::raw("name as name")
            )->get();

            //dd($review, $user);

            $result[] = ['Name','Punctuality','Behaviour','Targets','Contribution'];
            foreach ($review as $key => $value) {
                foreach($user as $key2 => $value2)
                {if($value2->id == $value->id){
            $result[++$key] = [$value2->name,   (int)$value->punc, (int)$value->bhvr, (int)$value->targ, (int)$value->cntrb];}
            // dd($result, $visitor);
            }}


            return view('viewrate',compact('user'))
            ->with('review',json_encode($result));
 }

 function alert () {
    if(Session::get('user')==null)
              return redirect()->route('welcome');
    else $user=Session::get('user')->first(); 

     return view('alert',compact('user'));
 }
   
}

