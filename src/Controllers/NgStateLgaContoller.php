<?php
namespace Favoriabs\NgStateLga\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;

class NgStateLgaController extends Controller
{
    public function index(){
      $lgas = DB::table('lgas')->get();
      $states = DB::table('states')->get();
      return view('ngstatelga::index')->with('lgas', $lgas)->with('states', $states);
    }

    public function ajaxCall(Request $request)
    {
      $state = DB::table('states')->where('id', $request->state)->first();
      $lgas = DB::table("lgas")->where("state_id",$state->id)->get();
      return $lgas;
    }
}
