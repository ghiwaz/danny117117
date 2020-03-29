<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class apiListener
{
    public function __construct()
    {
        //
    }

    public function handle($event)
    {
       return $event->data->original;
    }
}
