<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>

    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgray;
        }
    </style>
</head>

<body>
    <div>
        @php($number=1)
        @foreach ($posts as $post)
        <div class="blog">
            <h3>{{ $number }}. {{ $post[0] }}</h3>
            <p>{{ $post[1] }}</p>
        </div>
        @php($number++)
        @endforeach
    </div>
</body>

</html>