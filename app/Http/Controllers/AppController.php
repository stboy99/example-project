<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form\UpdateDataRequest;
use App\Models\Data;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
class AppController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Data::query()->selectRaw('id, name, price, detail, publish');
            return DataTables::of($model)
                ->addColumn('action', function ($model) {
                    return view('action', compact('model'));
                })
                ->make(true);
       }

        return view('main');
    }

    public function create()
    {
        return view('create');
    }

    public function postCreate(Request $request)
    {
        $data = $request->all();
        
        $model = new Data;
        $model->fill($data);
        $model->save();

        return view('main');
    }

    public function update(int $id)
    {
        $model = Data::find($id);
        return view('update', compact('model'));

    }

    public function postUpdate(UpdateDataRequest $request, $id){
        $model = Data::findOrFail($id);
        $model->fill($request->all());
        $model->save();

        return redirect(route('welcome'));
    }
    public function delete(int $id)
    {
        $model = Data::findOrFail($id);
        $model->delete();
    }

    public function showDetails(int $id){
        $model = Data::findOrFail($id);

        return view('detail', compact('model'));
    }
}
