<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NotificationController extends Controller
{
    private $message;
    private $recipeint;

    public function sendMessage(Request $request, Response $response) {

        $input = $request->collect();
        $recipient = $input['recipient'];
        $message = $input['text'];

        if ($response) {
            return response(
                [
                    "status"=>"All Good!",
                    "recipient"=>$recipient,
                    "message"=>$message,
                ]
                , 200);
        }

        return $response;
    }
}
