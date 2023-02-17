<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Vertical (basic) form</h2>
            <form action="{{url('/save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <img src="{{config('global.WEBSITE_IMG_URL').'/1675936099.jpg'}}" height="50px" width="50px">
                    <label for="email">Image:</label>
                    <input type="file" class="form-control" id="email" placeholder="Enter email" name="image">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </body>
</html>
