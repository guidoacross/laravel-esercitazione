<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\MessageResource;
use App\Http\Requests\StoreMessageRequest;
use App\Message;

class MessageController extends Controller
{
    public function index() {
        $users = Message::all();
        return MessageResource::collection($users);
    }

    public function show(Message $message) {
        return new MessageResource($message);
    }

    public function store(StoreMessageRequest $request) {
        $message = Message::create($request->all());
        return new MessageResource($message);
    }

    public function update(Message $message, StoreMessageRequest $request) {
        $message->update($request->all());
        return new MessageResource($message);
    }

    public function destroy(message $user){
        $user->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }

}
