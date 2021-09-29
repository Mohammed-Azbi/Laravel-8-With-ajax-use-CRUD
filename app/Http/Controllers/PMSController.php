<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use App\Models\PMS;
use App\Models\Item;



use Illuminate\Http\Request;

class PMSController extends Controller
{
    public function index(){

        // $items = Item::all();
        return view('welcome');
    }

    public function plist(){

        // $item = Item::all();
        return view('item');
        // return response()->json($item);
    }

    public function plistshow(){

        $plistshow = Item::all();
        // return view('item');
        return response()->json($plistshow);
    }

    public function storeplist(Request $request){
        // dd($request->item_name);
        $request->validate([
            'item_name' => 'required',
            'price' => 'required',
        ]);

        $itemstore = Item::insert([
            'item' => $request->item_name,
            'price' => $request->price,
        ]);

        return response()->json($itemstore);
    }

    public function plistdata(){

        $item = Item::all();
        // return view('item');
        return response()->json($item);
    }

    public function item(){
        // dd('aa');
        $pms = PMS::all();
        // $items = DB::table('item')->get();
        // $items = Item::orderby('id','DECS')->get();
        // dd($items);
        return response()->json($pms);
    }

    public function store(Request $request){
        dd($request -> cumtomerName);
        $addCustomer = PMS::insert([
            'cumtomer_name' => $request->cumtomerName,
            'item_id' => $request->item,
            'price' => $request->price,
        ]);

        return response()->json($addCustomer);
    }
}
