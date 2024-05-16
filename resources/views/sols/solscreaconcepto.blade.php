<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Solicitudes (CONCEPTO DE LA SOLICITUD vista SOLS.SOLSCREACONCEPTO)') }}
        </h2>
       

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("CONCEPTO DE LA SOLICITUD Vista sols.SOLSCREACONCEPTO") }}

        <form action="{{route('storeconcepto')}}" method="POST">
        @csrf



       

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">

                
                    <strong>Resumen de la solicitud:</strong>
                    <textarea class="form-control" style="height:100px" name="concepto" placeholder="Resumen breve de Solicitud o Tarea..."></textarea>
                </div>      
               
            </div>

            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
               
                    <strong>Estatus Responsable:</strong>
                    <select name="status_resp" class="form-select" id="">
                        <option value="">-- Elige Status --</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="En Progreso">En Progreso</option>
                        <option value="Completada">Completada</option>
                       
                       
                    </select>

                    <strong>Fecha de la Carta:</strong>
                    <input type="date" name="crea_date" class="form-control" id="">
                </div>
            </div>
            
            
            
    
        
        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">SIGUIENTE</button>
            </div>
   
        </form>
    </div>
         
</x-app-layout>