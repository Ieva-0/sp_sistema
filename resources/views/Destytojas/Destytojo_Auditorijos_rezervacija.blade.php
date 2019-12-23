@extends('Destytojas.isdestymas')
@section('title', 'Prisijungti')
@section('content')
    <div class="title">
        Stazuotes
    </div>
    <div class="container" style="padding:20px; width: 100%;">
    <div class="align-middle">
        <table class="table table-bordered " style="width: 100%; font-size: 15px">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Stazuotes Pavadinimas</th>
                    <th scope="col">Stazuotes tema</th>
                    <th scope="col">Elektroninis paštas</th>
                    <th scope="col">5h</th>
                    <th scope="col">Prisiregistravusių</th>
                    <th scope="col">Veiksmas</th>
                </tr>
                

                <tr>
                    <td>laikas</td>
                    <td>pavadinimas</td>
                    <td> projekto_Tema</td>
                    <td>el_pastas</td>
                    <td>trukme</td>
                    <td>dalyviu_Skaicius</td>
                    <td>
                    <a class="btn btn-primary" href="">Pateikti</a>   
                    </td>
                </tr>

                
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
