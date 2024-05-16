@extends('layouts.base')

@section('content')


    <div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Lista GENERAL de Solicitudes </h2>
        </div>
      
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong> {{Session::get('success')}} <br>
             
        </div>
    @endif

    
   

    <form action="{{route('buscar')}}"class="row g-3" method="POST">
        @csrf
  
         <div class="col-auto">
    
        <input type="text" class="form-control" name="idsol" id="idsol" placeholder="Identificacion VXXXXXXX...">
     

        </div>
        <div class="col-auto">
   
             <button type="submit" class="btn btn-primary mb-3" role="button">Buscar</a>  
        </div>
    </form>
               
         

    <div class="row">
        <div class="col-12 mt-4">
            <table class="table table-bordered text-white">
                <tr class="text-secondary">
               
                <th>Id. Solicitante</th>
                <th>Nombre</th>
                <th>Relacion Sol</th>
                <th>Categoria</th>

                <th>Clase</th>
                
                
                <th>Ente/Estatus</th>

                <th>Seguimiento</th>

                <th>Acción</th>
                </tr>
            
               @foreach($tasksols as $tasksol)
                    <tr>
                        <td class="fw-bold">{{$tasksol->idsol}}</td>
                        <td>{{$tasksol->nomb_sol}}</td>
                        <td>{{$tasksol->sol_benf}}</td>
                        <td>
                            @switch($tasksol->catg_task)
                                @case($tasksol->catg_task=='Priorizado')
                                    <span class="badge bg-danger fs-6">{{$tasksol->catg_task}}</span> 

                                @break
 
                                @case($tasksol->catg_task=='Normal')
                                    <span class="badge bg-warning fs-6">{{$tasksol->catg_task}}</span> 
                                @break
 
                                @default
                                <span class="badge bg-info fs-6">{{$tasksol->catg_task}}</span> 
                            @endswitch
                        </td>

                        <td>
                                @switch($tasksol->clase_task)
                                    @case($tasksol->clase_task=='Salud')
                                    <span class="badge bg-success fs-6">{{$tasksol->clase_task}}</span> 
                                     @break
 
                                     @case($tasksol->clase_task=='Infraestructura')
                                    <span class="badge bg-warning fs-6">{{$tasksol->clase_task}}</span> 
                                     @break

                                     @case($tasksol->clase_task == 'Economico')
                                    <span class="badge bg-primary fs-6">{{$tasksol->clase_task}}</span> 
                                     @break

                                     @case($tasksol->clase_task == 'Social')
                                    <span class="badge bg-info fs-6">{{$tasksol->clase_task}}</span> 
                                     @break

                                     @case($tasksol->clase_task == 'Servicio')
                                    <span class="badge bg-secundary fs-6">{{$tasksol->clase_task}}</span> 
                                     @break

                                     @case($tasksol->clase_task == 'Productivo')
                                    <span class="badge bg-ligh fs-6">{{$tasksol->clase_task}}</span> 
                                     @break

                                     @case($tasksol->clase_task == 'Educativo')
                                    <span class="badge bg-warning fs-6">{{$tasksol->clase_task}}</span> 
                                     @break
 
                                    @default
                                    @case($tasksol->clase_task == 'Politico')
                                    <span class="badge bg-danger fs-6">{{$tasksol->clase_task}}</span> 
                                     @break
                                @endswitch
                        
                        
                        </td>
                        <td> 

                            @switch($tasksol->status_resp)
                                @case($tasksol->status_resp=='Pendiente')
                                <span class="badge bg-warning fs-6">{{$tasksol->Ente}}</span> 
                           
                                <span class="badge bg-warning fs-6">{{$tasksol->status_resp}}</span> 
                                @break
 
                                @case($tasksol->status_resp=='En Progreso')
                                <span class="badge bg-primary fs-6">{{$tasksol->Ente}}</span> 
                           
                                <span class="badge bg-primary fs-6">{{$tasksol->status_resp}}</span> 
                                @break
 
                                @default
                                <span class="badge bg-success fs-6">{{$tasksol->Ente}}</span> 
                           
                                <span class="badge bg-success fs-6">{{$tasksol->status_resp}}</span> 
                            @endswitch
    
                        </td>

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
            {{$tasksols->links()}}

        </div>

        <div>
            <a href="{{route('tasksols.create')}}" class="btn btn-primary">Crear NUEVA Solicitud</a>
        </div>
    </div>
@endsection