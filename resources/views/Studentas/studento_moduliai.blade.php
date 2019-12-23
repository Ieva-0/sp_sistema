@extends('Studentas.studento_isdestymas')
@section('title', 'Moduliai')

@section('content')



    <div class="content">
        <div class="title">
            Moduliai
        </div>
        <div class="align-middle">
            <table class="table table-bordered " style="width: 100%; font-size: 15px; position: center ">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Pavadinimas</th>
                    <th scope="col">Dėstytojas</th>
                    <th scope="col">Fakultetas</th>
                    <th scope="col">Pasirinkti</th>
{{--                    <th scope="col">Kursas</th>--}}
                </tr>
                </thead>
                @foreach($moduliai as $modulis)
                    <form  action="/studentas/moduliai/{{ $modulis->kodas }}"  class="form-horizontal" role="form">
                        @csrf
                    <tr>
                        <th scope="row">{{ $modulis->Pavadinimas }}</th>
                        <td>{{ $modulis->Koordinuojantis_destytojas }}</td>
                        <td>{{ $modulis->Fakultetas }}</td>
{{--                        <td>{{ $modulis->Kursas }}</td>--}}
                        <th scope="row"><input type="submit" value="Vertinti" > </th>
                    </tr>

                    </form>
                @endforeach
            </table>

{{--            <div style="text-align: center; padding-top: 30px" >--}}
{{--                {{ $moduliai->links() }}--}}
{{--            </div>--}}
        </div>

    </div>

@endsection
