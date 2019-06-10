




@extends('layouts.app')
@section('content')


     
        
@endsection
<table border="1">
        @foreach ($Cars as $Car)
        <tr>
            <td>{{ $Car->Cname }}</td>
            <td>{{$Car->Catag}}</td>
            <td>{{$Car->DCar}}</td>
            <td>{{$Car->price}}</td>
            <td>{{$Car->Type}}</td>
            <td>{{$Car->Guarantee}}</td>
            <td>
                <form action="{{url('/')}}/Car/{{$Car->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>      
        @endforeach
</table>

