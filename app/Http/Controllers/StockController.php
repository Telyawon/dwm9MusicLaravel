<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function show()
    {
        $stocks = Stock::all();
        $stocks = DB::table('stocks')
                ->orderBy('name', 'desc')
                ->get();
        return view('stock', ['stocks' => $stocks]);
    }

    public function insertOne() 
    {
        return view('/insertStock');
    }

    public function updateOne(Request $request)
    {
        $stock = Stock::findOrFail($request->id);
        $stock->name = $request->name;
        $stock->description = $request->description;
        $stock->price = $request->price;
        $stock->amount = $request->amount;
        $stock->save();
        return redirect('/stock');
    }
 
    public function edit(Request $request)
    {
        $stock = Stock::findOrFail($request->id);
        return view('/update', ['stock' => $stock]);
    }
 
    public function inserted(Request $request)
    {
        $stocks = new Stock();
        $stocks->name = $request->name;
        $stocks->description = $request->description;
        $stocks->price = $request->price;
        $stocks->amount = $request->amount;
        $stocks->save();
        return redirect('/stock');
    }
   
    public function deleteOne(Request $request)
    {
        $stock = Stock::destroy($request->id);
        return redirect('/stock');
    }

    public function incrementOne(Request $request)
    {
        Stock::findOrFail($request->id)->increment('amount');
        return redirect('/stock');
    }

    public function decrementOne(Request $request)
    {
        Stock::findOrFail($request->id)->decrement('amount');
        if('amount' >= 0) {
            return redirect('/stock');
        } else {
            Stock::destroy($request->id);
            return redirect('/stock');
        }
    }
}
