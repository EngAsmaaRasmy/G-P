<?php


namespace App\Repository\Patients;
use App\Interfaces\Patients\PatientRepositoryInterface;
use App\Models\Patient;
use App\Models\User;
use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Auth;
use App\Traits\UploadTrait;



class PatientRepository implements PatientRepositoryInterface
{
    use UploadTrait;
   public function index()
   {
       $Patients = Patient::all();
       return view('Dashboard.Patients.index',compact('Patients'));
   }

   public function create()
   {
       return view('Dashboard.Patients.create');
   }

   public function store($request)
   {
       try {
           $Patients = new Patient();
           $Patients->email = $request->email;
           $Patients->Password = Hash::make($request->ssn);
           $Patients->Date_Birth = $request->Date_Birth;
           $Patients->Phone = $request->Phone;
           $Patients->Gender = $request->Gender;
           $Patients->Blood_Group = $request->Blood_Group;
           $Patients->save();
           //insert trans
           $Patients->name = $request->name;
           $Patients->Address = $request->Address;
           $res = $Patients->save();
           if($res){
               $user = new User();
               $user->id = $Patients->id;
               $user->email = $request->email;
               $user->name = $request->name;
               $user->Password = Hash::make($request->ssn);
               $user->save();
           }
           session()->flash('add');
           return redirect()->back();
       }

       catch (\Exception $e) {
           return redirect()->back()->withErrors(['error' => $e->getMessage()]);
       }
   }

   public function edit($id)
   {
       $Patient = Patient::findorfail($id);
       return view('Dashboard.Patients.edit',compact('Patient'));
   }
   public function update($request)
   {
       $Patient = Patient::findOrFail($request->id);
       $Patient->email = $request->email;
       $Patient->Password = Hash::make($request->Phone);
       $Patient->Date_Birth = $request->Date_Birth;
       $Patient->Phone = $request->Phone;
       $Patient->Gender = $request->Gender;
       $Patient->Blood_Group = $request->Blood_Group;
       $Patient->save();
       // insert trans
       $Patient->name = $request->name;
       $Patient->Address = $request->Address;
       $Patient->save();
       session()->flash('edit');
       return redirect()->route('Patients.index');
   }

   public function destroy($request)
   {
       Patient ::destroy($request->id);
       session()->flash('delete');
       return redirect()->back();
   }
   public  function  mypatients(){
       $id  = Auth::user()->id;
       $Patients = DB::select("
       SELECT * FROM `users`
INNER JOIN (SELECT * FROM `single_invoices` WHERE `single_invoices`.`doctor_id` = $id     )single_invoices
ON `users`.`id` = `single_invoices`.`patient_id`
inner join  `patients` on  `users`.`id` = `patients`.`id`

       ");
       return view('Dashboard.Patients.index',compact('Patients'));

   }

   public function  diagnosis($id){
       $Patient = Patient::findorfail($id);
       return view('Dashboard.Patients.diagnosis',compact('Patient'));
   }

   public  function reqdiagnosis($request){
//       dd($request);

       $Patient = Patient::findOrFail($request->id);
       $Patient->diagnosis = Crypt::encryptString($request->diagnosis);
       $Patient->save();
       session()->flash('edit');
       return redirect()->route('mypatients');
   }

   public  function mydiagnosis(){
        $id  = Auth::user()->id;
       $Patient = DB::select("
       SELECT * FROM `users`
INNER JOIN (SELECT * FROM `single_invoices` WHERE `single_invoices`.`patient_id` = $id)single_invoices
ON `users`.`id` = `single_invoices`.`patient_id`
inner join  `patients` on  `users`.`id` = `patients`.`id`

       ");
       $Patient = $Patient[0];
//       dd($oa)
       return view('Dashboard.Patients.diagnosis',compact('Patient'));
   }

   public function uploadxray($request){
       //Upload img
        $user_id = Auth::user()->id;
        DB::table("user_xray")->insert([
              'user_id'=>$user_id,
               'xray'=>$user_id
        ]);
       $request['name'] = $user_id;
       $this->verifyAndStoreImage($request,'photo','xray','upload_image',$user_id,'App\Models\Patient');

       return redirect()->route('mydiagnosis');

   }

}
