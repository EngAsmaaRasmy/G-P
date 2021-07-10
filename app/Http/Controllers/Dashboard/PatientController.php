<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\Interfaces\Patients\PatientRepositoryInterface;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    private $Patient;

    public function __construct(PatientRepositoryInterface $Patient)
    {
        $this->Patient = $Patient;
    }

    public function index()
    {
        return $this->Patient->index();
    }


    public function create()
    {

        return $this->Patient->create();

    }


    public function store(StorePatientRequest $request)
    {
       return $this->Patient->store($request);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return $this->Patient->edit($id);
    }


    public function update(StorePatientRequest $request)
    {
        return $this->Patient->update($request);
    }


    public function destroy(Request $request)
    {
       return $this->Patient->destroy($request);
    }
    public function  mypatients(){
        return $this->Patient->mypatients();

    }

    public  function  diagnosis($id){
        return $this->Patient->diagnosis($id);

    }
    public  function  reqdiagnosis(Request $request){
        return $this->Patient->reqdiagnosis($request);

    }

    public  function mydiagnosis(){
        return $this->Patient->mydiagnosis();
    }
    public function uploadxray(Request $request){
        return $this->Patient->uploadxray($request);
    }
}
