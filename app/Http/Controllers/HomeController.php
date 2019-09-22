<?php

namespace App\Http\Controllers;
use App\User;
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
                $_SESSION['user']=$user;
                
               return view('welcome');
            }
       else 
       return  back()->withErrors(['Wrong Credentials']);     
 }

 public function logout(){
     $_SESSION['user']=null;

     return view('welcome');
 }
  
 public function index()
 {
     return view('home');
 }

 public function showDashboard () {
     return view('dashboard') ;
 }

 public function contact(){
     $user=User::all();
     dd($user);
     return view('contact');
 }

 public function profileDetails () {
     return view('profiledetails') ;
 }

 public function sendReport () {
     return view('sendreport') ;
 }

 public  function viewReport() {
     return view('viewreport') ;
 }

 public function rate () {
     return view('rate') ;
 }

public function viewrate () {
                

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


            return view('viewrate')
            ->with('review',json_encode($result));
 }

 function alert () {
     return view('alert') ;
 }
   
}

