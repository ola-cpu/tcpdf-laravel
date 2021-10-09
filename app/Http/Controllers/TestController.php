<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class TestController extends Controller
{
    
    public function index(){
            PDF::AddPage('L','A4');

        PDF::SetTitle('momo', 'B',20, '' ,'false');
        PDF::SetY(10);
        PDF::SetX(0);
        PDF::cell(0,0,'momo', 0,false, 'C', 0 ,'',0,false , 'M' ,'M');
       


        PDF::SetTitle('momo', 'B',16, '' ,'false');
        PDF::SetY(30);
        PDF::SetX(10);
        PDF::cell(0,0,'mude', 1,false, 'C', 0 ,'',0,false , 'M' ,'M');



        PDF::SetTitle('momo', 'B',16, '' ,'false');
        PDF::SetY(34);
        PDF::SetX(10);
        PDF::Multicell(40,5,'momo/mude', 1, 'C', 0 ,1,'','',true);



        

        PDF::Output('pdf-report.pdf','I');
    }
}
