<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szakdoga;

class SzakdogaController extends Controller
{
    public function index(){
        return Szakdoga::all();
    }
    public function store(Request $request){
        Szakdoga::create($request->all());
    }
    public function update(Request $request, $id){
        $szakdoga = Szakdoga::find($id);
        $szakdoga->update($request->all());
    }
    public function destroy($id){
        $szakdoga = Szakdoga::find($id);
        $szakdoga->delete();
    }
}
