
@extends('layouts.app')
@section('content')
<form action="{{ route('test.store') }}" method="post">
    @csrf
           
                          <div class="form-group row">
                            <label for="Tname" class="col-md-4 col-form-label text-md-right">Tname</label>
                
                            <div class="col-md-6">
                                <input  type="text" class="form-control{{ $errors->has('Tname') ? ' is-invalid' : '' }}" name="Tname" value="{{ old('Tname') }}" >
                                @if ($errors->has('Tname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Tname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                   
             
             <div class="form-group row">
                <label for="Tphone" class="col-md-4 col-form-label text-md-right">Tphone</label>
    
                <div class="col-md-6">
                    <input  type="text" class="form-control{{ $errors->has('Tphone') ? ' is-invalid' : '' }}" name="Tphone" value="{{ old('Tphone') }}" >
    
                    @if ($errors->has('Tphone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Tphone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <input type="submit">
            </div>
        </form>
    
        @foreach ($errors->all() as $error)
            <h1>{{$error}}</h1>
        @endforeach
        
@endsection
