<!DOCTYPE html>
<html>
<head>
    <title>laravel 6 file upload example - ItSolutionStuff.com.com</title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
  
<body>
<div class="container">
   
   @foreach($files as $file)
      <ul>
      <li><a href="{{ route('files.index')}}" download><img src="{{ URL::to('/') }}/uploads/{{ $file->file }}" class="img-thumbnail" width="75" /></a></li>
      </ul>
   @endforeach
</div>
</body>
  
</html>