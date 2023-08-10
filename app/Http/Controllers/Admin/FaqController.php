<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateFaq;
use App\Http\Requests\Admin\UpdateFaq;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::orderBy('created_at', 'DESC')->get();
        return view('admin.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateFaq  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFaq $request)
    {
        $data = $request->all();

        if (Faq::create($data)) {
            return redirect()->route('faq.index')->with('message', 'Created successfully');
        }
        return redirect()->route('faq.index')->back()->with('message', 'Error creating');
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
        $faq = Faq::find($id);
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateFaq  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaq $request, $id)
    {
        $faq = Faq::find($id);

        $data = $request->all();

        if ($faq->update($data)) {
            return redirect()->route('faq.index')->with('message', 'changed successfully!!!');
        }

        return redirect()->route('faq.index')->with('message', 'changed no successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Faq::find($id)) {
            return redirect()->route('faq.index')->with('message', "not found");
        }

        $faq = Faq::find($id);

        if ($faq->delete()) {
            return redirect()->route('faq.index')->with('message', "deleted successfully");
        }
        return redirect()->route('faq.index')->with('message', "unable to delete");
    }
}
