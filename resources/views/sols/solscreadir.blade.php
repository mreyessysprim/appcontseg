<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Solicitudes (PARROQUIA Y DIRECCION) vista SOLS.SOLSCREADIR') }}
        </h2>
       

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Formulario de Solicitudes - Parroquia y Direccion") }}

    <form action="{{route('storesoldir')}}" method="POST">
        @csrf
        <!-- <div class="col-12">
                <div>
                 <h2>Direccion Solicitante/Beneficiario</h2>
                </div>
      
            </div> -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Parroquia</strong>
                    <select name="parroquia" class="form-select" id="">
                        <option value="">-Elige Parroquia--</option>
                        <option value="Aguedo Felipe Alvarado">Aguedo F. Alvarado</option>
                        <option value="Buena Vista">Buena Vista</option>
                        <option value="Catedral">Catedral</option>
                        <option value="Concepcion">Concepcion</option>
                        <option value="El Cuji">El Cuji</option>
                        <option value="SantaRosa">Santa Rosa</option>\
                        <option value="Guerrera Ana Soto">Guerrera Ana solicitados</option>\
                        <option value="Juarez">Juarez</option> 
                        <option value="Tamaca">Tamaca</option> 
                        <option value="Union">Union</option>
                    </select>

                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>DIRECCION</strong>
                    <select name="zona" class="form-select" id="">
                        <option value="">-Elige Sector/Urb/Barrio..--</option>
                        <option value="Sector">Sector</option>
                        <option value="Comuna">Comuna</option>
                        <option value="Urbanizacion">Urbanizacion</option>
                        <option value="Barrio">Barrio</option>
                        <option value="Viviendo">Viviendo</option>
                
                    </select>

                    <strong>Nombre Zona</strong>
                    <input type="text" name="nomb_zona" class="form-control" placeholder="Nombre de la Zona" >

                    <strong>Direccion1</strong>
                    <select name="dir1" class="form-select" id="">
                        <option value="">-Elige.Av/Carr/Call--</option>
                        <option value="Avenida">Avenida</option>
                        <option value="Carrera">Carrera</option>
                        <option value="Calle">Calle/Vereda/Callejon</option> 
                    </select>

                    <strong> Dir1 </strong>
                    <input type="text" name="nombdir1" class="form-control" placeholder="Nombre(Av/Carr/Calle..." >

                </div>
            </div>
           


        <div class="row"> 
            
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Dir2</strong>
                    <select name="dir2" class="form-select" id="">
                        <option value="">-Av/Carr/Call-</option>
                        <option value="Avenida">Avenida</option>
                        <option value="Carrera">Carrera</option>
                        <option value="Calle">Calle/Vereda/Callejon</option> 
                    </select>

                    <strong> Dir2</strong>
                    <input type="text" name="nombdir2" class="form-control" placeholder="Indicar Interseccion.." >

                    <strong> Tipo Hab  </strong>
                    <select name="vivienda_tipo" class="form-select" id="">
                        <option value="">-Selecciona HAb--</option>
                        <option value="Casa">Casa</option>
                        <option value="Apartamento">Apartamento</option>
                        <option value="Autoconstruccion">Autoconstruccion</option> 
                        <option value="Habitacion">Viviendo-Mision Vivienda</option> 
                    </select>

                    <strong>Identificacion Vivienda</strong>
                    <input type="text" name="vivienda_id" class="form-control" placeholder="ConjResid/Edifi/#Apto/#casa=..." >
                </div>
            </div>
           
            

            
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">SIGUIENTE</button>
        </div>
    
   
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
