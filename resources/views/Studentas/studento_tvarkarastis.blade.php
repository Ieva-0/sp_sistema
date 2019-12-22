@extends('Studentas.studento_isdestymas')
@section('title', 'Tvarkaraštis')

@section('content')



<div class="content">
    <div class="title">
        Tvarkaraštis
    </div>
<div class="align-middle">
    <table class="table table-bordered " style="width: 100%; font-size: 15px; position: center ">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Vieta</th>
            <th scope="col">Dėstytojas</th>
            <th scope="col">Laikas</th>
            <th scope="col">Kabinetas</th>
            <th scope="col">Paskaitos tipas</th>
        </tr>
        </thead>
        @foreach($moduliai as $modulis)
        <tbody>
        <tr>
            <th scope="row">{{ $modulis->vieta }}</th>
            <td>{{ $modulis->destytojas }}</td>
            <td>{{ $modulis->laikas }}</td>
            <td>{{ $modulis->kabineto_Nr }}</td>
            <td>{{ $modulis->name}}</td>
        </tr>

        </tbody>
            @endforeach
    </table>

    <div style="text-align: center; padding-top: 30px" >
        {{ $moduliai->links() }}
    </div>
</div>

</div>

@endsection
