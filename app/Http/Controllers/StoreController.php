<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){

            $store = Store::where('store_name' , 'LIKE', '%'.$request->search.'%')->paginate(5)->withQueryString();
        } else {
            $store = Store::paginate(2);
        }


        return view('view_store', [

            "storess" => $store,
        ]);
    }

    public function show(Store $store)
    {

        return view('showstore', [
            'storess' => $store
        ]);
    }

    public function create(){

        $store = Store::all();
        return view('create_store', compact('store'));
    }

    public function store(Request $request){


        $validatedData = $request->validate([
            'store_name' => 'required',
            'location' => 'required'
        ]);

        Store::create([

            'store_name' => $validatedData['store_name'],
            'location' => $validatedData['location']
        ]);

        return redirect()->route('adminview_store');
    }

    public function edit(Store $store)
{
    $storeEdit = Store::where('id', $store->id)->first();

    return view('edit_store', compact('storeEdit'));
}

   public function update(Request $request, Store $store)
   {

    $store->update([
        'store_name' => $request->store_name,
        'location' => $request->location
    ]);

    return redirect()->route('adminview_store');
   }

   public function destroy(Store $store){

    $store->delete();

    return redirect()->route('adminview_store');
   }
}
