@extends('Studentas.studento_isdestymas')
@section('title', 'Moduliai')

@section('content')
    <div class="title">
        Užsiemimai
    </div>
    <div class="align-middle">
        <table class="table table-bordered " style="width: 100%; font-size: 15px;" >
            <thead class="thead-dark">
            <tr>
                <th scope="col">Pavadinimas</th>
                <th scope="col">Dėstytojas</th>
                <th scope="col">Fakultetas</th>
                 <th scope="col">Kalba</th>
                <th scope="col">Pasirinkti</th>
            </tr>
            </thead>
            @foreach($moduliai as $modulis)
                <form  action="/studentas/uzsiemimai" method="post" class="form-horizontal" role="form">
                    @csrf
            <tr>
                <input type="hidden" name="Kodas" id="" value="{{ $modulis->kodas }}">
{{--                <input type="hidden" name="Pavadinimas" id="" value="{{ $modulis->Pavadinimas }}">--}}
{{--                <input type="hidden" name="Koordinuojantis_destytojas" id="" value="{{ $modulis->Koordinuojantis_destytojas }}">--}}
{{--                <input type="hidden" name="Fakultetas" id="" value="{{ $modulis->Fakultetas }}">--}}
{{--                <input type="hidden" name="name" id="" value="{{ $modulis->name }}">--}}

                <td>{{ $modulis->Pavadinimas }}</td>
                <td>{{ $modulis->Koordinuojantis_destytojas }}</td>
                <td>{{ $modulis->Fakultetas }}</td>
                    <th scope="row">{{ $modulis->name }}</th>
                    <th scope="row"><input type="submit" value="Pasirinkti" > </th>
            </tr>
                </form>
            @endforeach
        </table>
        <div style="text-align: center; padding-top: 30px" >
            {{ $moduliai->links() }}
        </div>
    </div>
@endsection