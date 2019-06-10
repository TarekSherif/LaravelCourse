<?php

namespace App\Http\Controllers\Api\V1;

use App\Voluntarydegree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreVoluntarydegreesRequest;
use App\Http\Requests\Admin\UpdateVoluntarydegreesRequest;

class VoluntarydegreesController extends Controller
{
    public function index()
    {
        return Voluntarydegree::all();
    }

    public function show($id)
    {
        return Voluntarydegree::findOrFail($id);
    }

    public function update(UpdateVoluntarydegreesRequest $request, $id)
    {
        $voluntarydegree = Voluntarydegree::findOrFail($id);
        $voluntarydegree->update($request->all());
        

        return $voluntarydegree;
    }

    public function store(StoreVoluntarydegreesRequest $request)
    {
        $voluntarydegree = Voluntarydegree::create($request->all());
        

        return $voluntarydegree;
    }

    public function destroy($id)
    {
        $voluntarydegree = Voluntarydegree::findOrFail($id);
        $voluntarydegree->delete();
        return '';
    }
}
