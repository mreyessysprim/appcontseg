@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>EDITAR / SOLICITUDES Y TAREAS</h2>
        </div>
        <div>
            <a href="{{route('tasksols.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    @if ($errors->any())     
    <div class="alert alert-danger mt-2">
        <strong>No olvides que para Editar SOLICITUD debes llenar todos los campos solicitados</strong> Algo fue mal..<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{route('tasksols.update', $tasksol)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
                    <strong>C.I.:</strong>
                    <input type="text" name="idsol" class="form-control" placeholder="VXXXXXXX" value="{{$tasksol->idsol}}" >
                </div>
            </div>
            
            <div class="form-group">
                    <strong>Relacion:</strong>
                    <select name="sol_benf" class="form-select" id="">
                        <!-- <option value="">-- Cambio de Estatus --</option> -->
                        <option value="El Mismo" @selected("El Mismo" == $tasksol->sol_benf)>El Mismo</option>
                        <option value="Familiar" @selected("Familiar" == $tasksol->sol_benf)>Familiar</option>
                        <option value="Tercero" @selected("Tercero" == $tasksol->sol_benf)>Tercero</option> 
                    </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
                    <strong>Beneficiario</strong>
                    <input type="text" name="nomb_benf" class="form-control" placeholder="Beneficiario" value="{{$tasksol->nomb_benef}}" >
                </div>
            </div>
          
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Resumen:</strong>
                    <textarea class="form-control" style="height:100px" name="concepto" placeholder="Resumen breve de Solicitud o Tarea...">{{$tasksol->concepto}}</textarea>
                </div>
            </div>
           
            

            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
                    <strong>Estatus Actual:</strong>
                    <select name="status_resp" class="form-select" id="">
                        <!-- <option value="">-- Cambio de Estatus --</option> -->
                        <option value="Pendiente" @selected("Pendiente" == $tasksol->status_resp)>Pendiente</option>
                        <option value="En Progreso" @selected("En Progreso" == $tasksol->status_resp)>En Progreso</option>
                        <option value="Completada" @selected("Completada" == $tasksol->status_resp)>Completada</option>
                       
                       
                    </select>
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Fecha Entrega:</strong>
                    <input type="date" name="due_date" class="form-control" value={{$tasksol->due_date}} id="">
                </div>
            </div>
           

            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
                    <strong>Asigna  Gabinete Resp:</strong>
                    <select name="Gabinete" class="form-select" id="Gabinete">
                        <!-- <option value="">-- Cambio de Estatus --</option> -->
                        <option value="gabSocial" @selected("gabSocial" == $tasksol->Gabinete)>Gab Social</option>
                        <option value="gabTierra"@selected("gabTierra" == $tasksol->Gabinete)>Gab de Tierras</option>
                        <option value="gabEcon"@selected("gabEcon" == $tasksol->Gabinete)>Gab Economico</option>
                        <option value="gabAdm"@selected("gabAdm" == $tasksol->Gabinete)>Gab Adminsitrativo</option>
                        <option value="gabSeg"@selected("gabSeg" == $tasksol->Gabinete)>Gab Seguridad</option>
                        <option value="gabOp"@selected("gabOp" == $tasksol->Gabinete)>Gab de Operaciones Especiales</option>
                        <option value="gabInfraServ"@selected("gabInfraServ" == $tasksol->Gabinete)>Gab de Infraestructura</option>
                     
                    </select>
                       
                   
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Ente o Direccion Resp del grupo: {{$tasksol->Gabinete}}</strong>
                    @switch($tasksol->Gabinete)
                        @case($tasksol->Gabinete == 'gabSocial')
                        <select name="Ente" class="form-select" id="Ente">
                        <option value="CMDNNAI" @selected("CMDNNAI" == $tasksol->gabSocial)>CMDNNAI</option>
                        <option value="CPNNAI"@selected("CPNNAI" == $tasksol->gabSocial)>CPNNAI</option>
                        <option value="FUNDNINO"@selected("FUNDNINO" == $tasksol->gabSocial)>FUNDNINO</option>
                        <option value="IMCA"@selected("IMCA" == $tasksol->gabSocial)>IMCA</option>
                        <option value="IMDERI"@selected("IMDERI" == $tasksol->gabSocial)>IMDERI</option>
                        <option value="IMDES"@selected("IMDES" == $tasksol->gabSocial)>IMDES</option>
                        <option value="IMMI"@selected("IMMI" == $tasksol->gabSocial)>IMMI</option>
                        <option value="IMJUVI" @selected("IMJUVI" == $tasksol->gabSocial)>IMJUVI</option>
                        <option value="IMAMB"@selected("IMAMB" == $tasksol->gabSocial)>IMAMB</option>
                        <option value="OACI" @selected("OACI" == $tasksol->gabSocial)>OACI</option>
                        <option value="SAGUA" @selected("SAGUA" == $tasksol->gabSocial)>SAGUA</option>
                        <option value="DIRSERCOM" @selected("DIRSERCOM" == $tasksol->gabSocial)>DIRSERCOM</option>
                        </select>
                        @break

                        @case($tasksol->Gabinete == 'gabTierra')
                        <select name="Ente" class="form-select" id="Ente">
                        <option value="CATASTRO" @selected("CATASTRO" == $tasksol->gabTierra)>CATASTRO</option>
                        <option value="DPCU"@selected("DPCU" == $tasksol->gabTierra)>DPCU</option>
                        <option value="DTEP"@selected("DTEP" == $tasksol->gabTierra)>DTEP</option>
                        <option value="OTSTU"@selected("OTSTU" == $tasksol->gabTierra)>OTSTU</option>
                       
                        </select>
                        @break


                    @endswitch
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
                    <strong>Seguimiento:</strong>
                    <select name="status_gestion" class="form-select" id="">
                   
                        <option value="PorAsignar"@selected("PorAsignar" == $tasksol->status_gestion)>Por Asignar</option>
                        <option value="Asignado"@selected("Asignado" == $tasksol->status_gestion)>Asignado</option>
                        <option value="EsperaRecurso"@selected("EsperaRecurso" == $tasksol->status_gestion)>Espera Recurso</option>
                        <option value="PuntoCuenta"@selected("PuntoCuenta" == $tasksol->status_gestion)>Punto de Cuenta</option>
                        <option value="Entregado"@selected("Entregado" == $tasksol->status_gestion)>Entregado</option>
                        <option value="Verificado"@selected("Verificado" == $tasksol->status_gestion)>Verificado</option>
                       
                    </select>   
                    </select>
                       
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">ACTUALIZAR DATA</button>
            </div>

        </div>
    </form>
</div>
@endsection