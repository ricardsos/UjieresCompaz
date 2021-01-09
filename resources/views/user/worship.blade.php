@extends('layouts.front_end')
@section('section')
Cultos
@endsection

@section('css_before')
<link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css') }}">
@endsection

@section('css_after')
@endsection

@section('content')

<div class="col-xl-12">
<div class="page-header-title">
    <h5 class="m-b-10">Horarios de culto</h5>
</div>
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
    <li class="breadcrumb-item"><a href="#!">Tables</a></li>
    <li class="breadcrumb-item"><a href="javascript:">Basic Tables</a></li>
</ul>

<!-- [ stiped-table ] start -->
    <div class="card">
        <div class="card-header">
            <h5>Cultos</h5>
            <a style="box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2);" href="#"
                   class="fa-pull-right label btn-primary text-white f-12 badge-pill" data-toggle="tooltip"
                   data-placement="top" title="Nuevo">
                    <span class="pcoded-micon"><i class="feather icon-plus"></i></span>
            </a>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-striped" id="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- [ stiped-table ] end -->
@endsection

@section('js_after')
<script src="{{ asset('assets/js/table.js') }}"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js') }}"></script>
@endsection