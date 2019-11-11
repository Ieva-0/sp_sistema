<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .top-right > a{
        position: absolute;
        right: 10px;
        top: 18px;
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>

<div class="top-right ">
    <a href="{{ url('studentas') }}">Pagrindinis puslapis</a>
</div>

<div class="container" style="padding-top: 60px;">
    <h1 class="page-header">Profilio redagavimas</h1>
    <div class="row">
        <!-- left column -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="text-center">
                <img src="" class="avatar img-circle img-thumbnail" alt="avatar">
            </div>
        </div>
        <!-- edit form column -->
        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
            <!-- edit form column  <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                This is an <strong>.alert</strong>. Use this to show important messages to the user.
            </div>
            -->
            <h3>Personal info</h3>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Vardas:</label>
                    <div class="col-lg-8">
                        <label class="col-lg-3 control-label">Vardenis</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Pavardė:</label>
                    <div class="col-lg-8">
                        <label class="col-lg-3 control-label">Pavardenis</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Elektroninis paštas:</label>
                    <div class="col-lg-8">
                        <label class="col-lg-3 control-label">Vardenis@gmail.com</label>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Studijų programa</label>
                    <div class="col-md-8">
                        <label class="col-lg-4 control-label">Programu sistemos</label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Vartotojo vardas:</label>
                    <div class="col-md-8">
                        <label class="col-lg-3 control-label">stud</label>
                    </div>
                </div>



            </form>
        </div>
    </div>
</div>