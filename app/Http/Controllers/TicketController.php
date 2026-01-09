<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::where('user_id', auth()->id())->latest()->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'priority' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'nullable|date',
        ]);

        Ticket::create([
            'title' => $request->title,
            'category' => $request->category,
            'priority' => $request->priority,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'user_id' => auth()->id(),
        ]);

        return redirect('/dashboard');
    }
}
