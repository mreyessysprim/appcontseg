<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Solicitudes (CLASIFICACION DE solicitud)') }}
        </h2>
       

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("ASIGNACION DE DIR O ENTE RESPONSABLE") }}

        <form action="{{route('storecys')}}" method="POST">
        @csrf

       
       
            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">

               
                     <select name="clasfop" class="form-select" id="clasfop">
                       
                     
                        <option value="">--DIRECCION O ENTE --</option>
                        @foreach($optiongab as $optgab)
                        <option value="{{$optgab['id']}}" >{{$optgab['name']}}</option>
                        @endforeach
                       
                       
                        
                       
                     </select>
   
             
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">SIGUIENTE1</button>
            </div>
   
        </form>
    </div>
         
</x-app-layout>