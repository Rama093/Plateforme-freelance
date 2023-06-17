<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Http\Request;


class ConversationController extends Controller
{
    public function index()
    {
        $conversations = auth()->user()->conversations()->latest()->get();

        return view('conversations.index', compact('conversations'));
    }

    public function show(Conversation $conversation)
    {
        return view('conversations.show', compact('conversation'));
    }
}
