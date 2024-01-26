<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center my-5 text-primary ">Post News</h1>

    <div class="container text-center my-5 p-5">
        <form method="post" action="{{ route('post-news-submit') }}" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <input type="text" class="form-control" placeholder="News Title" aria-label="News Title" name="title">
                <input type="file" class="form-control" name="image">
                <textarea class="form-control" id="description" placeholder="Description" rows="10" name="description"></textarea>
                <input type="text" class="form-control" placeholder="Slug" aria-label="Slug" name="slug">


            </div>

            <button class="btn btn-primary my-3 " type="submit" name="submit">Submit</button>
        </form>

        <div>



        </div>
    </div>
</body>

</html>
