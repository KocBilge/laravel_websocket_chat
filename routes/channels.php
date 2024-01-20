<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
|
*/

// Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });

Broadcast::channel('messenger.{sender}.{receiver}', function ($user) {
    return !is_null($user);
});

Broadcast::channel('group_chat.{roomId}', function ($user, $roomId) {
    if (true) {
        return ['id' => $user->id, 'name' => $user->name];
    }
});
