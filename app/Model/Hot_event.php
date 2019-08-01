<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Hot_event extends Model
{
    protected $table = 'hot_event';
    protected $primaryKey = 'event_id';
    public function event() {
        return $this->hasOne('App\Model\Event', 'event_id', 'event_id');
    }

}
