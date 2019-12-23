@extends('Studentas.studento_isdestymas')
@section('title', 'Profilis')
@section('content')

    <div class="content">
        <div class="title">
            Pranesimai
        </div>
        <div class="align-middle">
            <table class="table table-bordered " style="width: 100%; font-size: 15px; position: center ">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Laikas</th>
                    <th scope="col">tekstas</th>
                </tr>
                </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{ $pranesimas->data }}</th>
                        <td>{{ $pranesimas->laikas }}</td>
                        <td>{{ $pranesimas->tekstas }}</td>
                    </tr>

                    </tbody>
            </table>
        </div>

    </div>

  @endsection