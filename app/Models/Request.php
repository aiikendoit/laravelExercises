<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'transporters_name',
        'patient_name',
        'requesters_name',
        'department',
        'time_req_received',
        'time_left',
        'time_returned',
        'equipments',
        'source',
        'destination',
        'remarks',
    ];
}
