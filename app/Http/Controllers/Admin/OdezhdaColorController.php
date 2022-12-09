<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OdezhdaColor;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\OdezhdaColorRequest;
use Inertia\Inertia;

class OdezhdaColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $colors = OdezhdaColor::latest('id')
            ->paginate($request->input('per_page', 20))
            ->appends($request->except('page'));
        return Inertia::render('Admin/Colors/Index', [
            'colors' => $colors
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Colors/Create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OdezhdaColorRequest $request)
    {
        OdezhdaColor::create([
            'name' => $request->name
        ]);
        return redirect()->route('admin.colors.index')->withSuccess('Успешно сохранено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OdezhdaColor  $odezhdaColor
     * @return \Illuminate\Http\Response
     */
    public function show(OdezhdaColor $odezhdaColor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OdezhdaColor  $odezhdaColor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $odezhdaColor = OdezhdaColor
        ::findOrFail($id);
        return Inertia::render('Admin/Colors/Edit', [
            'color' => $odezhdaColor
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OdezhdaColor  $odezhdaColor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $odezhdaColor = OdezhdaColor
        ::findOrFail($id);
        $odezhdaColor->update([
            'name' => $request->name
        ]);
        return redirect()->back()->withSuccess('Успешно сохранено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OdezhdaColor  $odezhdaColor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $odezhdaColor = OdezhdaColor
        ::findOrFail($id)->delete();
        return redirect()->route('admin.colors.index')->withSuccess('Успешно удалено');

    }
}
