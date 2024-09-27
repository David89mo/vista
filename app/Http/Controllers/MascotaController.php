<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mascota;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all();
        #return($mascotas);
        return view('mascotas.index',compact('mascotas'));
    }
}