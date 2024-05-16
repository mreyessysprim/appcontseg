

@extends('layouts.base')


@section('content')
    <div class="row">   
            <div class="col-12">
                <div>
                    <h2> resultado de la busqueda</h2>
                </div>
                <div>
                <a href="{{route('tasksols.index')}}" class="btn btn-primary">Volver</a>
                </div>
             </div>
    </div>  

   


    <div class="row">
        <div class="col-12 mt-4">
            <table class="table table-bordered text-white">
                <tr class="text-secondary">
               
                <th>Id. Sol/</th>
                <th>Nombre</th>
                <th>Relacion</th>
                <th>Benef</th>
                <th>Ente</th>
                <th>Clase/Tipo</th>
                <th>Concepto</th>
                <th>Seguimiento</th>  
                <th>Accion</th>  
                </tr>
               
                @foreach ($tasksols as $tasksol)

                    <tr>
                        <td class="fw-bold">{{$tasksol->idsol}}</td>
                        <td>{{$tasksol->nomb_sol}}</td>
                       
                        <td>{{$tasksol->sol_benf}}</td>
                        <td>{{$tasksol->nomb_benf}}</td>
                        <td>{{$tasksol->Ente}}</td>
                        <td>
                        
                        @switch($tasksol->clase_task)
                                    @case($tasksol->clase_task=='Salud')
                                        @switch($tasksol->salud_task)
                                             
                                            @case($tasksol->salud_task=='Consultas')
                        
                                                <span class="badge bg-success fs-6">{{$tasksol->salud_task}} / {{$tasksol->clase_task}}</span> 
                                             @break

                                            @case($tasksol->salud_task=='Medicinas')
                                              
                                                <span class="badge bg-success fs-6">{{$tasksol->salud_task}}/{{$tasksol->clase_task}}</span> 
                                            @break

                                            @case($tasksol->salud_task=='AyudasTecnicas')
                                                       
                                                <span class="badge bg-success fs-6">{{$tasksol->salud_task}}/{{$tasksol->clase_task}}</span> 
                                            @break

                                            @case($tasksol->salud_task=='Insumos')
                                                 <span class="badge bg-success fs-6">{{$tasksol->salud_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->salud_task=='Estudios')
                                                <span class="badge bg-success fs-6">{{$tasksol->salud_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->salud_task=='InterQuirurgica')
                                                <span class="badge bg-success fs-6">{{$tasksol->salud_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @default
                                                <span class="badge bg-success fs-6">{{$tasksol->salud_task}}/{{$tasksol->clase_task}}</span> 
                                        @endswitch
                                    @break
 
                                    @case($tasksol->clase_task=='Infraestructura')
                                        @switch($tasksol->infra_task)
                                        
                                             @case($tasksol->infra_task=='Construccion')
                                                 <span class="badge bg-success fs-6">{{$tasksol->infra_task}}/{{$tasksol->clase_task}}</span> 
                                             @break

                                             @case($tasksol->infra_task=='Electrificacion')
                                             <span class="badge bg-success fs-6">{{$tasksol->infra_task}}/{{$tasksol->clase_task}}</span> 
                                             @break

                                             @case($tasksol->infra_task=='Demarcacion')
                                             <span class="badge bg-success fs-6">{{$tasksol->infra_task}}/{{$tasksol->clase_task}}</span> 

                                             @case($tasksol->infra_task=='Vialidad')
                                             <span class="badge bg-success fs-6">{{$tasksol->infra_task}}/{{$tasksol->clase_task}}</span> 
                                             @break
                                             @case($tasksol->infra_task=='Rehabilitacion')
                                             <span class="badge bg-success fs-6">{{$tasksol->infra_task}}/{{$tasksol->clase_task}}</span> 
                                             @break
                                             @case($tasksol->infra_task=='Semaforos')
                                             <span class="badge bg-success fs-6">{{$tasksol->infra_task}}/{{$tasksol->clase_task}}</span> 
                                             @break
                                             @default
                                             <span class="badge bg-success fs-6">{{$tasksol->infra_task}}/{{$tasksol->clase_task}}</span> 
                                        @endswitch
                                    @break

                                    @case($tasksol->clase_task == 'Economico')
                                        @switch($tasksol->economico_task)
                                        @case($tasksol->economico_task =='AyudaEco200')
                                           
                                            <span class="badge bg-success fs-6">{{$tasksol->economico_task}}{{$tasksol->clase_task}}</span> 
                                        @break

                                        @case($tasksol->economico_task =='AyudaEco200500')
                                        <span class="badge bg-success fs-6">{{$tasksol->economico_task}}/{{$tasksol->clase_task}}</span> 
                                        @break

                                        @case($tasksol->economico_task =='AyudaEco500')
                                        <span class="badge bg-success fs-6">{{$tasksol->economico_task}}/{{$tasksol->clase_task}}</span> 
                                        @break

                                        @case($tasksol->economico_task =='CredEmpre')
                                        <span class="badge bg-success fs-6">{{$tasksol->economico_task}}/{{$tasksol->clase_task}}</span> 
                                        @case($tasksol->economico_task =='CredProd')
                                        <span class="badge bg-success fs-6">{{$tasksol->economico_task}}/{{$tasksol->clase_task}}</span> 
                                        @case($tasksol->economico_task =='FiscalComer')
                                        <span class="badge bg-success fs-6">{{$tasksol->economico_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->economico_task =='FiscalEcoPopular')
                                        <span class="badge bg-success fs-6">{{$tasksol->economico_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @default
                                        <span class="badge bg-success fs-6">{{$tasksol->economico_task}}/{{$tasksol->clase_task}}</span> 
                                        @endswitch
                                    @break

                                    @case($tasksol->clase_task == 'Social')
                                        @switch($tasksol->social_task)

                                            @case($tasksol->social_task=='Lblanca')
                                          
                                             <span class="badge bg-success fs-6">{{$tasksol->social_task}}/{{$tasksol->clase_task}}</span> 
                                            @break

                                            @case($tasksol->social_task=='Lmarron')
                                            <span class="badge bg-success fs-6">{{$tasksol->social_task}}/{{$tasksol->clase_task}}</span> 
                                            @break

                                            @case($tasksol->social_task =='Enseres')
                                            <span class="badge bg-success fs-6">{{$tasksol->social_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->social_task =='Limpieza')
                                            <span class="badge bg-success fs-6">{{$tasksol->social_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->social_task =='Alimentos')
                                            <span class="badge bg-success fs-6">{{$tasksol->social_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->social_task =='RepVehiculo')
                                             <span class="badge bg-success fs-6">{{$tasksol->social_task}}/{{$tasksol->clase_task}}</span> 
                                            @break

                                             @case($tasksol->social_task =='RepMoto')
                                            <span class="badge bg-success fs-6">{{$tasksol->social_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->social_task =='Semovientes')
                                            <span class="badge bg-success fs-6">{{$tasksol->social_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->social_task =='MaterialAgro')
                                            <span class="badge bg-success fs-6">{{$tasksol->social_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @default
                                            <span class="badge bg-success fs-6">{{$tasksol->social_task}}/{{$tasksol->clase_task}}</span> 
                                        @endswitch
                                    @break

                                    @case($tasksol->clase_task == 'Servicio')
                                        @switch($tasksol->servi_task)
                                    
                                        @case($tasksol->servi_task=='AbordInst')
                                           
                                            <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break

                                        @case($tasksol->servi_task=='ArtInst')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break

                                        @case($tasksol->servi_task=='Transp')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->servi_task=='Permisos')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->servi_task=='carnet')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->servi_task=='multas')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break

                                        @case($tasksol->servi_task=='ServEsp')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->servi_task=='Embellecimiento')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->servi_task=='HechoCom')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->servi_task=='RecoChat')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->servi_task=='RecoVeg')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->servi_task=='RecoDes')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->servi_task=='RecoMatRec')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->servi_task=='MantInfra')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @case($tasksol->servi_task=='TiTierra')
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
                                        @default
                                        <span class="badge bg-success fs-6">{{$tasksol->servi_task}}/{{$tasksol->clase_task}}</span> 
                                        @endswitch
                                    @break

                                    @case($tasksol->clase_task == 'Productivo')
                                        @switch($tasksol->prod_task)
                                     
                                            @case($tasksol->prod_task=='Lacteos')
                                           
                                            <span class="badge bg-success fs-6">{{$tasksol->prod_task}}/{{$tasksol->clase_task}}</span> 
                                            @break

                                            @case($tasksol->prod_task=='PlanMejorRebano')
                                            <span class="badge bg-success fs-6">{{$tasksol->prod_task}}/{{$tasksol->clase_task}}</span> 
                                            @break

                                            @case($tasksol->prod_task=='PlanInseminacion')
                                            <span class="badge bg-success fs-6">{{$tasksol->prod_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->prod_task=='ProgSanitario')
                                            <span class="badge bg-success fs-6">{{$tasksol->prod_task}}/{{$tasksol->clase_task}}</span> 
                                            @case($tasksol->prod_task=='FormaCapa')
                                            <span class="badge bg-success fs-6">{{$tasksol->prod_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->prod_task=='VisitaTecnica')
                                            <span class="badge bg-success fs-6">{{$tasksol->prod_task}}/{{$tasksol->clase_task}}</span> 
                                            @break

                                            @case($tasksol->prod_task=='ArrimeProd')
                                            <span class="badge bg-success fs-6">{{$tasksol->prod_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->prod_task=='BodMov')
                                            <span class="badge bg-success fs-6">{{$tasksol->prod_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->prod_task=='matprimatex')
                                            <span class="badge bg-success fs-6">{{$tasksol->prod_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                            @case($tasksol->prod_task=='matprimapan')
                                            <span class="badge bg-success fs-6">{{$tasksol->prod_task}}/{{$tasksol->clase_task}}</span> 
                                            @break
                                   
                                            @default
                                            <span class="badge bg-success fs-6">{{$tasksol->prod_task}}/{{$tasksol->clase_task}}</span> 
                                        @endswitch
                                    @break

                                    @case($tasksol->clase_task == 'Educativo')
                                     @switch($tasksol->edu_task)
                                     
                                        @case($tasksol->edu-task=='Taller')
                                       
                                        <span class="badge bg-success fs-6">{{$tasksol->edu_task}}/{{$tasksol->clase_task}}</span> 
                                        @break

                                        @case($tasksol->edu-task=='convUni')
                                        <span class="badge bg-success fs-6">{{$tasksol->edu_task}}/{{$tasksol->clase_task}}</span> 
                                        @break
 
                                        @default

                                        <span class="badge bg-success fs-6">{{$tasksol->edu_task}}/{{$tasksol->clase_task}}</span> 
                                     @endswitch
                                    @break
 
                                
                                    @case($tasksol->clase_task == 'Politico')
                                     @switch($tasksol->poli_task)
                                    
                                        @case($tasksol->poli_task=='ArtUBCH')
                                    
                                        <span class="badge bg-success fs-6">{{$tasksol->poli_task}}/{{$tasksol->clase_task}}</span> 
                                        @break

                                        @default
                                        <span class="badge bg-success fs-6">{{$tasksol->poli_task}}/{{$tasksol->clase_task}}</span> 
                                     @endswitch
                                    @break
                        @endswitch
                        </td>

                         <td>{{$tasksol->concepto}}</td>

                        <td> 
                            @switch($tasksol->status_gestion)

                       
                            @case($tasksol->status_gestion=='PorAsignar')
                                <span class="badge bg-light fs-6">{{$tasksol->status_gestion}}</span>
                            @break
 
                            @case($tasksol->status_gestion=='Asignado')
                                <span class="badge bg-primary fs-6">{{$tasksol->status_gestion}}</span>
                            @break

                            @case($tasksol->status_gestion=='EsperaRecurso')
                                <span class="badge bg-warning fs-6">{{$tasksol->status_gestion}}</span>
                            @break
                            @case($tasksol->status_gestion=='PuntoCuenta')
                                <span class="badge bg-info fs-6">{{$tasksol->status_gestion}}</span>
                            @break
                            @case($tasksol->status_gestion=='Entregado')
                                <span class="badge bg-danger fs-6">{{$tasksol->status_gestion}}</span>
                            @break

 
                            @default
                            <span class="badge bg-success fs-6">{{$tasksol->status_gestion}}</span>
                            @endswitch          
                        </td>
                        
                        <td>
                            <a href="{{route('tasksols.edit',$tasksol)}}" class="btn btn-warning">Ver/Edit</a>
                             
                            <form action="{{route('tasksols.destroy',$tasksol)}}" method="POST" class="d-inline">
                                @csrf
                                 @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
                   
            
            
            </table>
           

        </div>
    </div>


  
@endsection