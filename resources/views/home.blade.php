@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Regitro de datos</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Cédula</th>
                          <th>Nombre Completo</th>
                          <th>Correo</th>
                          <th>Teléfono</th>
                          <th>Ciudad</th>
                          <th>Fecha</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($participants as $participant)
                            <tr>
                              <th>{{ $participant->ident }}</th>
                              <th>{{ $participant->name }} {{ $participant->lastname }}</th>
                              <th>{{ $participant->email }}</th>
                              <th>{{ $participant->phone }}</th>
                              <th>{{ $participant->city->name }}</th>
                              <th>{{ $participant->created_at }}</th>
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
