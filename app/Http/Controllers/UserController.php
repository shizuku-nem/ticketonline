<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::paginate(10);
        return view(
            'users.index',
            ['users' => $users]
        );
    }
    
    /**
     * Show a listing of trips.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchtrip(Request $request) {
        $start_point = (string) '%'.$request->start_point.'%';
        $end_point = (string) '%'.$request->end_point.'%';
        $start_time = new DateTime($request->start_time);
//        $query = User::where('name', 'LIKE', '%' . $term . '%');
        //echo $start_point.$end_point;
        $trips = DB::table('trips')
            ->join('provinces as A', 'trips.start_point_id', '=', 'A.id')
            ->join('provinces as B', 'trips.end_point_id', '=', 'B.id')
            ->join('cars', 'trips.car_id', '=', 'cars.id')
            ->where([
                ['A.name', 'LIKE', $start_point],
                ['B.name', 'LIKE', $end_point],
            ])
            ->whereDate('start_time', $start_time->format('Y-m-d'))
            ->select('trips.*', 'cars.*', "A.name AS start_point", "B.name AS end_point")
            ->get();
        return $trips;
    }

    public function getlistprovinces()
    {
        $provinces = DB::table('provinces')->get();
        return response()->json($provinces, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
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
        $user = new User();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('users.index');
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
        $user = User::find($id);
        return view(
            'users.show',
            ['user' => $user]
        );
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
        $user = User::find($id);
        return view(
            'users.edit',
            ['user' => $user]
        );
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
        $user = User::find($id);
        $user->password = $request->password;
        $user->save();
        return redirect()->route('users.index');
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
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
