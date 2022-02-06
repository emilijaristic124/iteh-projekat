@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Kreiraj klijenta</h1>

                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Akcije
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{ route('admin.prospects.dashboard') }}">Dashboard</a>
                            
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                @if ($errors->count())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                <form action="{{ route('admin.prospects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="">Ime</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <!-- <div class="form-group">
                        <label for="">Profilna slika</label>
                        <input type="file" class="form-control-file" name="profile_image">
                    </div> -->

                    <button class="btn btn-primary float-right">Kreiraj</button>
                </form>

            </div>
        </div>
    </div>
@endsection
