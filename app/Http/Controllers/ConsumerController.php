<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consumer as Consumer;

class ConsumerController extends Controller
{
  public function index()
  {
    $consumers =  Consumer::all();

    return view('consumers/index')->with('consumers', $consumers);
  }
  
  public function create()
  {
    //$consumer = new Consumer;
    return view('consumers/create');//->with('consumer', $consumer);
  }

  public function store(Request $request)
  {
    $input = $request->all();
    Consumer::create($input);

    return redirect()->back();
  }

  public function edit($id){
   $consumer = Consumer::find($id);
   return view('consumers/create')->with('consumer', $consumer);
  }

  public function update($id, Request $request){
    $consumer = Consumer::find($id);
    $input = $request->all();

    $consumer->fill($input)->save();


    return redirect()->back();

  }

  public function destroy($id){
    $consumer = Consumer::find($id);
    $consumer->delete();

    return redirect()->back();
  }
}
