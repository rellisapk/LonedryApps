<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Treatments;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if ($request->user()->is_admin == 1) {
            $order = Orders::all();

            return response()->json(
                [
                    'message' => 'Data data order',
                    'data' => $order
                ],
                200
            );
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
        $order = new Orders;
        $order->user_id = $request->user_id;
        $order->treatment_id = $request->treatment_id;
        $order->berat = $request->berat;
        $order->total = $request->total;
        $order->deskripsi = $request->deskripsi;
        $order->save();

        // $treatment = Treatments::all();
        // foreach($request->treatment as $treatment){
        //     $order->treatment_id = $treatment;
        //     $servis = Treatments::where('id', $treatment)->first();
        //     $totalHarga = $servis->price * $request->berat;
        //     $order->total = $totalHarga;
        //     $order->save();
        // }
        // // $servis = Treatments::where('id', $treatment)->first();
        // // $totalHarga = $servis->price * $request->berat;
        // // $order->total = $totalHarga;
        // // $order->save();

        return response()->json(
            [
                'message' => 'Pesanan berhasil dibuat',
                'data' => $order
            ],
            200
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = request('id');
        $order = Orders::where('id',$id)->get();

        return response()->json(
            [
                'message' => 'Data order',
                'data' => $order
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $order = Orders::where('id',$request->id)->update([
            'customer' => $request->user()->id,
            'treatments' => $request->treatments,
            'berat' => $request->berat,
            'total' => $request->total,
            'deskripsi' => $request->deskripsi
        ]);

        return response()->json(
            [
                'message' => 'Pesanan berhasil diupdate',
                'data' => $order
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $order = Orders::where('id', $request->id)->first();
        $order->delete();

        return response()->json(
            [
                'message' => 'Data berhasil dihapus',
            ],
            200
        );
    }
}
