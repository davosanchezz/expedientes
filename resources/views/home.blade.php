@extends('layouts.app')

@section('content')
<div class="container-fliud">
   <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>-->


    <div class="row">
        <div class="col col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th>Expediente</th>
                                <th>Actor</th>
                                <th>Demanda</th>
                                <th>Prestaciones</th>
                                <th>Edo. Procesal</th>
                                <th>Prox. Audiencia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($expedientes as $e)
                            <tr>
                                <td scope="row">{{ $e->expediente }}</td>
                                <td>{{ $e->actor }}</td>
                                <td>{{ $e->demanda }}</td>
                                <td>{{ $e->prestaciones }}</td>
                                <td>{{ $e->edo_procesal }}</td>
                                <td>{{ $e->prox_audiencia }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
