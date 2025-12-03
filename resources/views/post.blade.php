<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar Posts</title>
</head>
<body>
    <h1>Daftar Posts</h1>
    
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            
            <p>
                Ditulis oleh: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                di Kategori: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <p>{{ $post->excerpt }}</p>

        </article>
    @endforeach
    
</body>
</html>