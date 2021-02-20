@extends('layouts.security')
@section('section')
Formulario 
@endsection

@section('css_before')

@endsection

@section('css_after')

@endsection

@section('content')
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="auth-bg">
            <span class="r"></span>
            <span class="r s"></span>
            <span class="r s"></span>
            <span class="r"></span>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <div class="mb-4">
                    <i class="feather icon-user-plus auth-icon"></i>
                </div>
                <h3 class="mb-4"> <b>Ministerio Internacional Iglesia Compaz</b></h3></br>
                <h3 class="mb-4">SOLICITUD DE INGRESO AL MINISTERIO DE UJIERES</h3>
                    <form>
                        <div class="form-group text-left">
                            <label><b>Nombre completo</b></label>
                            <input type="text" class="form-control" name="nombreCompleto" placeholder="Ej: Juan Roberto Quito Mercedez">
                        </div>

                        <div class="row ">
                            <div class="col-md-6">
                                
                                    <div class="form-group text-left">
                                        <label><b>Edad</b></label>
                                        <input type="number" class="form-control" name="edad" placeholder="Ej: 26">
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group text-left">
                                        <label><b>Ocupación</b></label>
                                        <input type="text" class="form-control" name="ocupacion" placeholder="Ej: Abogado">
                                    </div>
                            </div>
                        </div>

                        <div class="form-group text-left">
                            <label><b>Estado civil:</b></label>
                            <select class="form-control" name="estadoCivil" id="estadoCivil">
                                <option>Solter@</option>
                                <option>Casad@</option>
                                <option>Divorciad@</option>
                                <option>Viud@</option>
                            </select>
                        </div>

                        <div class="form-group text-left conyugue">
                            <label><b>Nombre del cónyuge</b></label>
                            <input type="text" class="form-control" name="nombreConyugue" id="nombreConyugue" placeholder="Ej: Marta Gabriela Navas Ponce">
                        </div>

                        <div class="form-group text-left">
                            <label><b>Correo electrónico</b></label>
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="Ej: Marta Gabriela Navas Ponce">
                        </div>
                        <div class="form-group text-left">
                            <label><b>Dirección</b></label>
                            <textarea class="form-control" name="direccion" id="direccion" rows="3"></textarea>
                        </div>
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="form-group text-left">
                                    <label><b>Tel. casa</b></label>
                                    <input type="number" class="form-control" name="telCasa" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group text-left">
                                    <label><b>Tel. oficina</b></label>
                                    <input type="number" class="form-control" name="telOficina" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group text-left">
                                    <label><b>Tel. celular</b></label>
                                    <input type="number" class="form-control" name="telCelular" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label><b>Whatsapp</b></label>
                                    <input type="number" class="form-control" name="whatsapp" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label><b>Facebook</b></label>
                                    <input type="text" class="form-control" name="facebook" placeholder="">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label><b>Twitter</b></label>
                                    <input type="number" class="form-control" name="twitter" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label><b>Instagram</b></label>
                                    <input type="number" class="form-control" name="instagram" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-left">
                            <label><b>¿Ha aceptado a Cristo Jesús en su corazón?</b></label>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cristoSi" name="cristoSi" class="custom-control-input cristoSi" valor="si">
                                <label class="custom-control-label" for="cristoSi">Si</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cristoNo" name="cristoSi" class="custom-control-input cristoNo" valor="no" >
                                <label class="custom-control-label" for="cristoNo">No</label>
                            </div>
                        </div>

                        <div class="form-group text-left haceCuantoTiempo" id="haceTiempo">
                            <label><b>Hace cuanto tiempo</b></label>
                            <input type="text" class="form-control" name="haceCuantoTiempo" id="haceCuantoTiempo" placeholder="Ej: 1 año, 5 meses">
                        </div>

                        <div class="form-group text-left">
                            <label><b>¿Es bautizado en agua?</b></label>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="bautizadoSi" name="bautizadoSi" class="custom-control-input bautizadoSi" valor="si">
                                <label class="custom-control-label" for="bautizadoSi">Si</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="bautizadoNo" name="bautizadoSi" class="custom-control-input" valor="no">
                                <label class="custom-control-label" for="bautizadoNo">No</label>
                            </div>
                        </div>

                        <div class="form-group text-left haceCuantoTiempoBautizo">
                            <label><b>Hace cuanto tiempo fue</b></label>
                            <input type="text" class="form-control" name="haceCuantoTiempoBautizo" placeholder="Ej: 1 año, 5 meses">
                        </div>

                        <div class="form-group text-left">
                            <label><b>¿Cuánto tiempo tiene de congregarse en Iglesia Compaz?</b></label>
                            <input type="text" class="form-control" name="cuantoTiempoCongregarse" placeholder="Ej: 1 año, 5 meses">
                        </div>

                        <div class="form-group text-left">
                            <label><b>Ha llenado la hoja de membresía de la Iglesia</b></label>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="membresiaSi" name="membresiaSi" class="custom-control-input">
                                <label class="custom-control-label" for="membresiaSi">Si</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="membresiaNo" name="membresiaSi" class="custom-control-input">
                                <label class="custom-control-label" for="membresiaNo">No</label>
                            </div>
                        </div>

                        <div class="form-group text-left">
                            <label><b>Antes de asistir a Compaz donde se congregaba</b></label>
                            <input type="text" class="form-control" name="antesCongregarse" placeholder="">
                        </div>

                        <div class="form-group text-left">
                            <label><b>Sirve usted en otro ministerio de Iglesia Compaz</b></label>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="ministerioSi" name="ministerioSi" class="custom-control-input" valor="si">
                                <label class="custom-control-label" for="ministerioSi">Si</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="ministerioNo" name="ministerioSi" class="custom-control-input" valor="no">
                                <label class="custom-control-label" for="ministerioNo">No</label>
                            </div>
                        </div>

                        <div class="form-group text-left cualMinisterio" >
                            <label><b>¿Cuál?</b></label>
                            <input type="text" class="form-control" name="cualMinisterio" placeholder="Ej: 1 año, 5 meses">
                        </div>

                        <div class="form-group text-left diaOtroMinisterio">
                            <label><b>Que día sirve en el otro ministerios</b></label>
                            <br>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="otroMinisterioSi">
                                <label class="custom-control-label" for="otroMinisterioSi">Check this custom checkbox</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="otroMinisterioNo">
                                <label class="custom-control-label" for="otroMinisterioNo">Check this custom checkbox</label>
                            </div>
                        </div>

                        <div class="form-group text-left">
                            <label><b>Seleccione el horario que usted considera que podrá servirle a Dios</b></label>
                            <br>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="horarioSi">
                                <label class="custom-control-label" for="horarioSi">Check this custom checkbox</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="horarioNo">
                                <label class="custom-control-label" for="horarioNo">Check this custom checkbox</label>
                            </div>
                        </div>

                        <div class="form-group text-left">
                            <label><b>Ha recibido el bautísmo del espíritu santo</b></label>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="espirituSi" name="espirituSi" class="custom-control-input">
                                <label class="custom-control-label" for="espirituSi">Si</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="espirituNo" name="espirituSi" class="custom-control-input">
                                <label class="custom-control-label" for="espirituNo">No</label>
                            </div>
                        </div>

                        <div class="form-group text-left">
                            <label><b>Qué fue lo que lo motivo a usted servir como Ujier</b></label>
                            <textarea class="form-control" name="direccion" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-group text-left">
                            <label><b>Asiste usted a una Celupaz</b></label>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="celulaSi" name="celulaSi" class="custom-control-input" valor="si">
                                <label class="custom-control-label" for="celulaSi">Si</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="celulaNo" name="celulaSi" class="custom-control-input" valor="no">
                                <label class="custom-control-label" for="celulaNo">No</label>
                            </div>
                        </div>
                        <div class="form-group text-left cualCelula">
                            <label><b>¿Cuál?</b></label>
                            <input type="text" class="form-control" name="cualCelupaz" placeholder="">
                        </div>
                        <div class="form-group text-left nombreLider">
                            <label><b>Nombre del lider:</b></label>
                            <input type="text" class="form-control" name="nombreLider" placeholder="">
                        </div>
                        <div class="form-group text-left nombreAnfitrion">
                            <label><b>Nombre del anfitrión:</b></label>
                            <input type="text" class="form-control" name="nombreAnfitrion" placeholder="">
                        </div>
                        <div class="form-group text-left">
                            <label><b>¿Quién le habló de este ministerio?</b></label>
                            <input type="text" class="form-control" name="nombreAnfitrion" placeholder="">
                        </div>
                        <div class="form-group text-left">
                            <label><b>Persona que pueda dar referencia de usted:</b></label>
                            <input type="text" class="form-control" name="nombreAnfitrion" placeholder="">
                        </div>
                        
                        <div class="form-group text-left">
                            <label><b>Añadir foto</b></label>
                            <br>
                            <input type="file"  name="nombreAnfitrion" accept="image/png, image/jpeg">
                        </div>

                        <div class="form-group text-left">
                            <label><b>Añadir imagen de DUI</b></label>
                            <br>
                            <input type="file"  name="nombreAnfitrion" accept="image/png, image/jpeg">
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4">Sign up</button>
                        
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_after')
<script src="{{ asset('assets/js/form.js') }}"></script>
@endsection