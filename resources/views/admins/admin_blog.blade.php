@extends("admins.admin_layout")

@section('title')
    @include("admins.admin_navbar");
@endsection

@section('main-content')

    @if(Session::get('fail'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> {{Session::get('fail')}}</strong>

        </div>

    @endif
    <div class="card mt-3" style="background-color: #1a202c;">
        <div class="card-body">
            <div class="card" style="background-color: #4a5568;">
                <div class="card-body text-center">
                    <form style="margin-top: 30px;margin-bottom: 50px;">


                        @csrf

                        <div class="form-group" style="margin-left: 20px;">
                            <label for="title" style="margin-right: 10px; "> Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title"
                                   value="{{old('title')}}">
                        </div>

                        <div class="form-group" style="margin-left: 20px;">
                            <label for="info" style="margin-right: 10px; "> Info</label>
                            <input type="text" class="form-control" name="info" placeholder="Info"
                                   value="{{old('info')}}">
                        </div>

                        <div class="form-group" style="margin-left: 20px;">
                            <label for="author" style="margin-right: 10px; "> Author</label>
                            <input type="text" class="form-control" name="author" placeholder="Author"
                                   value="{{old('author')}}">
                        </div>
                        <div class="form-group" style="margin-left: 20px;">
                            <label for="contenter" style="margin-right: 10px; "> Content</label>
                            <input type="text" class="form-control" name="contenter" placeholder="Content"
                                   value="{{old('content')}}">

                        </div>

                        <div class="form-group" style="margin-left: 20px;">
                            <input type="submit" class="btn btn-primary" style="margin-left: 20px;"
                                   formaction="{{route('adminpanel.blogcheck')}}" value="Добавить"/>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <table class="table table-striped table-dark mt-3" >
        <thead>
        <tr>

            <th class="text-center">Title</th>
            <th class="text-center">Info</th>
            <th class="text-center">Author</th>
            <th class="text-center">Content</th>
            <th style="width: 100px;"></th>
            <th style="width: 100px;"></th>
        </tr>
        </thead>

        <tbody>
        @foreach ($blog as $v)
            <tr>

                <td class="text-center">{{ $v->title }}</td>
                <td class="text-center">{{ $v->info }}</td>
                <td class="text-center">{{ $v->author }}</td>
                <td class="text-center">{{ $v->contenter }}</td>
                <td class="text-center"><a href="{{ route('adminpanel.blogedit',$v->id) }}">
                        <button type="button" class="btn btn-primary">Change</button>
                    </a></td>
                <td class="text-center"><a href="{{ route('adminpanel.blogdelete',$v->id) }}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a></td>
            </tr>
        @endforeach

        </tbody>
    </table>




@endsection


