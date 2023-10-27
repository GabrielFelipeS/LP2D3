<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CafeBistroController extends BaseController
{
   public function listarCafes() {
        $cafes = [
            'Cafe com leite',
            'Cafe gelado',
            "cafe cremoso",
            'Cappuccino'
        ];
        $html = '<ul>';
        foreach($cafes as $cafe) {
            $html .= "<li>$cafe</li>";
        }
        $html .= '</ul>';
        echo $html;
   }
}
