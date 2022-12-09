<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OdezhdaForm;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\Admin\OdezhdaFormRequest;

class OdezhdaFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $OdezhdaForm = OdezhdaForm::latest('id')
            ->paginate($request->input('per_page', 20))
            ->appends($request->except('page'));

        return Inertia::render('Admin/Form/Index', [
            'forms' => $OdezhdaForm
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Form/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OdezhdaFormRequest $request)
    {
        OdezhdaForm::create([
            'name' => $request->name
        ]);
        return redirect()->route('admin.forms.index')->withSuccess('Успешно сохранено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OdezhdaForm  $odezhdaForm
     * @return \Illuminate\Http\Response
     */
    public function show(OdezhdaForm $odezhdaForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OdezhdaForm  $odezhdaForm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $odezhdaForm = OdezhdaForm::findOrFail($id);

        return Inertia::render('Admin/Form/Edit', [
            'form' => $odezhdaForm
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OdezhdaForm  $odezhdaForm
     * @return \Illuminate\Http\Response
     */
    public function update(OdezhdaFormRequest $request, $id)
    {
        OdezhdaForm::findOrFail($id)->update([
            'name' => $request->name
        ]);
        return redirect()->back()->withSuccess('Успешно сохранено');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OdezhdaForm  $odezhdaForm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OdezhdaForm
        ::findOrFail($id)->delete();
        return redirect()->back()->withSuccess('Успешно удалено');

    }
}
