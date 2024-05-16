<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Tasksol;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TasksolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // return view('index', ['tasksols' => Tasksol::with('user')->latest()->get(),
            
     
        //$busids = Tasksol::all();
            
            $tasksols = Tasksol::latest()->paginate(5);
        return view('index',['tasksols' => $tasksols]);
    }
    
    public function solsindex(): View
    {
        // return view('index', ['tasksols' => Tasksol::with('user')->latest()->get(),
            
     
        //$busids = Tasksol::all();
            
            $tasksols = Tasksol::latest()->paginate(5);
        return view('solsindex',['tasksols' => $tasksols]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create');
    }
   
    public function createdir(): View
    {
        //return view('createdir');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //dd($request->all());
        
        //Tasksol::create($request->all());
        //Tasksol::create($validated);
       
        Tasksol::create($request->all());


        return redirect()->route('tasksols.index')->with('success','Solicitud Creada Exitosamente');
       
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Tasksol $tasksol): View
    {
        //$busq = Tasksol::find($tasksol);
        
        $tasksols = Tasksol::where('idsol',$tasksol)->get();
 
      
        // $tasksol = Tasksol::where('tasksol','V12935762')->first();

        return view('show',['tasksols' => $tasksols]);
    
    
    }
   
    public function buscars(Request $request)
    {
        //$busq = Tasksol::find($tasksol);
        $tasksol = $request->idsol;
        
        $tasksols = Tasksol::where('idsol',$tasksol)->get();
       // dd($request,$tasksol,$tasksols);
      
        // $tasksol = Tasksol::where('tasksol','V12935762')->first();

       return view('elocuent',['tasksols' => $tasksols]);
    
    }

  

   

    public function storesolbenf(Request $request): RedirectResponse
    {
        //$busq = Tasksol::find($tasksol);
        Tasksol::create($request->all());

        //dd($request);
        return redirect()->route('solscreadir')->with('success','Solcitante y Benef Creado Exitosamente .....Continue llenado..');
    
    
    }

    public function storesoldir(Request $request, Tasksol $tasksol): RedirectResponse
    {
        //$busq = Tasksol::find($tasksol);
        //Tasksol::create($request->all());
        $tasksol->update($request->all());
        //dd($request);
        return redirect()->route('solscreaconcepto')->with('success','Direccion Guardada Exitosamente .....Continue llenado..');
        
    
    }

    public function storeconcepto(Request $request,Tasksol $tasksol): RedirectResponse
    {
        //$busq = Tasksol::find($tasksol);
        $tasksol->update($request->all());
        //dd($request);
        return redirect()->route('solscreaclass')->with('success',' Guardada Exitosamente .....Continue llenado..');
    
    
    }
   
    public function storeclasf(Request $request,Tasksol $tasksol)
    {
        $tasksol->update($request->all());
        $selclasf = $request->clase_task;
        
    switch($selclasf){

       
       case 'Infraestructura':

       
        $optionclasf = [
            ['id'=>1,'name'=> 'Construccion'],
            ['id'=>2,'name'=> 'Electrificacion'],
            ['id'=>3,'name'=> 'Demarcacion'],
            ['id'=>4,'name'=> 'Vialidad'],
            ['id'=>5,'name'=> 'Rehabilitacion'],
            ['id'=>6,'name'=> 'Semaforos'],
            ['id'=>7,'name'=> 'OtroInfra']
          
        ];
        break;
        
        case 'Social':

            
            $optionclasf = [
                ['id'=>1,'name'=> 'Lblanca'],
                ['id'=>2,'name'=> 'Lmarron'],
                ['id'=>3,'name'=> 'Enseres'],
                ['id'=>4,'name'=> 'Limpieza'],
                ['id'=>5,'name'=> 'Alimentos'],
                ['id'=>6,'name'=> 'RepVehiculo'],
                ['id'=>7,'name'=> 'RepMoto'],
                ['id'=>8,'name'=> 'Semovientes'],
                ['id'=>9,'name'=> 'MaterialAgro'],
                ['id'=>10,'name'=> 'RopayCalzado']
              
            ];
            break;


        case 'Economico':

           
            $optionclasf = [
                ['id'=>1,'name'=> 'AyudaEco200'],
                ['id'=>2,'name'=> 'AyudaEco200500'],
                ['id'=>3,'name'=> 'AyudaEco500'],
                ['id'=>4,'name'=> 'CredEmpre'],
                ['id'=>5,'name'=> 'CredProd'],
                ['id'=>6,'name'=> 'FiscalComer'],
                ['id'=>7,'name'=> 'FiscalEcoPopular'],
                ['id'=>8,'name'=> 'Bono']
              
            ];
            break;

            case 'Productivo':

               
                $optionclasf = [
                    ['id'=>1,'name'=> 'Lacteos'],
                    ['id'=>2,'name'=> 'PlanMejorRebano'],
                    ['id'=>3,'name'=> 'PlanInseminacion'],
                    ['id'=>4,'name'=> 'ProgSanitario'],
                    ['id'=>5,'name'=> 'FormaCapa'],
                    ['id'=>6,'name'=> 'VisitaTecnica'],
                    ['id'=>8,'name'=> 'ArrimeProd'],
                    ['id'=>9,'name'=> 'BodMov'],
                    ['id'=>10,'name'=> 'matprimatex'],
                    ['id'=>11,'name'=> 'matprimapan'],
                    ['id'=>12,'name'=> 'FeriaAbast']
                  
                    
                  
                ];
                break;

                case 'Educativo':

                   
                    $optionclasf = [
                        ['id'=>1,'name'=> 'Taller'],
                        ['id'=>2,'name'=> 'convUni'],
                        ['id'=>3,'name'=> 'feriauni']
                        
                      
                    ];
                    break;

                    case 'Politico':

                       
                        $optionclasf = [
                            ['id'=>1,'name'=> 'ArtUBCH'],
                            ['id'=>2,'name'=> 'OrdMunicipal']
                        
                        ];
                        break;

                        case 'Salud':

                           
                            $optionclasf = [
                                ['id'=>1,'name'=> 'Consultas'],
                                ['id'=>2,'name'=> 'Medicinas'],
                                ['id'=>3,'name'=> 'AyudasTecnicas'],
                                ['id'=>4,'name'=> 'Estudios'],
                                ['id'=>5,'name'=> 'InterQuirurgica'],
                                ['id'=>6,'name'=> 'Insumos'],
                                ['id'=>7,'name'=> 'OtroSalud']
                                
                              
                            ];
                            break;

                            
                            case 'Servicio':

                                $optionclasf = [
                                    ['id'=>1,'name'=> 'AbordInst'],
                                    ['id'=>2,'name'=> 'ArtInst'],
                                    ['id'=>3,'name'=> 'Transp'],
                                    ['id'=>4,'name'=> 'Permisos'],
                                    ['id'=>5,'name'=> 'carnet'],
                                    ['id'=>6,'name'=> 'multas'],
                                    ['id'=>8,'name'=> 'ServEsp'],
                                    ['id'=>9,'name'=> 'Embellecimiento'],
                                    ['id'=>10,'name'=> 'HechoCom'],
                                    ['id'=>11,'name'=> 'RecoChat'],
                                    ['id'=>12,'name'=> 'RecoVeg'],
                                    ['id'=>13,'name'=> 'RecoDes'],
                                    ['id'=>14,'name'=> 'RecoMatRec'],
                                    ['id'=>15,'name'=> 'MantInfra'],
                                    ['id'=>16,'name'=> 'TiTierra'],
                                    ['id'=>17,'name'=> 'FichaCat']
                                  
                                    
                                  
                                ];
                                break;
        }
       return view('sols.solscreatipo',['optionclasf' => $optionclasf]);
    
    }

    public function storetipo(Request $request,Tasksol $tasksol): RedirectResponse
    {
        //$busq = Tasksol::find($tasksol);
        $tasksol->update($request->all());
        //dd($request);
     
        return redirect()->route('solscreagab')->with('success','Tipo Guardada Exitosamente .....Continue llenado..');
    
    
    }
    public function gabinetes(Request $request,Tasksol $tasksol)
    {
        $tasksol->update($request->all());
        $gabinetesel = $request->gabinete;
        
    switch($gabinetesel){

       
       case 'gabSocial':
        $optiongab = [
            ['id'=>1,'name'=> 'CMDNNAI'],
            ['id'=>2,'name'=> 'CPNNAI'],
            ['id'=>3,'name'=> 'FUNDNINO'],
            ['id'=>4,'name'=> 'IMCA'],
            ['id'=>5,'name'=> 'IMDERI'],
            ['id'=>6,'name'=> 'IMDES'],
            ['id'=>7,'name'=> 'IMMI'],
            ['id'=>8,'name'=> 'IMJUVI'],
            ['id'=>9,'name'=> 'IMAMB'],
            ['id'=>10,'name'=>'OACI'],
            ['id'=>11,'name'=>'SAGUA'],
            ['id'=>12,'name'=>'DIRSERCOM']

        ];
        break;
        
        case 'gabTierra':
            $optiongab = [
                ['id'=>1,'name'=> 'CATASTRO'],
                ['id'=>2,'name'=> 'DPCU'],
                ['id'=>3,'name'=> 'DTEP'],
                ['id'=>4,'name'=> 'OTSTU'],
                
            ];
            break;

           
            case 'gabInfraServ':
                $optiongab = [
                    ['id'=>1,'name'=> 'AMTT'],
                    ['id'=>2,'name'=> 'EMICA'],
                    ['id'=>3,'name'=> 'CEMEN'],
                    ['id'=>4,'name'=> 'IMCA'],
                    ['id'=>5,'name'=> 'IMAUBAR'],
                    ['id'=>6,'name'=> 'IMVI'],
                    ['id'=>7,'name'=> 'TRANSP'],
                    ['id'=>8,'name'=> 'TERM']
                    
        
                ];
                break;
              
                case 'gabEcon':
                    $optiongab = [
                        ['id'=>1,'name'=> 'ABAST'],
                        ['id'=>2,'name'=> 'COMDIBAR'],
                        ['id'=>3,'name'=> 'CORTUBAR'],
                        ['id'=>4,'name'=> 'FUMDES'],
                        ['id'=>5,'name'=> 'JUNRECA'],
                        ['id'=>6,'name'=> 'MERCA'],
                        ['id'=>7,'name'=> 'FORTPP'],
                        ['id'=>8,'name'=> 'MERCABAR'],
                        ['id'=>9,'name'=> 'SEMAT'],
                        ['id'=>10,'name'=>'DIRHAC']
                       
            
                    ];
                    break;
                  

                    case 'gabAdm':
                        $optiongab = [
                            ['id'=>1,'name'=> 'JURID'],
                            ['id'=>2,'name'=> 'DESP'],
                            ['id'=>3,'name'=> 'DIRGEN'],
                            ['id'=>4,'name'=> 'AUDIT'],
                            ['id'=>5,'name'=> 'ADM'],
                            ['id'=>6,'name'=> 'ODECI'],
                            ['id'=>7,'name'=> 'TES'],
                            ['id'=>8,'name'=> 'OPP'],
                            ['id'=>9,'name'=> 'INFOR'],
                            ['id'=>10,'name'=>'RRHH'],
                            ['id'=>11,'name'=> 'SIND'],
                            ['id'=>12,'name'=> 'OSERVGEN']
                     
                        ];
                        

                        case 'gabSeg':
                            $optiongab = [
                                ['id'=>1,'name'=> 'BOMB'],
                                ['id'=>2,'name'=> 'POLI']
                             
                            ];
                            break;

                            case 'gabOp':
                                $optiongab = [
                                    ['id'=>1,'name'=> 'PRENSA'],
                                    ['id'=>2,'name'=> 'CONTSEG'],
                                    ['id'=>2,'name'=> 'COM1X10']
                                 
                                ];
                                break;
        }
       return view('sols.solscrearesp',['optiongab' => $optiongab]);
    
    }

    public function storeresp(Request $request,Tasksol $tasksol): RedirectResponse
    {
        //$busq = Tasksol::find($tasksol);
        $tasksol->update($request->all());
        return redirect()->route('solscreaestatuscys')->with('success','DIRECC O ENTE Guardada Exitosamente .....Continue llenado..');
    
    
    }

    public function storecys(Request $request,Tasksol $tasksol): RedirectResponse
    {
        //$busq = Tasksol::find($tasksol);
        $tasksol->update($request->all());
        return redirect()->route('tasksols.index')->with('success', 'Guardado Exitosamente.');
    
    
    }

    public function versols(Tasksol $tasksol):View
    {
        //$busq = Tasksol::find($tasksol);
        //$tasksol = $request->idsol;
        
        //$tasksols = Tasksol::where('idsol',$tasksol)->get();
       // dd($request,$tasksol,$tasksols);
      
        // $tasksol = Tasksol::where('tasksol','V12935762')->first();

       return view('elocuent',['tasksol' => $tasksol]);
    
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tasksol $tasksol):View
    {
        return view('edit',['tasksol' => $tasksol]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tasksol $tasksol): RedirectResponse
    {
       //dd($request -> all());

       //$tasksol->update($validated);
       $tasksol->update($request->all());
       return redirect()->route('tasksols.index')->with('success','Solicitud EDITADA Exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasksol $tasksol): RedirectResponse
    {
       $tasksol->delete();
       return redirect()->route('tasksols.index')->with('success','Solicitud ELIMINADA Exitosamente');

    }
}
