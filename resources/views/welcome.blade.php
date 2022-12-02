<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
   <img src="{{asset('/storage/images/2p4iYCReIY4RKJOb3Ll3bZmKZCPn7tTEHOsBnALc.jpg')}}">
    <div class="container">
        <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type ="file" name="image-upload"class="form-control" id="">
            <button type="submit" class="btn btn-success">Upload</button>
        </form>
    </div>
    
</body>
</html>