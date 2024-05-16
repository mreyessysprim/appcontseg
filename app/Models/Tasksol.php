<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasksol extends Model
{
    use HasFactory;
    protected $fillable = ['idsol','nomb_sol','sol_benf','catg_benf','benf_id','nomb_benf','op_telef','num_telef','email_sol','zona','nomb_zona','dir1','nombdir1','dir2','nombdir2','vivienda_tipo','vivienda_id','parroquia','concepto','crea_date','catg_task','status_resp','due_date','new_resp_id','clase_task','salud_task','infra_task','social_task','economico_task','servi_task','prod_task','edu_task','poli_task','cauntificador','status_gestion','Gabinete','Ente'];
}
