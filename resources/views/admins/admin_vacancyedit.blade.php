@extends("admins.admin_layout")

@section('title')

@endsection

@section('main-content')

    <div class="card mt-3" style="background-color: #1a202c;">
        <div class="card-body">
            <div class="card" style="background-color: #4a5568;">
                <div class="card-body text-center">
                    <form method="post" style="margin-top: 30px;margin-bottom: 50px;"
                          action="{{route('adminpanel.vaceditsubmit',$data->id)}}">

                        @csrf
                        <div class="form-group" style="margin-left: 20px;">
                            <label for="vacancy" >Vacancy</label>
                            <input type="text" class="form-control" name="vacancy" placeholder="Vacancy"
                                   value="{{ $data->vacancy}}">
                        </div>
                        <div class="form-group" style="margin-left: 20px;">
                            <label for="info" >Info</label>
                            <input type="text" class="form-control" name="info" placeholder="Info"
                                   value="{{ $data->info}}">
                        </div>
                        <div class="form-group" style="margin-left: 20px;">
                            <label for="contact" >Contact</label>
                            <input type="text" class="form-control" name="contact" placeholder="Contact"
                                   value="{{ $data->contact}}">
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
