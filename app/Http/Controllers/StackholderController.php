<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stackholder;

class StackholderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $records = Stackholder::all();

      return view('stackholders.index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('stackholders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
        'name' => 'required',
        'type' => 'required'
      ];

      $messages = [
        'name.required' => 'Name is required',
        'type.required' => 'Type is required',
      ];

      $this->validate($request, $rules, $messages);

      $record = Stackholder::create($request->all());

      flash()->success("تمت الاضافة بنجاح");

      return redirect(route('stackholder.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $model = Stackholder::findOrFail($id);

      return view('stackholders.edit', compact('model'));
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
      $record = Stackholder::findOrFail($id);
      $record->update($request->all());
      flash()->success("تم التعديل بنجاح");
      return redirect(route('stackholder.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $record = Stackholder::findOrFail($id);
      $record->delete();
      flash()->success("تم الحذف بنجاح");
      return back();
    }
}
