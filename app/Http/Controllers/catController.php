<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
    public function about () {
        return view('about');
    }
    
    public function list () {
        $list = [
            "title" => [
                "Uncanny Valley","Ready Player Two","Later"
            ],
            "isbn" => [
                "9780374719760","9788418037092","9781789096507"
            ],
            "category" => [
              "Biography","Science Fiction","Fiction"
            ],
            "pages" => [
                "288","366","256"
            ]
          ];
        return view('list', compact('list'));
    }
}

/*
  $list = array(
    array('Uncanny Valley','Ready Player Two', 'Later'),
    array(9780374719760,9788418037092,9781789096507),
    array('Biography','Science Fiction','Fiction'),
    array(288,366,256)
);
*/