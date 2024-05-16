<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Solicitudes CLASIFICACION DE SOLICITUDES vista SOLS.solscreaclass")}}
        </h2>
       

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("SELECCION DE CLASIFICACION SEGUN RUBRO") }}

        <form action="{{route('storeclasf')}}" method="POST">
        @csrf

            

            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
               
                    <strong> Clasificacion de la Solicitud:</strong>
                    <select name="clase_task" class="form-select" id="clase_task">
                        <option value="">-- CLasificacion --</option>

                        <option value="Infraestructura">Infraestrectura</option>
                        <option value="Social">Social</option>
                        <option value="Economico">Economico</option>
                        <option value="Productivo">Productivo</option>
                        <option value="Educativo">Educativo</option>
                        <option value="Politico">Politico</option>
                        <option value="Salud">Salud</option>
                        <option value="Servicio">Servicio</option>
                        
                    </select>

                   
                </div>
            </div>
            
            
            
    
        
        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">SIGUIENTE</button>
            </div>
   
        </form>
    </div>
         
</x-app-layout>