<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use App\Models\Space;
use Illuminate\Http\Request;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // //
        //  $reservations = Reservation::all(); 
        return view('admin.reservation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $spaces = Space::all();
        // return view('admin.reservation.create', compact('spaces'));
    }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *  public function store(ReservationStoreRequest $request)
     */
    public function store(Request $request)
    {
        //
        // Reservation::create($request->validated());
        // return to_route('admin.reservation.index');
        //  Reservation::create([
        //     'first_name'=>$request->first_name,
        //     'last_name'=>$request->last_name,
        //     'phone_no'=>$request->phone_no,
        //     'table_id'=>$table_id,
        //     'guest_number'=>$guest_number,
        //     'reserve_date'=>$reserve_date,
        //     'email'=>$email,

        // ]);
        //  return to_route('admin.reservation.index');
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
