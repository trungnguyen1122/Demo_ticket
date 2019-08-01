<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    protected $table = 'kind';
    protected $primaryKey = 'kind_id';
    protected $fillable = ['name', 'parent_id'];

    public function kinds() {
        return $this->hasMany('App\Model\Kind','parent_id', 'kind_id');
    }
    public function parent() {
        return $this->belongsTo('App\Model\Kind', 'parent_id', 'kind_id');
    }
}
