<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index(Request $request)
    {
        // $this->params['name'] = "Halo, " . $_GET['dari'];
        $this->params['tes'] = "Halo, ";
        // ddd($this->params['name']);
        return \view('wedding', $this->params);
        // return \view('wedding');
    }
}
