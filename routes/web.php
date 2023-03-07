<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ChatController;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse AS Http;
use Illuminate\Http\Exceptions\HttpResponseException;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;
use LINE\LINEBot\MessageBuilder\ImageMessageBuilder as ImageMessageBuilder;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/PigFrogBlog', function () {
    return Inertia::render('PigFrogBlog');
})->name('pigfrogblog');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/chat', function () {
    return Inertia::render('Chat/container');
})->name('chat');

Route::middleware('auth:sanctum')->get('/chat/rooms', [ChatController::class, 'rooms']);
Route::middleware('auth:sanctum')->get('/chat/room/{roomId}/messages', [ChatController::class, 'messages']);
Route::middleware('auth:sanctum')->post('/chat/room/{roomId}/message', [ChatController::class, 'newMessage']);


Route::post('Bot/replyMessage', function (Request $request) {

    $bot = new \LINE\LINEBot( new CurlHTTPClient('UKsGTUjYUrTYCu757+QkE/e/I4kfYGiMJxzZf2+h0FfTQX1ThkWb9quH6CN5YKAocuLiiY8zC6bGy+eY7bPNmj2ZWlahlRomjfN+6stQJqUeUXCFO2HMiGQVi3JbQjsXLxJcjDx1R+jg1kAZlm5VVgdB04t89/1O/w1cDnyilFU='), [
        'channelSecret' => '5ec1c221e9cdcb6ea32b279838cb1763'
    ]);

    DB::table('test')->insert(['test' => json_encode($request->events)]);

    foreach ($request->events as $event) {
        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Hi 我正在將機器人加上爬蟲功能，還在開發中ing...');

        $bot->replyMessage($event['replyToken'], $textMessageBuilder);

        // $bot->replyMessage($event['replyToken'], new ImageMessageBuilder(
        //    'https://pigfrog.ddns.net/images/IMG_20210410_215203.jpg',
        //    'https://pigfrog.ddns.net/images/IMG_20210410_215203.jpg'
        // ));
    }

    throw new HttpResponseException(
        response()->json([], Http::HTTP_OK)
    );

});
