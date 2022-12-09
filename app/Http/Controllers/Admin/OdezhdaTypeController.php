<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OdezhdaType;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\OdezhdaTypeRequest;
use Inertia\Inertia;

class OdezhdaTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $types = OdezhdaType::latest('id')
            ->paginate($request->input('per_page', 20))
            ->appends($request->except('page'));
        return Inertia::render('Admin/Types/Index', [
            'types' => $types
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Types/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OdezhdaTypeRequest $request)
    {
        OdezhdaType::create([
            'name' => $request->name
        ]);
        return redirect()->route('admin.types.index')->withSuccess('Успешно сохранено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OdezhdaType  $odezhdaType
     * @return \Illuminate\Http\Response
     */
    public function show(OdezhdaType $odezhdaType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OdezhdaType  $odezhdaType
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $odezhdaType = OdezhdaType
        ::findOrFail($id);
        return Inertia::render('Admin/Types/Edit', [
            'type' => $odezhdaType
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OdezhdaType  $odezhdaType
     * @return \Illuminate\Http\Response
     */
    public function update(OdezhdaTypeRequest $request, $id )
    {
        $odezhdaType = OdezhdaType
        ::findOrFail($id)->update([
            'name' => $request->name
        ]);
        return redirect()->back()->withSuccess('Успешно сохранено');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OdezhdaType  $odezhdaType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $odezhdaType = OdezhdaType
        ::findOrFail($id)->delete();
        return redirect()->back()->withSuccess('Успешно удалено');

    }
}
