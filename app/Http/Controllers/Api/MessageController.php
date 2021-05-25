<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Http\Resources\MessageResource;
use App\Http\Requests\StoreMessageRequest;
use App\Message;

/**
 * @group Messages
 * 
 * Managing messages
 */

class MessageController extends Controller
{

    /**
     * Get Messages
     * 
     * List all the messages.
     */

    public function index() {
        $messages = Message::all();
        return MessageResource::collection($messages);
    }

    /**
     * Get Messages
     * 
     * Get a message by id.
     * 
     * @param Message $message The id of message.
     */
    public function show(Message $message) {
        return new MessageResource($message);
    }

    public function store(StoreMessageRequest $request) {
        $request->validated();
        try {
            $message = Message::create($request->all());
            return new MessageResource($message);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Message $message, StoreMessageRequest $request) {
        $request->validated();
        try {            
            $message->update($request->all());
            return new MessageResource($message);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy(Message $message){
        $message->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
