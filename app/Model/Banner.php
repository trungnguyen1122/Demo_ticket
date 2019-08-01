<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    protected $primaryKey = 'banner_id';
    protected $fillable = ['img','status', 'description'];
    public $timestamps= false;
}
