<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidatorRequest;
use App\Http\Requests\Pieces;
use App\Models\DataMaintenance;
use App\Models\CarModel;
use App\Models\Process;
use App\Models\NameProcess;
use App\Models\NamePiece;




class DatamaintenanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showTable(){
        $id =0;
        $data = DataMaintenance::selections()->get();
        return view('admin.blades.showTable',compact(['data','id']));
    }
    ################################ Begin create Maintenance ###################################################
    public function createMain(){
        $generator = date("Ym").str_pad(DataMaintenance::withTrashed()->count()+ 1, 3, "0", STR_PAD_LEFT);
        $carModel = CarModel::select('id','name')->get();
        return view('admin.blades.registeMain',compact(['generator','carModel']));
    }
    public function Addmaintenance(ValidatorRequest $request){
        try{
            DataMaintenance::create([
                'main_no' => $request->main_no,
                'car_type' => $request->car_type,
                'carModel_id' => $request->carModel_id,
                'date' => $request->date,
                'clint_name' => $request->clint_name,
                'car_no' => $request->car_no,
                'motor_no' => $request->motor_no,
                'frame_no' => $request->frame_no,
                'trailer_type' => $request->trailer_type,
                'trailer_no' => $request->trailer_no,
                'frameTrailer_no' => $request->frameTrailer_no,
                'notes' => $request->notes,
                'receipt_notes' => $request->receipt_notes,
            ]);
            return redirect()->route('showTable')->with(['success' => 'تم الاضافة بنجاح']);

        }catch(\Exception $ex){
            return redirect()->route('showTable')->with(['error' => 'من فضلك برجاء المحاولة مره اخري ']);
        }
    }
    public function editmaintenance($id){
        try{
            $data = DataMaintenance::selections()->find($id);
              if(!$data){
              return redirect()->route('showTable')->with(['error' => 'هذا الطلب غير موجود']);
          }
              $carModel = CarModel::select('id','name')->get();
              return view('admin.blades.editmain',compact(['data','carModel']));
          }catch(\Exception $ex){

              return redirect()->route('showTable')->with(['error' => 'من فضلك برجاء المحاولة مره اخري  ']);

          }
    }
    public function updatemaintenance($id,Request $request){
            try{
            $data = DataMaintenance::selections()->find($id);
            if(!$data){
                return redirect()->route('showTable')->with(['error' => 'هذا الطلب غير موجود']);
            } 
                $datamain = $request->except('_token','id');
                DataMaintenance::where('id',$id)->update($datamain);
                return redirect()->route('showTable')->with(['success' => 'تم الاضافة بنجاح']);
      
             }catch(\Exception $ex){
                return redirect()->route('showTable')->with(['error' => 'من فضلك برجاء المحاولة مره اخري  ']);
    
            }
        
    }

        ################################ End create Maintenance ###################################################


        ################################ Begin process Maintenance ###################################################

       public function showTableprocess(){
            $id =0;
            $Process = Process::selections()->get();
            return view('admin.blades.showTableprocess',compact(['Process','id']));
       }
       
        public function addProcess(){
            $Process = Process::selections()->get();
            $data = DataMaintenance::selections()->get();
            $NameProcess = NameProcess::select('id','name')->get();
            $NamePiece = NamePiece::select('id','name')->get();

            return view('admin.blades.addprocess',compact(['Process','data','NameProcess','NamePiece']));
        }


        public function storeprocess(Request $request){
           try{                 
            Process::create([
                'main_no' =>$request->main_no,
                'nameprocess_id' =>$request->nameprocess_id,
                'piece_no' =>$request->piece_no,
                'price' =>$request->price,
                'quantity' =>$request->quantity,
                'workship' =>$request->workship,
                'namePiece_id' =>$request->namePiece_id,
                'category' =>$request->category,

            ]);
                return redirect()->route('showTableprocess')->with(['success' => 'تم الاضافة بنجاح']);

            }catch(\Exception $ex){
                return redirect()->route('showTableprocess')->with(['error' => 'من فضلك برجاء المحاولة مره اخري  ']);
    
            }
        }
        ########################################## Begin Archive ################################################################

            public function closeMaintenance(){
                //To also get soft deleted models 
                $id =0;
                $data = DataMaintenance::onlyTrashed()->get();
                if (!$data)
                return redirect()->route('showTable')->with(['error' => 'هذا الطلب غير موجود ']);
                return view('admin.blades.archive',compact(['data','id']));
            }

            public function restore($id, Request $request){

                $data = DataMaintenance::withTrashed()->find($id);
                $data->restore();
                return redirect()->route('showTable')->with(['success' => 'تم استرجاع الصيانة  بنجاح']);

            }
            public function archievedMain($id){
                try {
                    $data = DataMaintenance::find($id);
                    if (!$data)
                        return redirect()->route('showTable')->with(['error' => 'هذا القسم غير موجود ']);
                        $data->delete();
                        return redirect()->route('showTable')->with(['success' => 'تم غلق الصيانة  بنجاح']);
                    }catch(\Exception $ex){
                        return redirect()->route('showTable')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
                    }
            }

            public function deleteMain($id,DataMaintenance $data,Request $request){

                $data= DataMaintenance::withTrashed()->find($id);
                $data -> forceDelete();
                return redirect()->route('showTable')->with(['success' => 'تم الحذف بنجاح']);
                $data->delete();
                return redirect()->route('showTable')->with(['success' => 'تم الحذف بنجاح']);
             
            }

        ################################ End process Maintenance ###################################################
      
       public function editprocess($id){

        try{
            $Process = Process::selections()->find($id);
              if(!$Process){
              return redirect()->route('showTableprocess')->with(['error' => 'هذا الطلب غير موجود']);
          }
              $NameProcess = NameProcess::select('id','name')->get();
              $NamePiece = NamePiece::select('id','name')->get();

              return view('admin.blades.editProcess',compact(['Process','NameProcess','NamePiece']));
          }catch(\Exception $ex){

              return redirect()->route('showTableprocess')->with(['error' => 'من فضلك برجاء المحاولة مره اخري  ']);

          }

       }

       public function updateprocess($id,Request $request){
        try{
            $Process = Process::selections()->find($id);
            if(!$Process){
                return redirect()->route('showTableprocess')->with(['error' => 'هذا الطلب غير موجود']);
            } 
                $dataProcess = $request->except('_token','id');
                Process::where('id',$id)->update($dataProcess);
                return redirect()->route('showTableprocess')->with(['success' => 'تم الاضافة بنجاح']);
      
             }catch(\Exception $ex){
                return redirect()->route('showTableprocess')->with(['error' => 'من فضلك برجاء المحاولة مره اخري  ']);
    
            }
       }


       public function deleteprocess($id){
        $Process= Process::find($id);
        if(!$Process)
        return redirect()->route('showTableprocess')->with(['error' => 'من فضلك برجاء المحاولة مره اخري']);
        $Process->delete();
        return redirect()->route('showTableprocess')->with(['success' => 'تم الحذف بنجاح']);
       }

        ################################################################ Begin Invoice ###################
    public function invoice(){
        $data = DataMaintenance::selections()->get();
        return view('admin.blades.invoice',compact('data'));
    }
            ################################################################ End Invoice ###################




        ################################################################ Begin Create Pieces ###################

    public function createPiece(){
        $id = 0;
        $NamePiece = NamePiece::select('id','name','price')->get();
        return view('admin.blades.createPieces',compact(['NamePiece','id']));
    }

    public function storePiece(Pieces $request){
        try{
          

        NamePiece::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return redirect()->back()->with(['success' => 'تم الاضافة بنجاح']);


        }catch(\Exception $ex){
            return redirect()->back()->with(['error' => 'من فضلك برجاء المحاولة مره اخري  ']);

        }
    }
    public function deletePiece($id){
        $NamePiece = NamePiece::find($id);
        if(!$NamePiece)
        return redirect()->back()->with(['error' => 'من فضلك برجاء المحاولة مره اخري']);
        $NamePiece->delete();
        return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
    }

          ################################################################ End Create Pieces ###################


}
