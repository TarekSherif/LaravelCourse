@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.voluntarydegree.title')</h3>
    
    {!! Form::model($voluntarydegree, ['method' => 'PUT', 'route' => ['admin.voluntarydegrees.update', $voluntarydegree->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', trans('quickadmin.voluntarydegree.fields.title').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'title', 'required' => '']) !!}
                    <p class="help-block">title</p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

