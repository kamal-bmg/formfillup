<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="card-header d-inline-flex justify-content-center align-items-center" style="padding-top: 10px" >
        <div>

            <form action="/lotus" method="post">
                @csrf
                <div class="form-group">
                    <label for="my-input">name</label>
                    <input id="my-input" class="form-control" type="text" name="name">
                </div>

                <div class="form-group">
                    <label for="my-input">address</label>
                    <input id="my-input" class="form-control" type="text" name="address">
                </div>

                <div class="form-group">
                    <label for="my-input">city</label>
                    <input id="my-input" class="form-control" type="text" name="city">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="my-input">dob</label>
                        <input id="my-input" class="form-control" type="date" name="dob">
                    </div>
                </div>
                <hr>

                <div>
                    <button type="submit" class="btn btn-success mr 3">save</button>
                    <a href="/lotus" class="btn btn-outline-danger">back</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
