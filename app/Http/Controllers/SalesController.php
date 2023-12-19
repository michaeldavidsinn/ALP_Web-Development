<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSalesRequest;
use App\Http\Requests\UpdateSalesRequest;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){

            $sales = Sales::where('sales_name' , 'LIKE', '%'.$request->search.'%')->orWhere('majorstudy' , 'LIKE', '%'.$request->search.'%')->paginate(5)->withQueryString();
        } else {
            $sales = Sales::paginate(2);
        }


        return view('view_sales', [

            "sales" => $sales,
        ]);
    }

    public function show(Sales $sales)
    {

        return view('showsales', [
            'sales' => $sales
        ]);
    }

    public function create(){

        $sales = Sales::all();
        return view('create_sales', compact('sales'));
    }

    public function store(Request $request){


        $validatedData = $request->validate([
            'sales_name' => 'required',
            'sales_contact' => 'required',
        ]);

        Sales::create([

            'sales_name' => $validatedData['sales_name'],
            'sales_contact' => $validatedData['sales_contact']
        ]);

        return redirect()->route('adminview_sales');
    }

    public function edit(Sales $sales)
{
    $salesEdit = Sales::where('id', $sales->id)->first();

    return view('edit_sales', compact('salesEdit'));
}

   public function update(Request $request, Sales $sales)
   {

    $sales->update([
        'sales_name' => $request->sales_name,
        'sales_contact' => $request->sales_contact
    ]);

    return redirect()->route('adminview_sales');
   }

   public function destroy(Sales $sales){

    $sales->delete();

    return redirect()->route('adminview_sales');
   }
}
