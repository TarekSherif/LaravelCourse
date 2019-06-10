<?php

namespace App\Http\Controllers\Admin;

use App\Voluntarydegree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreVoluntarydegreesRequest;
use App\Http\Requests\Admin\UpdateVoluntarydegreesRequest;

class VoluntarydegreesController extends Controller
{
    /**
     * Display a listing of Voluntarydegree.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('voluntarydegree_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('voluntarydegree_delete')) {
                return abort(401);
            }
            $voluntarydegrees = Voluntarydegree::onlyTrashed()->get();
        } else {
            $voluntarydegrees = Voluntarydegree::all();
        }

        return view('admin.voluntarydegrees.index', compact('voluntarydegrees'));
    }

    /**
     * Show the form for creating new Voluntarydegree.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('voluntarydegree_create')) {
            return abort(401);
        }
        return view('admin.voluntarydegrees.create');
    }

    /**
     * Store a newly created Voluntarydegree in storage.
     *
     * @param  \App\Http\Requests\StoreVoluntarydegreesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVoluntarydegreesRequest $request)
    {
        if (! Gate::allows('voluntarydegree_create')) {
            return abort(401);
        }
        $voluntarydegree = Voluntarydegree::create($request->all());



        return redirect()->route('admin.voluntarydegrees.index');
    }


    /**
     * Show the form for editing Voluntarydegree.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('voluntarydegree_edit')) {
            return abort(401);
        }
        $voluntarydegree = Voluntarydegree::findOrFail($id);

        return view('admin.voluntarydegrees.edit', compact('voluntarydegree'));
    }

    /**
     * Update Voluntarydegree in storage.
     *
     * @param  \App\Http\Requests\UpdateVoluntarydegreesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVoluntarydegreesRequest $request, $id)
    {
        if (! Gate::allows('voluntarydegree_edit')) {
            return abort(401);
        }
        $voluntarydegree = Voluntarydegree::findOrFail($id);
        $voluntarydegree->update($request->all());



        return redirect()->route('admin.voluntarydegrees.index');
    }


    /**
     * Display Voluntarydegree.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('voluntarydegree_view')) {
            return abort(401);
        }
        $voluntarydegree = Voluntarydegree::findOrFail($id);

        return view('admin.voluntarydegrees.show', compact('voluntarydegree'));
    }


    /**
     * Remove Voluntarydegree from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('voluntarydegree_delete')) {
            return abort(401);
        }
        $voluntarydegree = Voluntarydegree::findOrFail($id);
        $voluntarydegree->delete();

        return redirect()->route('admin.voluntarydegrees.index');
    }

    /**
     * Delete all selected Voluntarydegree at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('voluntarydegree_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Voluntarydegree::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Voluntarydegree from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('voluntarydegree_delete')) {
            return abort(401);
        }
        $voluntarydegree = Voluntarydegree::onlyTrashed()->findOrFail($id);
        $voluntarydegree->restore();

        return redirect()->route('admin.voluntarydegrees.index');
    }

    /**
     * Permanently delete Voluntarydegree from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('voluntarydegree_delete')) {
            return abort(401);
        }
        $voluntarydegree = Voluntarydegree::onlyTrashed()->findOrFail($id);
        $voluntarydegree->forceDelete();

        return redirect()->route('admin.voluntarydegrees.index');
    }
}
