<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePromotional;
use App\Http\Requests\Admin\UpdatePromotional;
use App\Models\Promotional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class PromotionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotionals = Promotional::orderBy('created_at', 'DESC')->get();
        return view('admin.promotional.index', compact('promotionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promotional.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreatePromotional  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePromotional $request)
    {
        $data = $request->all();

        $data['image'] = Promotional::uploadImage($request);

        if (Promotional::create($data)) {
            return redirect()->route('promotional.index')->with('message', "created seccessfully");
        }
        return redirect()->route('promotional.index')->with('message', "unable to created");
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
        $promotional = Promotional::find($id);
        return view('admin.promotional.edit', compact('promotional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdatePromotional  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromotional $request, $id)
    {
        if (!Promotional::find($id)) {
            return redirect()->route('promotional.index')->with('message', "not fount");
        }

        $promotional = Promotional::find($id);

        $data = $request->all();
        $data['image'] = Promotional::updateImage($request, $promotional);

        if ($promotional->update($data)) {
            return redirect()->route('promotional.index')->with('message', "changed successfully");
        }
        return redirect()->route('promotional.index')->with('message', "Unable to update ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Promotional::find($id)) {
            return redirect()->route('promotional.index')->with('message', "not found");
        }

        $promotional = Promotional::find($id);

        if (File::exists(public_path() . $promotional->image)) {
            File::delete(public_path() . $promotional->image);
        }

        if ($promotional->delete()) {
            return redirect()->route('promotional.index')->with('message', "deleted successfully");
        }
        return redirect()->route('promotional.index')->with('message', "unable to delete ");
    }
}
