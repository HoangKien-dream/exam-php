<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    @csrf
    <form action=" " method="post">
        <div>
            Name Product <input class="form-control" name="name" type="text">
        </div>
        <div>
            Price <input  class="form-control" name="price" type="number">
        </div>
        <div>
            Avatar <input class="form-control" name="avatar" type="text">
        </div>
        <div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
