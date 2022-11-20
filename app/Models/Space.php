<?php

namespace App\Models;
use App\Enums\TableLocation;
use App\Enums\TableStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;
    protected $fillable =['name','guest_numer','status','location'];

    protected $casts=[
        'status'=>TableStatus::class,
        'location'=>TableLocation::class
    ];
}
