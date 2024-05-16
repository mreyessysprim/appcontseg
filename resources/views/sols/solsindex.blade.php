<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Solicitudes (DATOS SOLICITANTE Y BNEFICIARIO VISTA SOLS.SOLSINDEX)')  }}
        </h2>
       

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("DATOS SOLICITANTE/BENEF") }}

    <form action="{{route('solscreadir')}}" method="POST">
        @csrf

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="form-group">
                    <strong>   Id Solicitante:</strong>
                    <input type="text" name="idsol" class="form-control" placeholder="VXXXXXXX" >

                    <strong>   Nombre Solicitante:</strong>
                    <input type="text" name="nomb_sol" class="form-control" placeholder="Nombre Solicitante" >

                    <strong>   Relacion con Beneficiario</strong>
                    <select name="sol_benf" class="form-select" id="">
                        <option value="">--Selecciona--</option>
                        <option value="El Mismo">El Mismo</option>
                        <option value="Familiar">Familiar</option>
                        <option value="Tercero">Tercero</option>
                       
                    </select>

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


                    <strong>Id. Beneficiario:</strong>
                    <input type="text" name="benf_id" class="form-control" placeholder="C.I. Beneficiario" >
                
                    <strong>Nombre Beneficiario:</strong>
                    <input type="text" name="nomb_benf" class="form-control" placeholder="Nombre Beneficiario" >
                    <strong>-------- Numero de Telefono ---</strong>
                    <strong>Op. Telefonica:</strong>
                    <select name="op_telef" class="form-select" id="op_telef">
                        <option value="">-- Elige Op--</option>
                        <option value="0251">0251</option>
                        <option value="0414">0414</option>
                        <option value="0424">0424</option>
                        <option value="0416">0416</option>
                        <option value="0426">0426</option>
                        <option value="0412">0412</option>
                       
                    </select>

                    <strong>Telefono:</strong>
                    <input type="text" name="num_telef" class="form-control" placeholder="Numero Telefonico" >

                    <strong>Email:</strong>
                    <input type="text" name="email_sol" class="form-control" placeholder="Email" >
                </div>
            </div>
      
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">SIGUIENTE</button>
            </div>
   
    </form>
    </div>
         
</x-app-layout>
