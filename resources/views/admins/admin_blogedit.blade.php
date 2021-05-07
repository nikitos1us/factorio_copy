@extends("admins.admin_layout")

@section('title')

@endsection

@section('main-content')

    <div class="card mt-3" style="background-color: #1a202c;">
        <div class="card-body">
            <div class="card" style="background-color: #4a5568;">
                <div class="card-body text-center">
                    <form method="post" style="margin-top: 30px;margin-bottom: 50px;"
                          action="{{route('adminpanel.blogeditsubmit',$data->id)}}">

                        @csrf


                        <div class="form-group"  style="margin-left: 20px;">
                            <label for="title" style="margin-right: 10px; "> Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title" value="{{$data->title}}">
                        </div>

                        <div class="form-group" style="margin-left: 20px;">
                            <label for="info" style="margin-right: 10px; "> Info</label>
                            <input type="text" class="form-control"  name="info" placeholder="Info" value="{{$data->info}}">
                        </div>

                        <div class="form-group" style="margin-left: 20px;">
                            <label for="author" style="margin-right: 10px; "> Author</label>
                            <input type="text" class="form-control"name="author" placeholder="Author" value="{{$data->author}}">
                        </div>
                        <div class="form-group" style="margin-left: 20px;">
                            <label for="contenter" style="margin-right: 10px; "> Content</label>
                            <input type="text" class="form-control" name="contenter" placeholder="Content" value="{{$data->contenter}}">

                        </div>


                        <div class="form-group" style="margin-left: 20px;">
                            <input type="submit" class="btn btn-primary" style="margin-left: 20px;"
                                   value="Сохранить изменения"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>





@endsection
