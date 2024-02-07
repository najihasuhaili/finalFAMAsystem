<?php

namespace App\Observers;

use App\Models\BorangPermohonan;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class BorangPermohonanActionObserver
{
    public function created(BorangPermohonan $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'BorangPermohonan'];
        $users = \App\Models\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function updated(BorangPermohonan $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'BorangPermohonan'];
        $users = \App\Models\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function deleting(BorangPermohonan $model)
    {
        $data  = ['action' => 'deleted', 'model_name' => 'BorangPermohonan'];
        $users = \App\Models\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}
