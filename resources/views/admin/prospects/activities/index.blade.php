@extends('layouts.app')

@section('title', $prospect->name . "'s profile activity ")

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Interakcije korisnika <small class="text-muted">{{ $prospect->name }}</small></h1>

                  

                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        Akcije
                                    </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a href="{{ route('admin.prospects.prospect.dashboard', $prospect) }}" class="dropdown-item"> Dashboard</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.card -->
        

        

    </script>

        {{ $activities->links() }}

        @foreach ($activities as $activity)
        
       
            <div class="card mt-3">
                <div class="card-body">
                    <div class="d-flex">
                        <div>
                            <h5>Tip interakcije: {{ $activity->type }}</h5>
                            <h5>Način komunikacije: {{ $activity->communication_type }}</h5>
                        </div>

                        <div class="ml-auto">
                            <h6><em>{{ date('F d, Y @ g:i A T', strtotime($activity->created_at)) }}</em></h6>
                        </div>
                    </div>


                    <hr>
                    <h5>Beleške:</h5>
                    <p>{{ $activity->notes }}</p>
                </div>
            </div>
          
        @endforeach
    </div>
@endsection
