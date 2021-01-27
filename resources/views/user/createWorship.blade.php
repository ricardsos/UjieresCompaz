@extends('layouts.front_end')
@section('section')
Crear horario
@endsection

@section('css_before')
@endsection

@section('css_after')

<link rel="stylesheet" href="{{ asset('assets/css/tpicker.css') }}">
@endsection

@section('content')

<div class="col-xl-12 col-md-6">
<div class="page-header-title">
    <h5 class="m-b-10">Cultos</h5>
</div>
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route ('showWorships')}}"><i class="feather icon-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{route ('showWorships')}}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:">Crear</a></li>
</ul>


<!--[ Recent Users ] start-->
    <div class="card Recent-Users">
        <div class="card-header">
            <h5>Crear horario de culto </h5> 
        </div>
        <div class="card-body">             
            <div class="row">
                <div class="col-md-6">
                    <form id="formulario" method="POST" action="{{ route('storeWorships') }}">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Nombre</b></label>
                            <input type="text" class="form-control" name="nombre"  placeholder="Ej: Primer culto">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"><b>Día</b></label>
                            <select class="form-control" name="dia">
                                @forelse($days as $day)
                                    <option value="{{ $day->id }}"> {{ $day->name }}</option>
                                @empty
                                    <option>No hay datos</option>
                                @endforelse 
                            </select>
                        </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                            <label><b>Hora de inicio</b></label>
                            <input type="time" class="form-control" name="horaInicio" placeholder="Text">
                        </div>
                        <div class="form-group">
                            <label><b>Hora de finalización</b></label>
                            <input type="time" class="form-control" name="horaFin" placeholder="Text">
                        </div>                        
                    </form>
                </div>
            </div>
        </div>    
        <div class="card-footer">
            <button form="formulario" type="submit" class="btn btn-primary">Guardar</button> 
        </div> 
    </div>     
</div>
<!--[ Recent Users ] end-->
@endsection

@section('js_after')


@endsection