<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacaturesRequest;
use App\Models\Vacature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminVacaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vacatures = Vacature::withTrashed()->latest()->paginate(10);
        return view('admin.vacatures.index', compact('vacatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vacatures = Vacature::latest()->get();
        return view('admin.vacatures.create', compact('vacatures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VacaturesRequest $request)
    {
        //
        $vacature = new Vacature();
        $vacature->title= $request->title;
        $vacature->offer = $request->offer;
        $vacature->profile = $request->profile;
        $vacature->duties = $request->duties;
        $vacature->remarque = $request->remarque;
        $vacature->save();

        return redirect('admin/vacatures');
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
        $vacature = Vacature::findOrFail($id);
        return view('admin.vacatures.show', compact('vacature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vacature = Vacature::findOrFail($id);
        return view('admin.vacatures.edit', compact('vacature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VacaturesRequest $request, $id)
    {
        //
        $vacature = Vacature::findOrFail($id);
        $vacature->title= $request->title;
        $vacature->offer = $request->offer;
        $vacature->profile = $request->profile;
        $vacature->duties = $request->duties;
        $vacature->remarque = $request->remarque;
        $vacature->update();

        return redirect('admin/vacatures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vacature = vacature::findOrFail($id);
        $vacature->delete();
        Session::flash('vacature_message', $vacature->title . ' was deleted');
        return redirect('/admin/vacatures');
    }

    public function vacatureRestore($id)
    {

        $vacature = vacature::onlyTrashed()->findOrFail($id);
        Session::flash('vacature_message', $vacature->title . ' was restored');
        $vacature->restore();

        return redirect('admin/vacatures');
    }
}
