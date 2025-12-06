<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients'; 
    protected $fillable=[
        'companyId',
        'name',
        'location',
        'website'
    ];

    public function company() { 
        return $this->belongsTo(Company::class, 'companyId'); 
    }


    public function experiences() { 
        return $this->hasMany(Experience::class, 'clientId'); 
    }
}
