<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MessageResource;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $users = Message::all();
        return MessageResource::collection($users);
    }

    public function show(Message $message)
    {
        return new MessageResource($message);
    }

}
