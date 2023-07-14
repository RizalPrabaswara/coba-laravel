@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success mb-3"><i class="bi bi-arrow-left"></i> Kembali Ke Halaman All
                    Post Saya</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3"><i
                        class="bi bi-pencil-square"></i> Edit</a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger mb-3"
                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')"><i class="bi bi-x-square"></i>
                        Hapus</button>
                </form>

                @if ($post->image)
                <div style="max-height: 400px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                </div>
                @else
                    <img src="/img/webprogramming2.jpg" class="img-fluid" alt="{{ $post->category->name }}" width="1200"
                        height="400">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
