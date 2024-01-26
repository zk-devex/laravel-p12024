<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Home Page</h1>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard">Dashboard</a>
            <a class="navbar-brand" href="/admin">Admin</a>
            <a class="navbar-brand" href="/users">Users</a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            @foreach ($posts as $post)
                <div class="col mb-4">
                    <div class="card">
                        <img style="max-width: 300px; height: auto;" src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text" id="description-{{ $post->id }}">{{ \Illuminate\Support\Str::limit($post->description, 100) }}</p>
                            <p class="card-text">Slug: {{ $post->slug }}</p>
                            <a href="{{ route('view-news', ['id' => $post->id]) }}" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#details-{{ $post->id }}" aria-expanded="false" aria-controls="details-{{ $post->id }}">View Details</a>
                            <div class="collapse mt-3" id="details-{{ $post->id }}">
                                {{ $post->description }}
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rn1FiZ6Dl6CA7tg3IIqKd4wAydCAB7zJK95i86Zph1vS5Hv5q1D2Vz5wPq0l5t6" crossorigin="anonymous"></script>
</body>
</html>
