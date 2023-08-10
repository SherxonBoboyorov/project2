<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateHouseImage;
use App\Http\Requests\Admin\UpdateHouseImage;
use App\Models\HouseImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HouseImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houseimages = HouseImage::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.houseimage.index', compact('houseimages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.houseimage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateHouseImage  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateHouseImage $request)
    {
        $data = $request->all();
        $data['image'] = HouseImage::uploadImage($request);
        if (HouseImage::create($data)) {
            return redirect()->route('houseimage.index')->with('message', 'Image added successfully');
        }
        return redirect()->route('houseimage.index')->back()->with('message', 'Error adding image');
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
        $houseimage = HouseImage::find($id);
        return view('admin.houseimage.edit', compact('houseimage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateHouseImage  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHouseImage $request, $id)
    {
        $houseimage = HouseImage::find($id);

        $data = $request->all();
        $data['image'] = HouseImage::updateImage($request, $houseimage);

        if ($houseimage->update($data)) {
            return redirect()->route('houseimage.index')->with('message', 'changed successfully!!!');
        }

        return redirect()->route('houseimage.index')->with('message', 'changed no successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!HouseImage::find($id)) {
            return redirect()->route('houseimage.index')->with('message', "houseimage not found");
        }

        $houseimage = HouseImage::find($id);

        if (File::exists(public_path() . $houseimage->image)) {
            File::delete(public_path() . $houseimage->image);
        }

        if ($houseimage->delete()) {
            return redirect()->route('houseimage.index')->with('message', "houseimage deleted successfully");
        }

        return redirect()->route('houseimage.index')->with('message', "Unable to delete houseimage");
    }
}
