<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminTicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::latest()->get();
        return view('admin.tickets', compact('tickets'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $ticket->update([
            'status' => $request->status,
        ]);

        return back();
    }
}