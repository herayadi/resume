<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies'; 

    protected $fillable=[
        'name',
        'location',
        'website'
    ];

    public function clients() { 
        return $this->hasMany(Client::class); 
    }
}

