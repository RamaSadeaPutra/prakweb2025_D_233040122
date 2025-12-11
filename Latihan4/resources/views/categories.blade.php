@extends('components.layout') 

@section('container')
    <h1>Daftar Kategori</h1>
    <hr>
    
    <div class="list-group">
        @foreach ($categories as $category)
            <a href="/categories/{{ $category->slug }}" class="list-group-item list-group-item-action">
                {{ $category->name }}
            </a>
        @endforeach
    </div>
@endsection