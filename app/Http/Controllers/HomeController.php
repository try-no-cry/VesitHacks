<?php

namespace App\Http\Controllers;
use App\User;
use App\Report;
use App\Review;
use App\Manager_team;
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
    
public function doRegister(){
      $data=request()->validate(
     [
         "name"=>'required',
         "email"=>'required|email',
         "password"=>'required',
         "designation"=>'required',
         "role" =>'required',
         "address"=> 'required',
         "contact"=>'required',
         "current_project_id"=> 'required',
         "salary" => 'required',
         'projects_done'=>'required'
     ]);
   $user= User::create($data);

       Session::put('user', $user);

    
  return view('dashboard',compact('user'));
}    
  
 public function register()
 {
     return view('register');
     
    }
    
    public function index()
 {
     return view('home');
 }

 public function showDashboard () {
     
    
    if(Session::get('user')==null){

        return redirect()->route('welcome');
    }
           
     else $user=Session::get('user');  

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
     else $user=Session::get('user');    

     return view('profiledetails',compact('user')) ;
 }

 public function sendReport () {
    if(Session::get('user')==null)
         return redirect()->route('welcome');
    else $user=Session::get('user');  
     return view('sendreport',compact('user')) ;
 }

 public function sendReportWithFile(){
     
    if(Session::get('user')==null)
        return redirect()->route('welcome');
    else $user=Session::get('user'); 

		if(request()->file('report')==null){
			return redirect()->back()->withErrors(["No File Uploaded."]);
		}
		$email = $user->email;
		
		$destinationPath =$user->email;
		$extension = request()->file('report')->getClientOriginalExtension();
                              $filenametostore = 'Reportby'.$user->user_id.mt_rand().'.'.$extension;
							  $path =  request()->file('report')->storeAs($destinationPath, $filenametostore,'public_uploads');
        if($extension=="exe"){
			return redirect()->back()->withErrors(["Upload in valid formats only.	"]);
		}							  
        
        $report=new Report();

        // if(Report::where('sender_id', $user->user_id)->exists())
        //   {
		// $report=Report::where('sender_id', $user->user_id)->get();
		// Report::where('sender_id', $user->user_id)
		// 	->update(['file_path' => $destinationPath.'/'.$filenametostore]);
		// 	return redirect()->back()->withErrors(["Task successful."]);
        //   }
        //   else
        //   {
          	$report->sender_id=$user->user_id;
		//   }
		  
        $receivers_email=  request()->input('email');
        
        $rid=User::where('email',$receivers_email)->get();
        $report->receiver_id=$rid[0]->user_id;
        $report->title=request()->input('title');
        $report->title=request()->input('message');
        $report->file_path=$destinationPath.'/'.$filenametostore;
        $report->save();

        // dd($report);
        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
    

	public static function delete($id, Request $request)
    {
        $email = $request->session()->get('email');
        $column_name1='is_'.$id;
        $column_name2=$id.'_path';
        $resume = new resume;
        if(DB::table('resume')->where('email', $email)->exists())
          {
           DB::table('resume')->where('email', $email)->delete();
           return redirect()->route('upload_resume');
          }
          else
          {
           return redirect()->route('upload_resume');
          }
 }

 public  function viewReport() {
     
    if(Session::get('user')==null)
            return redirect()->route('welcome');
    else $user=Session::get('user'); 


    $reports=Report::where('receiver_id',$user->user_id)->get();


     return view('viewreport',compact('user','reports')) ;
 }

 public function rate () {
    if(Session::get('user')==null)
             return redirect()->route('welcome');
    else $user=Session::get('user'); 

   $teams= Manager_team::where('manager_id',$user->user_id)->get();
   $no=array();
   

    for($i=0;$i<count($teams);$i++){
        $no[$i] =$teams[$i]->member_id;
    }

    $team=array();
    for($i=0;$i<count($teams);$i++){
        $a=User::find($no[$i]);
        $team[$no[$i]]=$a->name;
    }

    // dd($team);

   

     return view('rate',compact('user','team'));
 }



public function viewrate () {
    if(Session::get('user')==null)
              return redirect()->route('welcome');
    else $user=Session::get('user'); 

            $review = DB::table('review')
            ->select(
                DB::raw("r_for_id as id"),         
                DB::raw("punctuality as punc"),
                DB::raw("behaviour as bhvr"),
                DB::raw("targets_acheived as targ"),
                DB::raw("contribution as cntrb")
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
    else $user=Session::get('user'); 

     return view('alert',compact('user'));
 }





 public function addReview( $uid){


    if(Session::get('user')==null)
              return redirect()->route('welcome');
    else $user=Session::get('user'); 

     $punctuality=$_POST['punctuality'];
     $targets_acheived=$_POST['targets_acheived'];
     $behaviour=$_POST['behaviour'];
     $contribution=$_POST['contribution'];

     $forID=$uid;
     $byID=$user->user_id;

     $data=request()->validate([
         
        'punctuality'=>'required|max:10|min:0',
        'targets_acheived' =>'required|max:10|min:0',
        'behaviour'  =>'required|max:10|min:0',
        'contribution'   =>'required|max:10|min:0'

     ]);
     $review=new Review();
     $review->r_for_id=$forID;
     $review->r_by_id=$byID;
     $review->punctuality=$punctuality;
     $review->targets_acheived=$targets_acheived;
     $review->behaviour=$behaviour;
     $review->contribution=$contribution;

     $review->save();
    
     return back();


     Review::create($data);


 }
   
}




