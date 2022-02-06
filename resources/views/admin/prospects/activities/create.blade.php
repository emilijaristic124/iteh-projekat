@extends('layouts.app')

@section('title', 'Create and Activity for ' . $prospect->name)

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Dodaj interakciju <small class="text-muted">{{ $prospect->name }}</small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        Akcije
                                    </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="{{ route('admin.prospects.activities.dashboard', $prospect) }}">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.card -->

        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('admin.prospects.activities.store', $prospect) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="" class="col-md-3">Tip komunikacije</label>
                        <div class="col-md-9">
                            <select name="communication_type" class="form-control">
                                <option value="phone_call">Telefon</option>
                                <option value="email">Email</option>
                               
                                <option value="other">Ostalo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Interakcija</label>
                        <div class="col-md-9">
                            <select name="type" class="form-control">
                                <option value="">Odaberi interakciju</option>
                                <option value="cold_outreach">Komunikacija mejlom</option>
                                <option value="first_contact">Prvi kontakt</option>
                                
                                <option value="follow_up">Sastanak</option>
                                <option value="document_signing">Potpisivanje ugovora</option>
                                <option value="other">Ostalo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Beleske</label>
                        <div class="col-md-9">
                            <textarea name="notes" cols="30" rows="10" class="form-control" placeholder="Dodaj belesku"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-primary float-right">Dodaj aktivnost</button>
                </form>
            </div>
        </div>
    </div>
@endsection
