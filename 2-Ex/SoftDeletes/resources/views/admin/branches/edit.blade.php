@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.branch.title')</h3>
    
    {!! Form::model($branch, ['method' => 'PUT', 'route' => ['admin.branches.update', $branch->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('branch', trans('quickadmin.branch.fields.branch').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('branch', old('branch'), ['class' => 'form-control', 'placeholder' => 'الفرع', 'required' => '']) !!}
                    <p class="help-block">الفرع</p>
                    @if($errors->has('branch'))
                        <p class="help-block">
                            {{ $errors->first('branch') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('address', trans('quickadmin.branch.fields.address').'', ['class' => 'control-label']) !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => 'العنوان']) !!}
                    <p class="help-block">العنوان</p>
                    @if($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone', trans('quickadmin.branch.fields.phone').'', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => 'التلفون']) !!}
                    <p class="help-block">التلفون</p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.branch.fields.email').'', ['class' => 'control-label']) !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'البريد الالكتروني']) !!}
                    <p class="help-block">البريد الالكتروني</p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('fb', trans('quickadmin.branch.fields.fb').'', ['class' => 'control-label']) !!}
                    {!! Form::text('fb', old('fb'), ['class' => 'form-control', 'placeholder' => 'الفيس بوك']) !!}
                    <p class="help-block">الفيس بوك</p>
                    @if($errors->has('fb'))
                        <p class="help-block">
                            {{ $errors->first('fb') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('wb', trans('quickadmin.branch.fields.wb').'', ['class' => 'control-label']) !!}
                    {!! Form::text('wb', old('wb'), ['class' => 'form-control', 'placeholder' => 'رقم الواتس']) !!}
                    <p class="help-block">رقم الواتس</p>
                    @if($errors->has('wb'))
                        <p class="help-block">
                            {{ $errors->first('wb') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

