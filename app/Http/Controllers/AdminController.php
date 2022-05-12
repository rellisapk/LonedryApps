<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orders;
use App\Models\Treatments;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getData()
    {
        // $client = new Client();
        // $response = $client->request('GET','http://localhost:8000/api/treatment/index');
        // $statusCode = $response->getStatusCode();
        // $body = $response->getBody()->getContents();

        // $data[]= array(json_encode($body,true));

        // //return view('loker.loker',['data'=>$data]);
        // $title = 'Treatments';
        // if (request('category')) {
        //     $title = "Semua Treatments";
        // }
        // return view('admin.home', [
        //     'data'=> $data,
        //    'title' => 'Treatments' . $title,
        //     'active' => 'events',
        //     'lokers' => Treatments::all()
        // ]);
        $user = User::all();
        $orders = DB::table('orders')
                    ->join('users','users.id','=','orders.user_id')
                    ->join('treatments','treatments.id','=','orders.treatment_id')
                    ->select('orders.*', 'users.name as u_name','treatments.name as t_name')
                    ->get();
        $treatments = Treatments::all();
        return view('admin.home', ['user' => $user,'orders'=>$orders,'treatments'=>$treatments]);
    }

    public function addUsers()
    {
        return view("admin.addUsers");

    }

    public function storeUsers(Request $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->phone = $request->phone;
        $users->password = $request->password;
        $users->save();

        return redirect()->to('home/admin');
    }

    public function makeAdmin(Request $request) //user
    {

        User::where('id',$request->id)->update([
            'is_Admin'=>$request->isAdmin,
        ]);
        return redirect()->to('home/admin')->withErrors(['msg' => 'Data Treatment telah diupdate.']);;
    }

    public function deleteUsers($id)
    {
    DB::table('users')->where('id',$id)->delete();
    return redirect('/home/admin');
    }

    public function addTreatments()
    {
        return view("admin.addTreatments");

    }

    public function storeTreatments(Request $request)
    {
        $treatments = new Treatments;
        $treatments->name = $request->name;
        $treatments->price = $request->price;
        $treatments->duration = $request->duration;
        $treatments->save();

        return redirect()->to('home/admin');
    }

    public function editTreatments($id)
    {

        $treatments = DB::table('treatments')->where('id',$id)->get();
        return view('admin.editTreatments',['treatments'=>$treatments]);

    }
    public function updateTreatments(Request $request, $id)
    {
        Treatments::where('id',$request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'duration' => $request->duration,
        ]);
        return redirect()->to('home/admin');
    }

    public function deleteTreatments($id)
    {
    DB::table('treatments')->where('id',$id)->delete();
    return redirect('/home/admin');
    }

    public function editOrder($id)
    {
        $treatments = Treatments::all();
        $orders = DB::table('orders')
                    ->where('orders.id',$id)
                    ->join('users','users.id','=','orders.user_id')
                    ->join('treatments','treatments.id','=','orders.treatment_id')
                    ->select('orders.*', 'users.name as u_name','users.address','treatments.name as t_name')
                    ->get();
        return view('admin.editOrder',['orders'=>$orders,'treatments'=>$treatments]);

    }
    public function updateOrder(Request $request)
    {
        Orders::where('id',$request->id)->update([
            'status'=> $request->status,
            'berat' => $request->berat,
            'total' => $request->total,
            'deskripsi' =>$request->deskripsi
        ]);
        return redirect()->to('home/admin');
    }

    public function deleteOrder($id)
    {
    DB::table('orders')->where('id',$id)->delete();
    return redirect('/home/admin');
    }
}
