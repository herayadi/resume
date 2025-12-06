<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

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

    protected $casts = [
        'startDate' => 'date',
        'endDate'  => 'date',
        'isCurrent' => 'boolean',
    ];

    public function client() { 
        return $this->belongsTo(Client::class,'clientId'); 
    }

    protected function startMonthYear(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->startDate?->format('M Y')
        );
    }

    protected function endMonthYear(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->isCurrent ? 'Present' : ($this->endDate?->format('M Y') ?? 'Present')
        );
    }

    protected function period(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->startDate?->format('M Y') . ' – ' . ($this->isCurrent ? 'Present' : ($this->endDate?->format('M Y') ?? 'Present'))
        );
    }
}