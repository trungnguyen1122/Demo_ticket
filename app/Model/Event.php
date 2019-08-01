<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    protected $primaryKey = 'event_id';
    protected $fillable = ['name','kind','user_id','city_id','district_id', 'event_info', 'logo', 'organizer', 'address', 'phone_org',
        'email_org','email_org', 'event_start', 'event_end', 'status', 'is_confirm'];
    public function tickets(){
        return $this->hasMany('App\Model\Ticket','event_id', 'event_id');
    }
    public function user() {
        return $this->hasOne('App\User', 'user_id', 'user_id');
    }

}
