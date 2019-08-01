<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';
    protected $primaryKey = 'ticket_id';
    protected $fillable = ['price','free', 'qty', 'sell_end', 'sell_end', 'max_per', 'description', 'event_id'];
}
