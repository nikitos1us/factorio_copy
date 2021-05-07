@extends('main_layout')

@section('title')
    <title>Factorio-Vacancies</title>
@endsection
@section('main-content')


    <div class="container text-dark text-center mt-3">

        @foreach ($vacancies as $v)

            <div class="card mt-3" style="background-color: #1a202c;">
                <div class="card-body">
                    <div class="card" style="background-color: #4a5568;">
                        <div class="card-body text-center">
                            <h6 class="card-title" style=" color: #a1ad57">{{$v->vacancy}}</h6>
                            <p class="card-text" style=" color: wheat">{{$v->info}}</p>
                            <button type="button" class="btn btn-outline-success">Contact us</button>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>



    </div>


@endsection
