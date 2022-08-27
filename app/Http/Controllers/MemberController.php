<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MemberController extends Controller{

 function first(){
  return redirect('/2nd');
 }
 function second(){
  return 'I am second method';
 }

}