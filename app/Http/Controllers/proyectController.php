<?php

namespace App\Http\Controllers;
use App\Proyect;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class proyectController extends Controller
{
        protected function create(request $request)
               {
                   $u = Auth::user();

                   Proyect::create([
                  'creator_id' => $u->id,
                  'name'    => $request['name-proyect'],
                  'description' => $request['descripcion-proyect'],
                  'objetive' => $request['objetivos-proyect'],
                  'needs' => $request['needs-proyect']
                ]);
                return view('welcome');
              }
      public	function proyectList(){
                     $u = Auth::user();

        $proyects = DB::table('proyects')->where('creator_id', $u->id)->get();
      	return view('perfil', compact('proyects'));
              	}

      public function destroy($id){

                		$proyect = Proyect::find($id);
                		$proyect->delete();
                		return redirect()->route('perfil');
                	}


}
