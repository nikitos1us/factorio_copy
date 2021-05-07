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
                    <form class="form-inline" style="margin-top: 30px;margin-bottom: 50px;">


                        @csrf

                        <div class="form-group">
                            <label for="vacancy" style="margin-right: 10px; "> Vacancy</label>
                            <input type="text" class="form-control" name="vacancy" placeholder="Vacancy"
                                   value="{{old('vacancy')}}">
                        </div>
                        <div class="form-group" style="margin-left: 20px;">
                            <label for="info" style="margin-right: 10px; "> Info</label>
                            <input type="text" class="form-control" name="info" placeholder="Info"
                                   value="{{old('info')}}">
                        </div>
                        <div class="form-group" style="margin-left: 20px;">
                            <label for="contact" style="margin-right: 10px; "> Contact</label>
                            <input type="text" class="form-control" name="contact" placeholder="Contact"
                                   value="{{old('contact')}}">
                        </div>
                        <div class="form-group" style="margin-left: 20px;">
                            <input type="submit" class="btn btn-primary" style="margin-left: 20px;"
                                   formaction="{{route('adminpanel.vaccheck')}}" value="Добавить"/>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <table class="table table-striped table-dark mt-3">
        <thead>
        <tr>

            <th class="text-center">Vacancy</th>
            <th class="text-center">Info</th>
            <th class="text-center">Contact</th>
            <th style="width: 100px;"></th>
            <th style="width: 100px;"></th>
        </tr>
        </thead>

        <tbody>
        @foreach ($vacancies as $v)
            <tr>

                <td class="text-center">{{ $v->vacancy }}</td>
                <td class="text-center">{{ $v->info }}</td>
                <td class="text-center">{{ $v->contact }}</td>
                <td class="text-center"><a href="{{ route('adminpanel.vacedit',$v->id) }}">
                        <button type="button" class="btn btn-primary">Change</button>
                    </a></td>
                <td class="text-center"><a href="{{ route('adminpanel.vacdelete',$v->id) }}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a></td>
            </tr>
        @endforeach

        </tbody>
    </table>




@endsection


