<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\View\View;

class batchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $batches = Batch::all();
        return view("Batches.index")->with('batches',$batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('Flash_message','batches added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batches= Batch::find($id);
        return view('batches.show')->with('batches', $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batches= Batch::find($id);
        return view('batches.edit')->with('batches', $batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batches= Batch::find($id);
        $input = $request->all();
        $batches= $batches->update($input);
        return redirect('batches')->with('flash_message','batches update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Batch::destroy($id);
        return redirect('batches')->with('flash_message','batche deleted');
    }
}
