@extends('Studiju posisteme.isdestymas')

@section('title', 'Pradinis')
@section('content')
    <div style="text-align: center">
    <h1>Pradinis puslapis</h1>
    <form style="margin:70px 0 15px 0" action="/imone">
        <button class="btn btn-dark" type="submit">Imonių posistemė</button>
    </form>
    <form style="margin:15px 0 15px 0" action="/studentas">
        <button class="btn btn-dark" type="submit">Studentų posistemė</button>
    </form>
    <form style="margin:15px 0 15px 0" action="/destytojas">
        <button class="btn btn-dark" type="submit">Dėstytojų posistemė</button>
    </form>
    </div>
@endsection
