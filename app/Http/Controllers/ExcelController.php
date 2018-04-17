<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Participant;

class ExcelController extends Controller
{
    public function index(){
        return Excel::download(Participant::all(), 'invoices.xlsx');
 	}
}
