<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
 public function index()
 {
     return view('home');
 }

 public function showDashboard () {
     return view('dashboard') ;
 }

 public function contact(){
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
     return view('viewrate') ;
 }

 function alert () {
     return view('alert') ;
 }
   
}
