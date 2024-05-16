@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
            <h2>Crear Solicitud o Requerimiento - DATOS DEL SOLICITANTE/BENEFICIARIO</h2>
            </div>
            <div>
            <a href="{{route('tasksols.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>
    


    @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <strong>No olvides que para CREAR SOLICITUD debes llenar todos los campos solicitados</strong> Algo fue mal..<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

   


    <form action="{{route('tasksols.store')}}" method="POST">
        @csrf

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
        
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>C.I.:</strong>
                    <input type="text" name="idsol" class="form-control" placeholder="VXXXXXXX" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Nombre Solicitante:</strong>
                    <input type="text" name="nomb_sol" class="form-control" placeholder="Nombre Solicitante" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Relacion con Beneficiario</strong>
                    <select name="sol_benf" class="form-select" id="">
                        <option value="">--Selecciona--</option>
                        <option value="El Mismo">El Mismo</option>
                        <option value="Familiar">Familiar</option>
                        <option value="Tercero">Tercero</option>
                       
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Beneficiario</strong>
                        <select name="cat_benf" class="form-select" id="">
                        <option value="">--Selecciona--</option>
                        <option value="Lactante">Lactante</option>
                        <option value="Niñ@,Adolecente">Niñ@, Adolecente</option>
                        <option value="Adulto">Adulto</option>
                        <option value="Adulto Mayor">Adulto Mayor</option>
                        <option value="Grup Fam">Grupo Familiar</option>
                        <option value="Comunidad">Comunidad</option>
                        <option value="Colectivo">Colectivo</option>
                        <option value="P.Juridica">P. Juridica</option>
                       
                       
                        </select>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>C.I.:</strong>
                    <input type="text" name="benf_id" class="form-control" placeholder="C.I. Beneficiario" >
                </div>
            </div>
        

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Nombre Beneficiario:</strong>
                    <input type="text" name="nomb_benf" class="form-control" placeholder="Nombre Beneficiario" >
                </div>
            </div>
           

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Op. Telefonica</strong>
                    <select name="op_telef" class="form-select" id="">
                        <option value="">-- Elige Op--</option>
                        <option value="0251">0251</option>
                        <option value="0414">0414</option>
                        <option value="0424">0424</option>
                        <option value="0416">0416</option>
                        <option value="0426">0426</option>
                        <option value="0412">0412</option>
                       
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Telefono:</strong>
                    <input type="text" name="num_telef" class="form-control" placeholder="Numero Telefonico" >
                </div>
            </div>
        </div>

        <div class="row"> 

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email_sol" class="form-control" placeholder="Email" >
                </div>
            
            </div>

        <!-- Desde aqui es la Direccion de la Soliciutod -->

            <div class="col-12">
                <div>
                 <h2>Direccion Solicitante/Beneficiario</h2>
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
                </div>
            </div>
       


            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Nombre Zona</strong>
                    <input type="text" name="nomb_zona" class="form-control" placeholder="Nombre de la Zona" >
                </div>
            </div>
           

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Direccion1</strong>
                    <select name="dir1" class="form-select" id="">
                        <option value="">-Elige.Av/Carr/Call--</option>
                        <option value="Avenida">Avenida</option>
                        <option value="Carrera">Carrera</option>
                        <option value="Calle">Calle/Vereda/Callejon</option> 
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong> Dir1 </strong>
                    <input type="text" name="nombdir1" class="form-control" placeholder="Nombre(Av/Carr/Calle..." >
                </div>
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
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong> Dir2</strong>
                    <input type="text" name="nombdir2" class="form-control" placeholder="Indicar Interseccion.." >
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong> Tipo Hab  </strong>
                    <select name="vivienda_tipo" class="form-select" id="">
                        <option value="">-Selecciona HAb--</option>
                        <option value="Casa">Casa</option>
                        <option value="Apartamento">Apartamento</option>
                        <option value="Autoconstruccion">Autoconstruccion</option> 
                        <option value="Habitacion">Viviendo-Mision Vivienda</option> 
                    </select>
                   
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>Identificacion Vivienda</strong>
                    <input type="text" name="vivienda_id" class="form-control" placeholder="ConjResid/Edifi/#Apto/#casa=..." >
                </div>
            </div>
        </div>
