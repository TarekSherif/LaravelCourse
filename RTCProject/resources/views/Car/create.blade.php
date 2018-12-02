
@extends('layouts.app')
@section('content')
<form action="{{url('/')}}/Car" method="post">
    @csrf
           
                          <div class="form-group row">
                            <label for="Cname" class="col-md-4 col-form-label text-md-right">Cname</label>
                
                            <div class="col-md-6">
                                <input  type="text" class="form-control{{ $errors->has('Cname') ? ' is-invalid' : '' }}" name="Cname" value="{{ old('Cname') }}" >
                                @if ($errors->has('Cname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Cname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                   
                    
                        <div class="form-group row">
                            <label for="Image" class="col-md-4 col-form-label text-md-right">Image</label>
                
                            <div class="col-md-6">
                                <input  type="text" class="form-control{{ $errors->has('Image') ? ' is-invalid' : '' }}" name="Image" value="{{ old('Image') }}" >
                                @if ($errors->has('Image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="DCar" class="col-md-4 col-form-label text-md-right">DCar</label>
                
                            <div class="col-md-6">
                                <textarea name="DCar" id="" cols="30" rows="10">
                                    {{old('DCar')}}     
                            </textarea> 
                                @if ($errors->has('DCar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('DCar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> Type </td>
                    <td>
                        <select name="Type" id="">
                                <option value="0">جديد</option>
                            <option value="1">مستعمل</option>
                        </select>
                        
                    
                          <div class="form-group row">
                            <label for="Catag" class="col-md-4 col-form-label text-md-right">Catag</label>
                
                            <div class="col-md-6">
                                <input  type="text" class="form-control{{ $errors->has('Catag') ? ' is-invalid' : '' }}" name="Catag" value="{{ old('Catag') }}" >
                                @if ($errors->has('Catag'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Catag') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
             
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">price</label>
                
                            <div class="col-md-6">
                                <input  type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" >
                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
             
             <div class="form-group row">
                <label for="Guarantee" class="col-md-4 col-form-label text-md-right">Guarantee</label>
    
                <div class="col-md-6">
                    <input  type="text" class="form-control{{ $errors->has('Guarantee') ? ' is-invalid' : '' }}" name="Guarantee" value="{{ old('Guarantee') }}" >
    
                    @if ($errors->has('Guarantee'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Guarantee') }}</strong>
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
