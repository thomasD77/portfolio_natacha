<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacebookRequest;
use App\Models\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminFacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $facebook = Facebook::withTrashed()->latest()->paginate(10);
        return view('admin.facebook.index', compact('facebook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.facebook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacebookRequest $request)
    {
        //
        $facebook = new Facebook();
        $facebook->title= $request->title;
        $facebook->code = $request->code;
        $facebook->save();

        return redirect('admin/facebook');
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
        //
        $facebook = Facebook::findOrFail($id);
        return view('admin.facebook.edit', compact('facebook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FacebookRequest $request, $id)
    {
        //
        $facebook = Facebook::findOrFail($id);
        $facebook->title= $request->title;
        $facebook->code = $request->code;
        $facebook->update();

        return redirect('admin/facebook');
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
        $facebook = facebook::findOrFail($id);
        $facebook->delete();
        Session::flash('facebook_message', $facebook->title . ' was deleted');
        return redirect('/admin/facebook');
    }

    public function facebookRestore($id)
    {

        $facebook = facebook::onlyTrashed()->findOrFail($id);
        Session::flash('facebook_message', $facebook->title . ' was restored');
        $facebook->restore();

        return redirect('admin/facebook');
    }
}
