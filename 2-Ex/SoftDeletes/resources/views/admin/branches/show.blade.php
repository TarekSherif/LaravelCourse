@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.branch.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.branch.fields.branch')</th>
                            <td field-key='branch'>{{ $branch->branch }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.branch.fields.address')</th>
                            <td field-key='address'>{{ $branch->address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.branch.fields.phone')</th>
                            <td field-key='phone'>{{ $branch->phone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.branch.fields.email')</th>
                            <td field-key='email'>{{ $branch->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.branch.fields.fb')</th>
                            <td field-key='fb'>{{ $branch->fb }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.branch.fields.wb')</th>
                            <td field-key='wb'>{{ $branch->wb }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.branches.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


