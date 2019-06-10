<?php

namespace App\Http\Controllers\Admin;

use App\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBranchesRequest;
use App\Http\Requests\Admin\UpdateBranchesRequest;

class BranchesController extends Controller
{
    /**
     * Display a listing of Branch.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('branch_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('branch_delete')) {
                return abort(401);
            }
            $branches = Branch::onlyTrashed()->get();
        } else {
            $branches = Branch::all();
        }

        return view('admin.branches.index', compact('branches'));
    }

    /**
     * Show the form for creating new Branch.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('branch_create')) {
            return abort(401);
        }
        return view('admin.branches.create');
    }

    /**
     * Store a newly created Branch in storage.
     *
     * @param  \App\Http\Requests\StoreBranchesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBranchesRequest $request)
    {
        if (! Gate::allows('branch_create')) {
            return abort(401);
        }
        $branch = Branch::create($request->all());



        return redirect()->route('admin.branches.index');
    }


    /**
     * Show the form for editing Branch.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('branch_edit')) {
            return abort(401);
        }
        $branch = Branch::findOrFail($id);

        return view('admin.branches.edit', compact('branch'));
    }

    /**
     * Update Branch in storage.
     *
     * @param  \App\Http\Requests\UpdateBranchesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBranchesRequest $request, $id)
    {
        if (! Gate::allows('branch_edit')) {
            return abort(401);
        }
        $branch = Branch::findOrFail($id);
        $branch->update($request->all());



        return redirect()->route('admin.branches.index');
    }


    /**
     * Display Branch.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('branch_view')) {
            return abort(401);
        }
        $branch = Branch::findOrFail($id);

        return view('admin.branches.show', compact('branch'));
    }


    /**
     * Remove Branch from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('branch_delete')) {
            return abort(401);
        }
        $branch = Branch::findOrFail($id);
        $branch->delete();

        return redirect()->route('admin.branches.index');
    }

    /**
     * Delete all selected Branch at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('branch_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Branch::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Branch from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('branch_delete')) {
            return abort(401);
        }
        $branch = Branch::onlyTrashed()->findOrFail($id);
        $branch->restore();

        return redirect()->route('admin.branches.index');
    }

    /**
     * Permanently delete Branch from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('branch_delete')) {
            return abort(401);
        }
        $branch = Branch::onlyTrashed()->findOrFail($id);
        $branch->forceDelete();

        return redirect()->route('admin.branches.index');
    }
}
