<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'duration',
        'description',
        'result',
        'tech_stack',
        'image',
        'category',
        'client_name',
        'completed_at',
        'order',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'completed_at' => 'date',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
