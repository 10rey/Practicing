<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $income = Income::all();
        return view('users.income',compact('income'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $income = new Income;

        $this->validate($request,[
            'date'=>'required',
            'amount'=>'required',
            'description'=>'required',
            'category'=>'required',
        ]);

        $income->date = $request->date;
        $income->amount = $request->amount;
        $income->description = $request->description;
        $income->category = $request->category;
        $income->save();

        return redirect('income');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Income::find($id);

        return view('users.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $income = Income::find($id);

        $this->validate($request,array[
            'date'=>'required',
            'amount'=>'required',
            'description'=>'required',
            'category'=>'required',
        ]);

        $income->date = $request->date;
        $income->amount = $request->amount;
        $income->description = $request->description;
        $income->category = $request->category;
        $income->save();

        session()->flash('message','Updated successfully!');

        return redirect('income');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $income = Income::find($id);
        $income->delete();
        session()->flash('message','Deleted successfully!');
        return redirect('income');
    }
}