<!-- Hasta Aqui Direccion   Continua la Parroquia-->
        <div class="row"> 
            </div> <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
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
        </div>
    <!-- Concepto de la Solicitud -->
        <div class="row"> 
            <div class="col-12">
                        <div>
                            <h2>Concepto de Solicitud</h2>
                        </div>
       
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                            <strong>Fecha de la Carta:</strong>
                            <input type="date" name="crea_date" class="form-control" id="">
                </div>
            </div>

        </div>

        <div class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                <div class="form-group">
                    <strong>Resumen de la solicitud:</strong>
                    <textarea class="form-control" style="height:100px" name="concepto" placeholder="Resumen breve de Solicitud o Tarea..."></textarea>
                </div>
            </div>

        </div>
  <!-- Categoria de la Solciitud y Status del Responsable  -->
        <div class="row"> 
         
            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
                    <strong>Categoria Beneficio:</strong>
                    <select name="catg_task" class="form-select" id="">
                        <option value="">-- Elige el Tipo --</option>
                        <option value="Priorizado">Priorizado</option>
                        <option value="Normal">Normal</option>
                        <option value="1x10">1x10</option>
                       
                       
                    </select>
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
                </div>
            </div>
        </div>
<!-- Atributos ( CLase y Tipo de Solicitu) -->
        <div class="row"> 
            <div class="col-12">
                <div>
                    <h2>       Crear  Atributos y Categoria de la solicitud</h2>
                </div>
            </div>
       
        
        

            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
                    <strong> Clase o Tipo de Solicitud /Tarea:</strong>
                    <select name="clase_task" class="form-select" id="">
                        <option value="">-- Elige Clasif --</option>

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
        </div>
