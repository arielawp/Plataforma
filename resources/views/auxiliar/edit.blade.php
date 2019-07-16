@extends('layouts.admin')

@section('content')
<div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <form action="{{ route('auxiliar.update', $auxi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="container">
                    <div class="form-group row">
                        <label for="nombre" class="col-3 col-form-label">Nombre</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nombre" name="nombre" value={{ $text->nombre }} placeholder="inserta la visión" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="nombre" class="col-3 col-form-label">actividad</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nombre" name="actiividad" value={{ $text->actividad }} placeholder="inserta los valores" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nombre" class="col-3 col-form-label">Hora de inicio</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nombre" name="inicio" value={{ $text->inicio }} placeholder="inserta los valores" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nombre" class="col-3 col-form-label">fin</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nombre" name="fin" value={{ $text->fin }} placeholder="inserta los valores" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nombre" class="col-3 col-form-label">tiempo</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nombre" name="tiempo" value={{ $text->tiempo }} placeholder="inserta los valores" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nombre" class="col-3 col-form-label">fecha</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nombre" name="fecha" value={{ $text->fecha }} placeholder="inserta los valores" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nombre" class="col-3 col-form-label">terminado</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nombre" name="terminado" value={{ $text->terminado }} placeholder="inserta los valores" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nombre" class="col-3 col-form-label">fecha</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nombre" name="comentarios" value={{ $text->comentarios }} placeholder="inserta los valores" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                            <button name="submit" type="submit" class="btn btn-primary">Guardar</button>
                            <a class="btn btn-success float-right" href="{{ route('auxiliar.index') }}">Cancelar</a>
                    </div>
                </form>
            </div>  {{--del col-6--}}
         
                    </div>
                    
        </div>  {{--del row--}}
    </div>

@endsection