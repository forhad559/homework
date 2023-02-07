<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    //
	public function component(Request $request){
		$type = $request->type ? $request->type : "";
		$action = $request->action ? $request->action : "";
		$tableHeads = array("#","First","Last","Handle");
		$tableBody = array(
			array("1","Autem","error saepe","@Autem"),
			array("2","Minus","Tu Minus","@Minus"),
			array("3","Esse ut","incidunt","@Esse"),
			array("4","Consequatur","dolore","@Consequatur"),
			array("5","Totam","reprehenderit","@Totam")
		);
		
		return view('main',['type'=>$type, 'action'=>$action, 'tableHeads'=> $tableHeads, 'tableBody'=> $tableBody]);
	}
}