<!-- FECHA LIMITE -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
               <div class="form-group">
                   <strong>Fecha Limite:</strong>
                   <input type="date" name="due_date" class="form-control" id="">
               </div>
            </div>
          

            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
               <div class="form-group">
                   <strong> Cuantificar solicitud</strong>
                   <input type="text" name="cauntificador" class="form-control" placeholder="Cuantificar.." >
               </div>
            </div>

        

            <div class="btn-group">
                <button type="button" id="clase_task" name="Salud" value="Salud" class="btn btn-success dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false">
                     Salud
                </button>
                    <ul name="clase_task" value="Salud" class="dropdown-menu" id="clase_task">
                     <li><select name="salud_task" class="form-select" id="salud_task">
                        <option value="">-- Elige Salud --</option>
                        <option value="Consultas">Consultas</option>
                        <option value="Medicinas">Medicinas</option>
                        <option value="AyudasTecnicas">Ayudas Tecnicas</option>
                        <option value="Insumos">Insumos</option>
                        <option value="Estudios">Estudios</option>
                        <option value="Intervencion Quirurgica">Inter Quirurgica</option>
                        <option value="OtroSalud">Otro</option>
                        
                       
                     </select></li>
   
                    </ul>
  
                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Infraestructura
                </button>
  
                    <ul name="clase_task" value="Infraestructura" class="dropdown-menu">
                        <li><select name="infra_task" class="form-select" id="">
                        <option value="">-- Elige Infra --</option>
                        <option value="Vialidad">VIALIDAD</option>
                        <option value="Electrificacion">ELECTRIFICACION</option>
                        <option value="Rehabilitacion">REHABILITACION</option>
                        <option value="Construccion">CONSTRUCCION</option>
                        <option value="Semaforos">SEMAFOROS</option>
                        <option value="Demarcacion">DEMARCACION</option>
                        <option value="OtroInfra">Otro..</option>
                        
                        
                        </select></li>
 
                    </ul>

                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Economico
                </button>
  
                    <ul name="clase_task" value="Economico" class="dropdown-menu">
                        <li><select name="economico_task" class="form-select" id="">
                        <option value="">-- Elige Eco --</option>
                        <option value="AyudaEco200">Ayuda Economica-hasta 200</option>
                        <option value="AyudaEco200500">Ayuda Economica-200 a 500</option>
                        <option value="AyudaEco500">Ayuda Economica-mayor 500</option>
                        <option value="CredEmpre">Creditos Emprendimiento</option>
                        <option value="FiscalComer">Fiscalizacion Comercial</option>
                        <option value="FiscalEcoPopular">Fiscalizacion Eco Popular</option>
                        <option value="Bono">Bono</option>
                        
                        </select></li>
 
                    </ul>
 
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Social
                        </button>
  
                    <ul name="clase_task" value="Social" class="dropdown-menu">
                        <li><select name="social_task" class="form-select" id="">
                        <option value="">-- Elige Social --</option>
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
                        
                     </select></li>
 
                </ul>
  
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicio
                        </button>
 
                <ul name="clase_task" value="Servicio" class="dropdown-menu">
                        <li><select name="servi_task" class="form-select" id="">
                        <option value="">-- Elige Servicio --</option>
                       
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

                        
                        </select></li>
 
                </ul>
  
 

                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Productivo
                    </button>

  
                <ul name="clase_task" value="Productivo" class="dropdown-menu">
                    <li><select name="prod_task" class="form-select" id="">
                        <option value="">-- Elige Prod --</option>
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
                        
                        
                    </select></li>
 
                 </ul>
  
                    <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Educativo
                    </button>

                <ul name="clase_task" value="Educativo" class="dropdown-menu">
                    <li><select name="edu_task" class="form-select" id="">
                        <option value="">-- Elige Edu --</option>
                        <option value="Taller">Taller- Formacion -Bootcamp</option>
                        <option value="convUni">Convenio univerisidad</option>
                        <option value="feriauni">Feria Universitaria</option>
                    </select></li>
 
                </ul>
  
                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Politico
                    </button>

                <ul name="clase_task" value="Politico" class="dropdown-menu">
                    <li><select name="poli_task" class="form-select" id="">
                        <option value="">-- Elige Poli --</option>
                        <option value="ArtUBCH">Articulacion UBCH</option>
                        <option value="OrdMunicipal">Ordenanzas Municipales</option>
                       
                    </select></li>
 
                </ul>
            </div>
        </div>
   
