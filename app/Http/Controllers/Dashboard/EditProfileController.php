<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditProfileRequest;

class EditProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('Dashboard.Admin.edit-profile', compact('user'));
    }

    public function update(EditProfileRequest $request)
    {
        auth()->user()->update($request->validated());
        session()->flash("success", 'Edited');
        return back();
    }
}
