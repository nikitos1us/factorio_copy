@extends("main_layout")

@section('title')
    <title>Factorio-Blog-Post</title>
@endsection

@section('main-content')

    <div class="card mt-3" style="background-color: #1a202c;">
        <div class="card-body">
            <div class="card" style="background-color: #4a5568;">

                <div class="card-header">
                    {{$data->title}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$data->info}}</h5>
                    <p class="card-text text-left">{{$data->contenter}}</p>

                </div>
                <div class="card-footer text-muted text-right">
                    {{$data->author}}
                </div>
            </div>

        </div>
    </div>






@endsection
