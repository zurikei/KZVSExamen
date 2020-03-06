<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArbolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Apaterno=[
            ['nombre' => 'Rufino Velázquez'],
            ['nombre' => 'Uvencia Tamay Pat'],
                     

        ];

        $Amaterno=[
            ['nombre' => 'Idelfonso Sarabia'],
            ['nombre' => 'Petronila Segovia'],
                     

        ];

         $padres=[
            ['nombre' => 'Andres Velázquez'],
            ['nombre' => 'Noemi Sarabia'],
                     

        ];

        $hijos=[
            ['nombre' => 'Keila Zurisadai Velazquez Sarabia'],
            ['nombre' => 'Keila Saaraim Velázquez Sarabia'],
            ['nombre' => 'Elias Velázquez Sarabia'],
                     

        ];
        
        return view('arbol', compact('Apaterno', 'Amaterno','padres','hijos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
