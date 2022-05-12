<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Treatments;
use App\Models\User;
use Illuminate\Http\Request;

class TreatmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if ($request->user()->isAdmin()) {
            $treatment = Treatments::all();

            return response()->json(
                [
                    'message' => 'Data data treatment',
                    'data' => $treatment
                ],
                200
            );
            // )
            // ->header('Accept: application/json', $type)
            // ->header('Content-type: application/json', $type);
        // }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($request->user()->isAdmin()) {

            $treatment = new Treatments;
            $treatment->name = $request->name;
            $treatment->price = $request->price;
            $treatment->duration = $request->duration;
            $treatment->save();

            return response()->json(
                [
                    'message' => 'Data treatment berhasil ditambahkan',
                    'data' => $treatment
                ],
                200
            );
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatments  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // if ($request->user()->isAdmin()) {
            $id = request('id');
            $treatment = Treatments::where('id',$id)->get();

            return response()->json(
                [
                    'message' => 'Data treatment',
                    'data' => $treatment
                ],
                200
            );
        // }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatments  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if ($request->user()->isAdmin()) {

            // $treatment = Treatments::where('id',$request->id);
            $treatment = Treatments::findOrFail($id);

            $treatment->name = $request->name;
            $treatment->price = $request->price;
            $treatment->duration = $request->duration;

            $treatment->update();

            return response()->json(
                [
                    'message' => 'Data treatment berhasil diubah',
                    'data' => $treatment
                ],
                200
            );
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatments  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // if ($request->user()->isAdmin()) {
        $treatment = Treatments::where('id', $request->id)->first();
        $treatment->delete();

            return response()->json(
                [
                    'message' => 'Data berhasil dihapus',
                ],
                200
            );
        // }
    }
}
