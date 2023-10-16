<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\TicketUpdateRequest;
use App\Http\Controllers\StatusController;
use App\Models\Status;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::latest()->paginate(10);
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tickets.create');
    }

    public function delete(Ticket $ticket)
    {
        return view('tickets.delete', compact('ticket'));
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(TicketUpdateRequest $request)
    {
        Ticket::create([
            'summary' => request('summary'),
            'description' => request('description'),
            'status' => request('status'),
        ]);
        return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        $statuses=Status::get();
        return view('tickets.show', compact(['ticket','statuses']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketUpdateRequest $request, Ticket $ticket)
    {
        
        $ticket->summary = request('summary');
        $ticket->description = request('description');
        $ticket->status = request('status');
        $ticket->save();
        return redirect()->route('tickets.index')->withSuccess('Ticket has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->withError('Ticket has been deleted');
    }
}