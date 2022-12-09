<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OdezhdaFacturer;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\Admin\OdezhdaFacturerRequest;

class OdezhdaFacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->name;

        $OdezhdaFacturer = OdezhdaFacturer::latest('id')
            ->when($name, fn($q) => $q->where('name', 'like', "%$name%"))
            ->paginate($request->input('per_page', 20))
            ->appends($request->except('page'));

        return Inertia::render('Admin/Facturers/Index', [
            'facturers' => $OdezhdaFacturer
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Facturers/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OdezhdaFacturerRequest $request)
    {
        OdezhdaFacturer::create([
            'name' => $request->name,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        return redirect()->route('admin.facturers.index')->withSuccess('Успешно сохранено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OdezhdaFacturer  $odezhdaFacturer
     * @return \Illuminate\Http\Response
     */
    public function show(OdezhdaFacturer $odezhdaFacturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OdezhdaFacturer  $odezhdaFacturer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $odezhdaFacturer = OdezhdaFacturer
        ::findOrFail($id);
        return Inertia::render('Admin/Facturers/Edit', [
            'facturer' => $odezhdaFacturer
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OdezhdaFacturer  $odezhdaFacturer
     * @return \Illuminate\Http\Response
     */
    public function update(OdezhdaFacturerRequest $request, $id)
    {
        $odezhdaFacturer = OdezhdaFacturer
        ::findOrFail($id)->update([
            'name' => $request->name,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        return redirect()->back()->withSuccess('Успешно сохранено');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OdezhdaFacturer  $odezhdaFacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $odezhdaFacturer = OdezhdaFacturer
        ::findOrFail($id)->delete();
        return redirect()->back()->withSuccess('Успешно удалено');
    }
}
