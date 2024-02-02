<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservation = Reservation::orderBy('reservation_date', 'DESC')->get();

        return view('reservations.index', compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Reservation::create($request->all());

        return redirect()->route('reservations')->with('success', 'Reservation added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reservation = Reservation::findOrFail($id);

        $reservation->update($request->all());

        return redirect()->route('reservations')->with('success', 'Reservation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservation = Reservation::findOrFail($id);

        $reservation->delete();

        return redirect()->route('reservations')->with('success', 'Reservation deleted successfully');
    }
}
