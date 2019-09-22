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


 public function checkSession(){
       
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
     dd($user[0]->name);
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

