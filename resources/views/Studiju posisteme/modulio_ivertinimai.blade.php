@extends('Studiju posisteme.isdestymas')
@section('title', 'Mokslo grupės')
@section('content')
    <h2>Modulio P111B128 įvertinimai</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Įvertinimas</th>
            <th scope="col">Data</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">7</th>
            <td>2019.10.18</td>
            <td><form action="/studijos/moduliai/1">@csrf<button class="btn btn-primary">Ištrinti</button></form></td>
        </tr>
        <tr>
            <th scope="row">10</th>
            <td>2019.10.20</td>
            <td><form action="/studijos/moduliai/1">@csrf<button class="btn btn-primary">Ištrinti</button></form></td>
        </tr>
        </tbody>
    </table>
@endsection