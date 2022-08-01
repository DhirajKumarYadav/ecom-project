<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    public $table='leaves';
    protected $fillable = [
        'user','user_name','ltype','sdate',
        'edate', 'reason'
    ];

    public $timestamps = false;
}
