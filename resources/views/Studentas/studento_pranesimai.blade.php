@extends('Studentas.studento_isdestymas')
@section('title', 'Pranesimai')
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
                    <th scope="col">Tema</th>
                </tr>
                </thead>
                @foreach($pranesimai as $pranesimas)
                    <tbody>
                    <tr>
                        <th scope="row">{{ $pranesimas->data }}</th>
                        <td>{{ $pranesimas->laikas }}</td>
                        <td><a href="pranesimai/{{$pranesimas->id_Pranesimas}}"> {{ $pranesimas->tema }} </a></td>

                    </tr>

                    </tbody>
                @endforeach
            </table>

            <div style="text-align: center; padding-top: 30px" >
                {{ $pranesimai->links() }}
            </div>
        </div>

    </div>

    @endsection