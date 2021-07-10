<?php


namespace App\Interfaces\Patients;


interface PatientRepositoryInterface
{
    // Get All Patients
    public function index();
    // Create New Patients
    public function create();
    // Store new Patients
    public function store($request);
    // edit Patients
    public function edit($id);
    // update Patients
    public function update($request);
    // Deleted Patients
    public function destroy($request);

    public  function  mypatients();

    public  function  diagnosis($id);

    public  function reqdiagnosis($request);

    public function  mydiagnosis();

    public function uploadxray($request);
}
