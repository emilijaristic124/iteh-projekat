@extends('layouts.app')

@section('title', $prospect->name . '\'s Dashboard')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h1>Dashboard <small class="text-muted">{{ $prospect->name }}</small></h1>
            </div>
        </div>
        {{-- Activities preview --}}
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h3>Najnovije interakcije</h3>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                       Akcije
                                    </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="{{ route('admin.prospects.activities.create', $prospect->id) }}">Dodaj interakciju</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <ul class="list-group">
                    @foreach (ProspectActivity::latest()->limit(5)->get() as $activity)
                    <li class="list-group-item">
                        <h5>
                            <a href="{{ route('admin.prospects.activities.show', ['prospect' => $prospect->id, 'activity' => $activity->id]) }}">
                                {{ ucwords(str_replace('_', ' ', $activity->type)) }}
                            </a>
                            <small class="text-muted float-right"><em>{{ date('F m, Y @ g:i A T') }}</em></small>
                        </h5>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>

        {{-- Documents Preview --}}
      
@endsection 
