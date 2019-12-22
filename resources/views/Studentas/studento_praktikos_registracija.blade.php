@extends('Studentas.studento_isdestymas')
@section('title', 'Prisijungti')
@section('content')
    <div class="title">
        Praktikos
    </div>
    <div class="container" style="padding:20px; width: 100%;">
    <div class="align-middle">
        <table class="table table-bordered " style="width: 100%; font-size: 15px">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Imonės Pavadinimas</th>
                    <th scope="col">Projekto tema</th>
                    <th scope="col">Elektroninis paštas</th>
                    <th scope="col">Trukmė</th>
                    <th scope="col">Prisiregistravusių</th>
                    <th scope="col">Veiksmas</th>
                </tr>
                @foreach($praktiku_list as $praktika)
                <tr>
                    <td>{{ $praktika->laikas}}</td>
                    <td>{{ $praktika->pavadinimas}}</td>
                    <td>{{ $praktika->projekto_Tema }}</td>
                    <td>{{ $praktika->el_pastas}}</td>
                    <td>{{ $praktika->trukme}} val.</td>
                    <td>{{ $praktika->dalyviu_Skaicius}} dal.</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('aplikacija-praktikai',['id' => $praktika->id]) }}">Pateikti</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
    </div>

{{--    <div class="content">--}}
{{--        <form>--}}
{{--            <div class="form-group" style="width: 18%">--}}
{{--                <label for="exampleFormControlInput1">Elektroninis paštas</label>--}}
{{--                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">--}}
{{--            </div>--}}

{{--            <div class="form-group" style="width: 50%">--}}
{{--                <label for="exampleFormControlTextarea1">Motyvacinis laiškas</label>--}}
{{--                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>--}}
{{--            </div>--}}

{{--            <div class="custom-file" style="width: 50%">--}}
{{--                <input type="file" class="custom-file-input" id="customFile">--}}
{{--                <label class="custom-file-label" for="customFile">Įkelkite CV</label>--}}
{{--            </div>--}}
{{--            <div class="submit">--}}
{{--                <button type="submit" class="btn btn-primary">Siūsti</button>--}}
{{--            </div>--}}


{{--        </form>--}}


{{--    </div>--}}



        @endsection
