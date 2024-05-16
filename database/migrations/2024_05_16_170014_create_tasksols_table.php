<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasksols', function (Blueprint $table) {
            $table->id();
            $table->string('idsol');
            $table->string('nomb_sol');
            $table->enum('sol_benf',['El Mismo','Familiar','Tercero']);
            $table->enum('catg_benf',['Lactante','Niñ@, Adolecente','Adulto', 'Adulto Mayor','Grupo Fam','Comunidad','Colectivo','P.Juridica']);
            $table->string('benf_id')->nullable();
            $table->string('nomb_benf')->nullable();
            $table->enum('op_telef',['0251','0414','0424','0416','0426','0412'])->nullable();
            $table->string('num_telef')->nullable();
            $table->string('email_sol')->nullable();
            $table->enum('zona',['Sector','Comuna','Viviendo','Barrio','Urbanizacion'])->nullable();
            $table->string('nomb_zona')->nullable();
            $table->enum('dir1',['Avenida','Carrera','Calle'])->nullable();
            $table->string('nombdir1')->nullable();
            $table->enum('dir2',['Avenida','Carrera','Calle'])->nullable();
            $table->string('nombdir2')->nullable();
            $table->enum('vivienda_tipo',['Casa','Apartamento','Autoconstruccion','Habitacion'])->nullable();
            $table->string('vivienda_id')->nullable();
            $table->enum('parroquia',['Aguedo Felipe Alvarado','Buena Vista','Catedral','Concepcion','El Cují','Guerrera Ana Soto','Juarez','Santa Rosa','Tamaca','Union'])->nullable();
            $table->text('concepto')->nullable();
            $table->dateTime('crea_date')->nullable();
            $table->enum('catg_task',['Priorizado','Normal','1x10'])->nullable();
            //$table->('user_id')->constrained()->cascadeOnDelete()->nullable();
            $table->enum('status_resp',['Pendiente','En Progreso','Completada'])->nullable();
            $table->dateTime('due_date')->nullable();
            
           
            $table->enum('clase_task',['Infraestructura','Social','Economico','Productivo','Educativo','Politico','Salud','Servicio'])->nullable();
           
            $table->enum('salud_task',['Consultas','Medicinas','AyudasTecnicas','Insumos','Estudios','InterQuirurgica','OtroSalud'])->nullable();
            $table->enum('infra_task',['Construccion','Electrificacion','Demarcacion','Vialidad','Rehabilitacion','Semaforos','OtroInfra'])->nullable();
            $table->enum('social_task',['Lblanca','Lmarron','Enseres','Limpieza','Alimentos','RepVehiculo','RepMoto','Semovientes','MaterialAgro','RopayCalzado'])->nullable();
            $table->enum('economico_task',['AyudaEco200','AyudaEco200500','AyudaEco500','CredEmpre','CredProd','FiscalComer','FiscalEcoPopular','Bono'])->nullable();
            $table->enum('servi_task',['AbordInst','ArtInst','Transp','Permisos','carnet','multas','ServEsp','Embellecimiento','HechoCom','RecoChat','RecoVeg','RecoDes','RecoMatRec','MantInfra','TiTierra','FichaCat'])->nullable();
            $table->enum('prod_task',['Lacteos','PlanMejorRebano','PlanInseminacion','ProgSanitario','FormaCapa','VisitaTecnica','ArrimeProd','BodMov','matprimatex','matprimapan','FeriaAbast'])->nullable();
            $table->enum('edu_task',['Taller','convUni','feriauni'])->nullable();
            $table->enum('poli_task',['ArtUBCH','OrdMunicipal'])->nullable();
            $table->string('cauntificador')->nullable();
            

            $table->enum('Gabinete',['gabSocial','gabTierra','gabInfraServ','gabEcon','gabAdm','gabSeg','gabOp'])->nullable();
            $table->enum('Ente',['CMDNNAI','CPNNAI','FUNDNINO','IMCA','IMDERI','IMDES','IMMI','IMJUVI','IMAMB','OACI','SAGUA','DIRSERCOM',
                        'CATASTRO','DPCU','DTEP','OTSTU',
                         'AMTT','EMICA','CEMEN','IMAUBAR','IMVI','TRANSP','TERM',
                         'ABAST','COMDIBAR','CORTUBAR','FUMDES','JUNRECA','MERCA','FORTPP','MERCABAR','SEMAT','DIRHAC',
                         'JURID','DESP','DIRGEN','AUDIT','ADM','ODECI','TES','OPP','INFOR','RRHH','SIND','OSERVGEN',
                         'BOMB','POLI',
                         'PRENSA','CONTSEG','COM1X10'])->nullable();
            $table->string('new_rep_id')->nullable();            
            $table->enum('status_gestion',['PorAsignar','Asignado','EsperaRecurso','PuntoCuenta','Entregado','Verificado'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasksols');
    }
};