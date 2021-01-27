@extends('layouts.front_end')
@section('section')
Cultos
@endsection

@section('css_before')
<!-- 
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.23/css/dataTables.semanticui.min.css') }}">
 -->
@endsection

@section('css_after')

@endsection

@section('content')

<div class="col-xl-12 col-md-6">
<div class="page-header-title">
    <h5 class="m-b-10">Cultos</h5>
</div>
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
    <li class="breadcrumb-item"><a href="#!">Tables</a></li>
    <li class="breadcrumb-item"><a href="javascript:">Basic Tables</a></li>
</ul>


<!--[ Recent Users ] start-->
    <div class="card Recent-Users">
        <div class="card-header">
            <h5>Recent Users</h5> 
        </div>
            <div class="card-block px-3 py-3">
            
                <div class="table-responsive">
        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dia</th>
                    <th>Hora de inicio</th>
                    <th>Hora de finalización</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
                <tbody>
                @forelse($worships as $worship)
                    <tr>
                        <td>
                            <h6 class="m-0"><span class="pcoded-micon"><i class="feather icon-calendar f-20 text-c-blue" style="padding:5px;" ></i></span>{{ $worship->nombre }}</h6>
                        </td>
                        <td>
                            <h6 class="m-0">{{ $worship->nombre }}</h6>
                        </td>
                        <td>
                            <h6 class="m-0">{{ $worship->day_id }}</h6>
                        </td>
                        <td>
                            <h6 class="m-0">2:37 PM</h6>
                        </td>
                        <td class="text-center">
                        <a href="#" class="label btn-info text-white f-12" data-toggle="tooltip"
                                       data-placement="top" title="Editar">
                                        <span class="pcoded-micon"><i class="feather icon-edit-2"></i></span>
                                        <!--<span class="pcoded-mtext">Editar</span>-->
                        </a>

                        <a href="#" class="label btn-danger text-white f-12" data-toggle="tooltip"
                                       data-placement="top" title="Eliminar">
                                        <span class="pcoded-micon"><i class="feather icon-trash-2"></i></span>
                                        <!--<span class="pcoded-mtext">Eliminar</span>-->
                        </a>
                                                
                        </td>
                    </tr>
                @empty
                    </tr>
                        <h5>No hay cultos registrados</h5>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        
                    
                </div>
            
    </div>
</div>
<!--[ Recent Users ] end-->

@endsection

@section('js_after')
<script src="{{ asset('assets/js/table.js') }}"></script>
<!-- 
    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.10.23/js/dataTables.semanticui.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js') }}"></script>
 -->
@endsection