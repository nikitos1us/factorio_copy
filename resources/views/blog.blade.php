@extends('main_layout')

@section('title')
    <title>Factorio-Blog</title>
@endsection
@section('main-content')


    <div class="container text-dark text-center mt-3">

        @foreach ($blogs as $v)

            <div class="card mt-3" style="background-color: #1a202c;">
                <div class="card-body">

                    <div class="card" style="background-color: #4a5568;">
                        <div class="card-header bg-transparent border-success"
                             style=" color: #cbd5e0; font-weight: bold">{{$v->title}}</div>
                        <div class="card-body text-center">
                            <h6 class="card-title" style=" color: #a1ad57">{{$v->author}}</h6>
                            <p class="card-text" style=" color: wheat">{{$v->info}}</p>
                        </div>
                        <div class="card-footer bg-transparent border-success">
                            <a href="{{ route('blog.post',$v->id) }}">
                                <button type="button" class="btn  btn-outline-info">Read more...</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>






@endsection
