<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Odezhda;
use App\Models\OdezhdaColor;
use App\Models\OdezhdaFacturer;
use App\Models\OdezhdaForm;
use App\Models\OdezhdaType;
use Illuminate\Http\Request;
use App\Services\FileService;
use App\Http\Requests\Admin\OdezhdaRequest;
use App\Http\Requests\Admin\OdezhdaUpdateRequest;
use Inertia\Inertia;

class OdezhdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Odezhda = Odezhda::latest('id')
        ->paginate($request->input('per_page', 20))
        ->appends($request->except('page'));

        return Inertia::render('Admin/Odezhda/Index', [
            'odezhdalar' => $Odezhda
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $OdezhdaColor = OdezhdaColor::get();
        $OdezhdaFacturer = OdezhdaFacturer::get();
        $OdezhdaForm = OdezhdaForm::get();
        $OdezhdaType = OdezhdaType::get();

        return Inertia::render('Admin/Odezhda/Create', [
            'colors' => $OdezhdaColor,
            'facturers' => $OdezhdaFacturer,
            'forms' => $OdezhdaForm,
            'types' => $OdezhdaType,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OdezhdaRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = FileService::saveFile($request->image, Odezhda::IMAGE_PATH);
        }
        Odezhda::create([
            'name' => $request->name,
            'type_id' => $request->type_id,
            'description' => $request->description,
            'brand' => $request->brand,
            'facturer_id' => $request->facturer_id,
            'color_id' => $request->color_id,
            'value' => $request->value,
            'form_type_id' => $request->form_type_id,
            'size_info' => $request->size_info,
            'image' => $image,
            'price' => $request->price,
        ]);
        return redirect()->route('admin.odezhdalar.index')->withSuccess('Успешно сохранено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Odezhda  $odezhda
     * @return \Illuminate\Http\Response
     */
    public function show(Odezhda $odezhda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Odezhda  $odezhda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $odezhda = Odezhda::findOrFail($id);
        $OdezhdaColor = OdezhdaColor::get();
        $OdezhdaFacturer = OdezhdaFacturer::get();
        $OdezhdaForm = OdezhdaForm::get();
        $OdezhdaType = OdezhdaType::get();

        return Inertia::render('Admin/Odezhda/Edit', [
            'form' => $odezhda,
            'colors' => $OdezhdaColor,
            'facturers' => $OdezhdaFacturer,
            'forms' => $OdezhdaForm,
            'types' => $OdezhdaType,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Odezhda  $odezhda
     * @return \Illuminate\Http\Response
     */
    public function update(OdezhdaUpdateRequest $request, $id)
    {
        $image = null;
        if ($request->hasFile('image')) {
            $image = FileService::saveFile($request->image, Odezhda::IMAGE_PATH);
        }
        $Odezhda = Odezhda::findOrFail($id);
        $Odezhda->update([
            'name' => $request->name,
            'type_id' => $request->type_id,
            'description' => $request->description,
            'brand' => $request->brand,
            'facturer_id' => $request->facturer_id,
            'color_id' => $request->color_id,
            'value' => $request->value,
            'form_type_id' => $request->form_type_id,
            'size_info' => $request->size_info,
            'image' => $image ?? $Odezhda->image,
            'price' => $request->price,
        ]);
        return redirect()->back()->withSuccess('Успешно сохранено');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Odezhda  $odezhda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        Odezhda::findOrFail($id)->delete();
        return redirect()->back()->withSuccess('Успешно удалено');

    }
}
