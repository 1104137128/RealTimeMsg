<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\ChatRoom;
use App\Models\ChatMessage;
use App\Events\NewChatMessage;

class ChatController extends Controller
{

    public function rooms() {
        return ChatRoom::all();
    }

    public function messages(Request $request, $room_id) {
        return ChatMessage::where('chat_room_id', $room_id)->with('user')->orderBy('created_at', 'DESC')->get();
    }

    public function newMessage(Request $request, $room_id) {
        $chat_message = new ChatMessage;
        $chat_message->user_id = Auth::id();
        $chat_message->chat_room_id = $room_id;
        $chat_message->message = $request->message;
        $chat_message->save();

        broadcast(new NewChatMessage($chat_message))->toOthers();

        return $chat_message;

    }


}
