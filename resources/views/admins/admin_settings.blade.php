@extends("admins.admin_layout")

@section('title')
    @include("admins.admin_navbar")
@endsection

@section('main-content')

    <div class="card mt-3" style="background-color: #1a202c;">
        <div class="card-body">

            <div class="card" style="background-color: #4a5568">
                <div class="card-body text-center">
                    <p class="h1 text-center" style="margin-top: 25px; color: #c6b1de">Информация об
                            администраторе</p>

                    <p class="h1 text-center"
                       style="margin-top: 25px; color: #a9c0ff;">{{ session()->get('LoggedAdminID')}} - {{ session()->get('LoggedAdmin')}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
