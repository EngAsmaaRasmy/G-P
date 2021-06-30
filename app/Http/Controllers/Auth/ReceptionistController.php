<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ReceptionistLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceptionistController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(ReceptionistLoginRequest $request)
    {
        if( $request->authenticate()){
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::RECEPTIONIST);
        }

        return redirect()->back()->withErrors(['name' => (trans('Dashboard/auth.failed'))]);
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy(Request $request)
    {
        Auth::guard('receptionist_logins')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
