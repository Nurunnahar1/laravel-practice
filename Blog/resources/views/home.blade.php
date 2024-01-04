<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row  m-5">
            @if (Session::has('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('msg') }} 
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
                </div>
            @endif

            <div class="col-md-12">
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="title" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>


</body>

</html>
