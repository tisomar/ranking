<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalRecord extends Model
{
    protected $table = 'personal_records';

    protected $fillable = ['user_id', 'movement_id', 'value', 'date'];

    public $timestamps = false;

    public function movements(){
        return $this->belongsTo(Movement::class, 'movement_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
