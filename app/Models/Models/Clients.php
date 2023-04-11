<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    
    protected $table = 'clients';
    protected $guarded = [];
    protected $dates = ['date_birth'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'document',
        'date_birth',
        'genre',
        'address',
        'states',
        'city'
    ];

}
