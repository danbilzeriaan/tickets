<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Status;
use App\Http\Requests\TicketUpdateRequest;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::latest()->paginate(10);
        return view ('tickets/index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    public function delete(Ticket $ticket)
    {
      return view ('tickets.delete', compact('ticket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $statuses = status::get();
        $tickets = ticket::find($id);
        return view ('tickets.show', compact(['tickets', 'statuses']));
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
    public function update(TicketUpdateRequest $request, Ticket $ticket)
    {
        $ticket->summary = request('summary');
        $ticket->description = request('description');
        $ticket->status = request('status');
        $ticket->save();

        return redirect()->route('tickets.index')->withSuccess('Ticket has been Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {

        $ticket->delete();
        return redirect()->route('tickets.index')->withError('Ticket has been deleted');
    }
}
