<?php
namespace Favoriabs\NgStateLga\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Favoriabs\NgStateLga\Models\State;
use Favoriabs\NgStateLga\Models\Lga;

class NgStateLgaController extends Controller
{
    public function index()
    {
      $lgas = Lga::all();
      $states = State::all();
      return view('ngstatelga::index')->with('lgas', $lgas)->with('states', $states);
    }

    public function ajaxCall(Request $request)
    {
      $state = State::where('id', $request->state)->with('lgas')->first();
      return response()->json([
        'success' => true,
        'data' => $state,
      ]);
      return $state;
    }
}
