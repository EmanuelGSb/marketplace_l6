<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreRequest;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('user.has.store')->only(['create', 'store']);
    }

    public function index(){
        $store = auth()->user()->store;
        return view('admin.stores.index', compact('store'));
    }
    

    public function create (){
        $users = \App\User::all(['id','name']);
        return view('admin.stores.create', compact('users'));
    }

    public function store (StoreRequest $request)
    {
        $data = $request->all();

        $user = auth()->user();
        $store = $user->store()->create($data);

        flash('Loja Criada com sucesso')->success();
        return redirect()->route('admin.stores.index');
    }

    public function edit ($store){

        $store = \App\Store::find($store);
        // log::info($store); --> log do laravel
        return view('admin.stores.edit', compact('store'));
       

    }

    public function update (StoreRequest $request, $store){
     
        $data = $request->all();

        $store = \App\Store::find($store);
        $store->update($data);
        
        flash('Loja Atualizada com sucesso')->success();
        return redirect()->route('admin.stores.index');
    
    }

    public function destroy($store){

        $store = \App\Store::find($store);
        $store->delete();

        flash('Loja Removida com sucesso')->success();
        return redirect()->route('admin.stores.index');

    }


}
