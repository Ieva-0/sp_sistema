@extends('Destytojas.isdestymas')
@section('title', 'Profilio redagavimas')

@section('content')


<div class="container" style="padding-top: 20px;">
    <h1 class="page-header">Profilio redagavimas</h1>
{{--    <div class="row">--}}
{{--        <!-- left column -->--}}
{{--        <div class="col-md-4 col-sm-6 col-xs-12">--}}
{{--            <div class="text-center">--}}
{{--                <img src="" class="avatar img-circle img-thumbnail" alt="avatar">--}}
{{--                <h6>Upload a different photo...</h6>--}}
{{--                <input type="file" class="text-center center-block well well-sm">--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- edit form column -->
      <div class="col-md-8 col-sm-6 col-xs-12 col-lg-8 personal-info" style="font-size: 15px">
            <!-- edit form column  <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                This is an <strong>.alert</strong>. Use this to show important messages to the user.
            </div>
            -->
            <h3>Asmenine informacija</h3>
            <form action="/Destytojas/Profilis" method="post" class="form-horizontal" role="form">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label class="col-lg-3 control-label">Vardas:</label>
                    <div class="col-md-8">
                        <input class="form-control" id="Vardas" name="Vardas" type="text" value="{{$studentas->Vardas}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Pavardė:</label>
                    <div class="col-md-8">
                        <input class="form-control" id="Pavarde" name="Pavarde" type="text"  value="{{$studentas->Pavarde}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Elektroninis paštas:</label>
                    <div class="col-md-8">
                        <input class="form-control" id="El_Pastas" name="El_Pastas" type="text"  value="{{$studentas->El_Pastas}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input class="btn btn-primary" value="Išsaugoti" type="submit">
                        <span></span>
                        <input class="btn btn-default" value="Atšaukti" type="reset">
                    </div>
                </div>
            </form>
        </div>
</div>
    @endsection