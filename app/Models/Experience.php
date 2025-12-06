<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences'; 
    protected $fillable=[
        'clientId',
        'title',
        'startDate',
        'endDate',
        'description',
        'isCurrent'
    ];

    public function client() { 
        return $this->belongsTo(Client::class); 
    }
}
