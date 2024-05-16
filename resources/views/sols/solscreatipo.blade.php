<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Solicitudes (vista SOLS.SOLSCREATIPO)') }}
        </h2>
       

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("SELECCION DE CLASIFICACION SEGUN RUBRO") }}

        <form action="{{route('storetipo')}}" method="POST">
        @csrf

       
       
            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">

                
                <select name="tipo_task" class="form-select" id="tipo_task">
                       
                     
                       <option value="">--TIPO --</option>
                       @foreach($optionclasf as $optclasf)
                       <option value="{{$optclasf['id']}}" >{{$optclasf['name']}}</option>
                       @endforeach
                      
                      
                       
                      
                    </select>
               
                    <!-- <strong> Clase o Tipo de Solicitud /Tarea:</strong>
                    <select name="clase_task" class="form-select" id="clase_task">
                        <option value="">-- Elige Clasif --</option>

                        <option value="Infraestructura">Infraestrectura</option>
                        <option value="Social">Social</option>
                        <option value="Economico">Economico</option>
                        <option value="Productivo">Productivo</option>
                        <option value="Educativo">Educativo</option>
                        <option value="Politico">Politico</option>
                        <option value="Salud">Salud</option>
                        <option value="Servicio">Servicio</option>
                        
                    </select> -->

                    <!-- <strong> Clase = SALUD </strong> -->
                   
                     <!-- <select name="salud_task" class="form-select" id="salud_task">
                        <option value="">-- SALUD --</option>
                        <option value="Consultas">Consultas</option>
                        <option value="Medicinas">Medicinas</option>
                        <option value="AyudasTecnicas">Ayudas Tecnicas</option>
                        <option value="Insumos">Insumos</option>
                        <option value="Estudios">Estudios</option>
                        <option value="Intervencion Quirurgica">Inter Quirurgica</option>
                        <option value="OtroSalud">Otro</option>
                        
                       
                     </select> -->
   
                    
  
                     <!-- <strong> Clase = INFRAESTRUCTURA </strong> -->
                        <!-- <select name="infra_task" class="form-select" id="">
                        <option value="">-- INFRAESTRUCTURA --</option>
                        <option value="Vialidad">VIALIDAD</option>
                        <option value="Electrificacion">ELECTRIFICACION</option>
                        <option value="Rehabilitacion">REHABILITACION</option>
                        <option value="Construccion">CONSTRUCCION</option>
                        <option value="Semaforos">SEMAFOROS</option>
                        <option value="Demarcacion">DEMARCACION</option>
                        <option value="OtroInfra">Otro..</option>
                        
                        
                        </select>
  -->
                   

                <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Economico
                </button> -->
  
                    <!-- <strong> Clase = Economico </strong> -->
                        <!-- <select name="economico_task" class="form-select" id="">
                        <option value="">-ECONOMIA --</option>
                        <option value="AyudaEco200">Ayuda Economica-hasta 200</option>
                        <option value="AyudaEco200500">Ayuda Economica-200 a 500</option>
                        <option value="AyudaEco500">Ayuda Economica-mayor 500</option>
                        <option value="CredEmpre">Creditos Emprendimiento</option>
                        <option value="FiscalComer">Fiscalizacion Comercial</option>
                        <option value="FiscalEcoPopular">Fiscalizacion Eco Popular</option>
                        <option value="Bono">Bono</option>
                        
                        </select>
  -->
                
 
                        <!-- <strong> Clase = Social </strong> -->
  
<!--                     
                        <select name="social_task" class="form-select" id="">
                        <option value="">-- SOCIAL --</option>
                        <option value="Lblanca">Linea Blanca</option>
                        <option value="Lmarron">Linea Marron</option>
                        <option value="Enseres">Enseres Hogar<</option>
                        <option value="Limpieza">Material Limpieza</option>
                        <option value="Alimentos">Alimentos</option>
                        <option value="RepVehiculo">Insumos Vehiculos</option>
                        <option value="RepMoto">Insumos Motos</option>
                        <option value="Semovientes">Semovientes</option>
                        <option value="MaterialAgro">Implemento Agricolas</option>
                        <option value="RopayCalzado">Ropa/Calzado</option>
                        
                         </select>
  -->
              
  
                         <!-- <strong> Clase = SERVICIO </strong> -->
<!--  
               
                        <select name="servi_task" class="form-select" id="">
                        <option value="">-- SERVICIO --</option>
                       
                        <option value="AbordInst">Abordaje</option>
                        <option value="ArtInst">Articulacion</option>
                        <option value="ServEsp">Asesorias Juridicas</option>
                        <option value="Permisos">Permisologia</option>
                        <option value="carnet">Carnetizacion</option>
                        <option value="multas">Multas</option>
                        
                        <option value="Embellecimiento">Embellecimiento</option>
                        <option value="HechoCom">Hecho en Comuna</option>
                        <option value="RecoDes">Recoleccion Desechos Solidos</option>
                        <option value="RecoMatRec">Recoleccion Mat Reciclaje</option>
                        <option value="RecoVeg">Recoleccion Mat Vegetal</option>
                        <option value="RecoChat">Recoleccion Mat Estrategico</option>
                        <option value="MantInfra">Mantenimiento Infraestructuras</option>
                        <option value="TiTierra">Titulos Tierra</option>
                        <option value="FichaCat">Ficha Catastral</option>

                        
                        </select>
  -->
                
  
 

                        <!-- <strong> Clase = PRODUCTIVO </strong> -->

  
<!--                
                        <select name="prod_task" class="form-select" id="">
                        <option value="">-- PRODUCCION --</option>
                        <option value="Lacteos">Sala Lactea</option>
                        <option value="PlanMejorRebano">Plan Mejoramiento Rebanos</option>
                        <option value="PlanInseminacion">Plan inseminacion</option>
                        <option value="ProgSanitario">Programa Sanitario</option>
                        <option value="FormaCapa">Formacion Capacitacion Productores</option>
                        <option value="VisitaTecnica">Visitas Tecnicas</option>
                        <option value="ArrimeProd">Arrimes de Productores</option>
                        <option value="BodMov">Bodega Movil</option>
                        <option value="matprimatex">Materia Prima Textil</option>
                        <option value="matprimapan">Materia Prima panificadora</option>
                        <option value="FeriaAbast">Ferias Abastecer</option>
                        
                        
                    </select>
  -->
               
  
                    <!-- <strong> Clase = EDUCATIVO </strong> -->
<!--                 
                    <select name="edu_task" class="form-select" id="">
                        <option value="">-- EDUCATIVO --</option>
                        <option value="Taller">Taller- Formacion -Bootcamp</option>
                        <option value="convUni">Convenio univerisidad</option>
                        <option value="feriauni">Feria Universitaria</option>
                    </select>
 
             -->
  
                    <!-- <strong> Clase = POLITICO </strong> -->

<!--                 
                    <select name="poli_task" class="form-select" id="">
                        <option value="">-- POLITICO --</option>
                        <option value="ArtUBCH">Articulacion UBCH</option>
                        <option value="OrdMunicipal">Ordenanzas Municipales</option>
                       
                    </select>
 
                   
            </div> -->
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">SIGUIENTE1</button>
            </div>
   
        </form>
    </div>
         
</x-app-layout>