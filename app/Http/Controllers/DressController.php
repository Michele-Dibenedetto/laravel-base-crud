<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dress;
use Illuminate\Auth\Events\Validated;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dresses = Dress::all();

        $data = [
            "dresses" => $dresses
        ];

        return view("dresses.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dresses.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();

        $request->validate([
            "taglia" => "required|max:10",
            "tipo" => "required|max:20",
            "colore" => "required|max:30",
            "sesso" => "required|max:10",
            "costo" => "required|numeric",
            "marca" => "required|max:50",
            "immagine" => "required",
        ]);

        $newDress = new Dress;

        $newDress->fill($data);

        $newDress->save();

        return redirect()->route("dresses.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id) {

            $dress = Dress::find($id);

            $data = [
                "dress" => $dress
            ];

            return view("dresses.details", $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($id) {

            $dress = Dress::find($id);

            $data = [
                "dress" => $dress
            ];

            return view("dresses.update_form", $data);
        }
        abort(404);
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
        if ($id) {
            $data = $request->all();
            $request->validate([
                "taglia" => "required|max:10",
                "tipo" => "required|max:20",
                "colore" => "required|max:30",
                "sesso" => "required|max:10",
                "costo" => "required|numeric",
                "marca" => "required|max:50",
                "immagine" => "required",
            ]);
            $dress = Dress::find($id);
            $dress->update($data);

            return redirect()->route("dresses.index");
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id) {

            $dress = Dress::find($id);

            $dress->delete();

            return redirect()->route("dresses.index");
        }
        abort(404);
    }
}
