<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="ViewData" method="POST">
        @csrf
        <input type="text"   name="userName" placeholder="" value="{{old('userName')}}"><br>
        <input type="text"   name="userName1" placeholder="" value="{{old('userName1')}}"><br>
        <input type="text"   name="userName2" placeholder="" value="{{old('userName2')}}"><br>
        <input type="Password"   name="Password" placeholder="" value="{{old('Password')}}">

        <input type="submit" value="LOgin">
    </form>
    <SCript>
            var errorMess ="";
    @foreach ($errors->all() as $error)

        errorMess =errorMess + "{{$error}}";
    @endforeach
   
            alert(errorMess);
 </SCript>

</body>
</html>