<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory;
    protected $table = 'instruments';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'instrument_id');
    }

}
