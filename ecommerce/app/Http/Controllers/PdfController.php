<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function test(){
        $data = "Laravel E-commerce Project";
        $pdf = PDF::loadView('pdf.test', compact('data'));
        return $pdf->download('statement.pdf');
    }
}
