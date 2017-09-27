<?php

namespace App\Http\Controllers;

use App\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $warehouses = Warehouse::all();
        return View::make('warehouse.index')->with('warehouses', $warehouses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('warehouse.create')->with('warehouse', new Warehouse());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'location' => 'required',
            'manager' => 'required',
            'capacity' => 'required|numeric',
            'contact' => 'required',
            'status' => 'required'
        ];
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('warehouse/create')
                ->withErrors($validator);
        } else {
            // store
            $warehouse = new Warehouse();
            $warehouse->location = Input::get('location');
            $warehouse->manager = Input::get('manager');
            $warehouse->capacity = Input::get('capacity');
            $warehouse->contact = Input::get('contact');
            $warehouse->status = Input::get('status');
            $warehouse->save();

            // redirect
            Session::flash('message', 'Successfully created warehouse!');
            return Redirect::to('warehouse');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Warehouse $warehouse
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Warehouse $warehouse
     * @return \Illuminate\Http\Response
     */
    public function edit(Warehouse $warehouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Warehouse $warehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warehouse $warehouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $warehouse = Warehouse::find($id);
        $warehouse->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('warehouse');
    }
}
