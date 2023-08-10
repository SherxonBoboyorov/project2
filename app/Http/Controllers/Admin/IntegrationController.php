<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateIntegration;
use App\Http\Requests\Admin\UpdateIntegration;
use App\Models\Integration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IntegrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $integrations = Integration::orderBy('created_at', 'DESC')->get();
        return view('admin.integration.index', compact('integrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.integration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateIntegration  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateIntegration $request)
    {
        $data = $request->all();

        $data['image'] = Integration::uploadImage($request);

        if (Integration::create($data)) {
            return redirect()->route('integration.index')->with('message', "created seccessfully");
        }
        return redirect()->route('integration.index')->with('message', "unable to created");
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
        $integration = Integration::find($id);
        return view('admin.integration.edit', compact('integration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateIntegration  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIntegration $request, $id)
    {
        if (!Integration::find($id)) {
            return redirect()->route('integration.index')->with('message', "not fount");
        }

        $integration = Integration::find($id);

        $data = $request->all();
        $data['image'] = Integration::updateImage($request, $integration);

        if ($integration->update($data)) {
            return redirect()->route('integration.index')->with('message', "changed successfully");
        }
        return redirect()->route('integration.index')->with('message', "Unable to update ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Integration::find($id)) {
            return redirect()->route('integration.index')->with('message', "not found");
        }

        $integration = Integration::find($id);

        if (File::exists(public_path() . $integration->image)) {
            File::delete(public_path() . $integration->image);
        }

        if ($integration->delete()) {
            return redirect()->route('integration.index')->with('message', "deleted successfully");
        }
        return redirect()->route('integration.index')->with('message', "unable to delete ");
    }
}
