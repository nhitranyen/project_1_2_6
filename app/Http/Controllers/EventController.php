<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Events;
use Illuminate\Support\Facades\Route;

class EventController extends Controller
{

    public function index(){

        $data = new Events(); 
        $events = $data->all();

       return view('events', compact('events'));
    } 

    public function detail($id){
        $event=DB::table('event')
        ->select('event.*')
        ->where('id','=',$id)
        ->first();

        return view('event-sub', compact('event'));
    }
}