<!-- ASIGANACION DE RESPONSABLE GABINETE  -->
        <div class="row">
           
            <div class="col-12">
    
                <h2>------------Asignar Gabinete --------</h2>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
                    <strong> Asignar Gabinete Responsable:</strong>
                    <select name="Gabinete" class="form-select" id="">
                        <option value="">-- Elige Gabinete --</option>
                        <option value="gabSocial">Gab Social</option>
                        <option value="gabTierra">Gab de Tierras</option>
                        <option value="gabEcon">Gab Economico</option>
                        <option value="gabAdm">Gab Adminsitrativo</option>
                        <option value="gabSeg">Gab Seguridad</option>
                        <option value="gabOp">Gab de Operaciones Especiales</option>
                        <option value="gabInfraServ">Gab de Infraestructura</option>
                     
                    </select>
                </div>
            </div>
            <div class="col-12">
    
                <h2>------------Responsable Por Gabinete--------</h2>
            </div>  
            <div class="btn-group">
                <button  type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Gab Social
                </button>
                <ul  class="dropdown-menu">
                 <li><select name="Ente" class="form-select" id="Ente">
                        <option value="">-- Elige Dir/Ente --</option>
                        <option value="CMDNNAI">CMDNNAI Lcda Katy Yanez</option>
                        <option value="CPNNAI">CPNNAI</option>
                        <option value="FUNDNINO">Fund del Niño</option>
                        <option value="IMCA">IMCA</option>
                        <option value="IMDERI">IMDERI</option>
                        <option value="IMDES">IMDES</option>
                        <option value="IMMI">IMMI</option>
                        <option value="IMJUVI">IMJUVI</option>
                        <option value="IMAMB">IMAMB</option>
                        <option value="OACI">OACI</option>
                        <option value="SAGUA">SAGUA</option>
                        <option value="DIRSERCOM">DIRSERCOM</option>
                        
                       
                    </select></li>
 
                </ul>

           
                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Gab de Tierras
                </button>
                <ul class="dropdown-menu">
                    <li><select name="Ente" class="form-select" id="">
                        <option value="">-- Elige Dir/Ente --</option>
                        <option value="CATASTRO">CMDNNAI Lcda Katy Yanez</option>
                        <option value="DPCU">CPNNAI</option>
                        <option value="DTEP">Fund del Niño</option>
                        <option value="OTSTU">IMCA</option> 
                       
                    </select></li>
 
                </ul>
           
            
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Gab Infra/Servicios
                </button>
                <ul class="dropdown-menu">
                 <li><select name="Ente" class="form-select" id="">
                        <option value="">-- Elige Dir/Ente --</option>
                        <option value="AMTT">AMTT</option>
                        <option value="EMICA">EMICA</option>
                        <option value="CEMEN">CEMEN</option>
                        <option value="IMAUBAR">IMAUBAR</option>
                        <option value="IMVI">IMVI</option>
                        <option value="TRANSP">TRANSP</option>
                        <option value="TERM">TERM</option>
                    </select></li>
 
                </ul>


                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Gab Economico Productivo
                </button>
                
                <ul class="dropdown-menu">
                 <li><select name="Ente" class="form-select" id="">
                        <option value="">-- Elige Dir/Ente --</option>
                        <option value="ABAST">ABAST</option>
                        <option value="COMDIBAR">COMDIBAR</option>
                        <option value="CORTUBAR">CORTUBAR</option>
                        <option value="FUMDES">FUMDES</option>
                        <option value="JUNRECA">JUNRECA</option>
                        <option value="MERCA">MERCA</option>
                        <option value="FORTPP">FORTPP</option>
                        <option value="MERCABAR">MERCABAR</option>
                        <option value="SEMAT">SEMAT</option>
                        <option value="DIRHAC">DIRHAC</option>
                      
                        
                       
                    </select></li>
 
                 </ul>


            
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Gab Administrativo
                </button>

                <ul class="dropdown-menu">
                    <li><select name="Ente" class="form-select" id="">
                        <option value="">-- Elige Dir/Ente --</option>
                        <option value="JURID">JURID</option>
                        <option value="DESP">DESP</option>
                        <option value="DIRGEN">DIRGEN</option>
                        <option value="AUDIT">AUDIT</option>
                        <option value="ADM">ADM</option>
                        <option value="ODECI">ODECI</option>
                        <option value="TES">TES</option>
                        <option value="OPP">OPP</option>
                        <option value="INFOR">INFOR</option>
                        <option value="OACI">OACI</option>
                        <option value="RRHH">RRHH</option>
                        <option value="SIND">SIND</option>
                        <option value="OSERVGEN">OSERVGEN</option>
                      
                        
                       
                    </select></li>
 
                </ul>


                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Gab Seguridad
                    </button>
              

                <ul class="dropdown-menu">
                    <li><select name="Ente" class="form-select" id="">
                        <option value="">-- Elige Dir/Ente --</option>
                        <option value="BOMB">BOMB</option>
                        <option value="POLI">POLI</option>
                           
                    </select></li>
 
                </ul>
           

                    <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                     OTROS
                    </button>

                <ul  class="dropdown-menu">
                    <li><select name="Ente" class="form-select" id="">
                        <option value="">-- Elige Dir/Ente --</option>
                        <option value="PRENSA">BOMB</option>
                        <option value="COM1X10">COM1X10</option>
                        <option value="CONTSEG">CONTSEG</option>
                           
                    </select></li>
 
                </ul>
           
 
            </div>
        
            
            <div class="col-12">
    
                <h2>------------ Seguimeinto y Control --------</h2>
            </div>
    
        
            <div class="col-xs-12 col-sm-12 col-md-2 mt-2">
                <div class="form-group">
                    <strong>Seguimiento:</strong>
                    <select name="status_gestion" class="form-select" id="">
                        <option value="">-- Elige --</option>
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
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    
   
    </form>

@endsection