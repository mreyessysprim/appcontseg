<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Solicitudes CONTROL Y SEGUIMEINTO vista SOLS.solscreaestatuscys")}}
        </h2>
       

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("SELECCION ESTATUS CONTROL Y SEGUIMEINTO") }}

        <form action="{{route('storecys')}}" method="POST">
        @csrf

            

            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
               
                    <strong> Clasificacion de la Solicitud:</strong>
                    <select name="status_gestion" class="form-select" id="">
                        <option value="">-- Elige ESTATUS CyS --</option>
                        <option value="PorAsignar">Por Asignar</option>
                        <option value="Asignado">Asignado</option>
                        <option value="EsperaRecurso">Espera Recurso</option>
                        <option value="PuntoCuenta">Punto de Cuenta</option>
                        <option value="Entregado">Entregado</option>
                        <option value="Verificado">Validado</option>
                       
                    </select>   

                   
                </div>
            </div>
            
            
            
    
        
        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">SIGUIENTE</button>
            </div>
   
        </form>
    </div>
         
</x-app-layout>