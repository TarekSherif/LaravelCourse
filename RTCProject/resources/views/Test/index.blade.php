@foreach ($Tests as $test)
<table>
    <tr>
        <td>{{$test->Tname}}</td>
        <td>{{$test->Tphone}}</td>
        <td><a href="{{ route('test.edit',[$test->id]) }}">Edit</a></td>

        <td>
        <form action="{{ route('test.destroy',[$test->id])}}" method="post">
                @csrf
                @method('DELETE')
               <input type="submit" value="Delete">
            </form>

           
        </td>
      
        
    </tr>
</table>



@endforeach
<br>

<a href="{{ route('test.create') }}">create</a>