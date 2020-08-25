<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Detail;

use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ExportController extends Controller{	

	public function exportExcel(){
		return Excel::download(new DataExport, 'data.xlsx');
	}

}
