<?php

namespace App\Http\Controllers;


use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Exports\SiswasExport;
use App\Imports\SiswasImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Resources\SiswasResource;
use Dompdf\Dompdf;
use PDF;

class SiswasController extends Controller
{
    public function import(){
        $siswas = Siswa::all();
        return view('import', compact('siswas'));
    }

    public function store(Request $request) 
    {

        $file = $request->file;

        Excel::import(new SiswasImport, $file);
        
        return redirect()->back();
    }

    public function export(){
        return Excel::download(new SiswasExport, 'siswa.xlsx');
    }

    public function delete(Siswa $siswas){
        Siswa::destroy($siswas->id);
        return redirect()->back();
    }

    public function show(Siswa $siswa){
        return new SiswasResource($siswa);
    }

    public function exportpdf(){
        $siswas = Siswa::all();

        $pdf = PDF::loadView('exportpdf', compact('siswas'), [
            'data' => $siswas
        ]);
        return $pdf->download('invoice.pdf');
    }
}
