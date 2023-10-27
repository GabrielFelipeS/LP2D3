<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeBistrol2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request) {
    //     return $request->get('id');
    //     $cafes = [
    //         'Cafe com leite',
    //         'Cafe com chocolate',
    //         'Cafe gelado',
    //         "cafe cremoso",
    //         'Cappuccino'
    //     ];
    //     $html = '<ul>';
    //     foreach($cafes as $cafe) {
    //         $html .= "<li>$cafe</li>";
    //     }
    //     $html .= '</ul>';
    //     return $html;
    // }
    public function index(Request $request) {
        $cafes = [
            'Cafe com leite',
            'Cafe com chocolate',
            'Cafe gelado',
            "cafe cremoso",
            'Cappuccino'
        ];
        return view('cafes/index')->with('cafes', $cafes);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view("cafes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
