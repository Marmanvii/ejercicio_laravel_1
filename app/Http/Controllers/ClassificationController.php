<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classification;
use App\Manager;
use App\Info;

class ClassificationController extends Controller
{

    public function index()
    {
        $classifications = Classification::all();
        return view('classifications.index', compact('classifications'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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

    public function destroy($id)
    {
        //
    }

    public function getClassificationByManager ($id) 
    {
        $classification = Manager::find($id)->classification;
        return $classification;
    }
    
    public function getClassificationByInfo ($id) 
    {
        $classification = Info::find($id)->classification;
        return $classification;
    }
}
