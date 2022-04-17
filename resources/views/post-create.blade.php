<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>  Advance Laravel Caching </title>
</head>
<body>



<div class="container">
    <div class="row">
        <h3 class="p-3 bg-black text-white text-center"> Advance Laravel Caching <a class="btn btn-success" href="{{url('/')}}"> POSTS </a> </h3>
            <div class="col-md-6 mx-auto">
                <form action="{{route('post.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label"> Title </label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"> Description</label>
                        <textarea class="form-control" name="description" id="description"></textarea>
                     </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

    </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
