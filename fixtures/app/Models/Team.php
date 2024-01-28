<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'year_of_foundation'
    ];

    public function user()
    {
       
        return $this->belongsTo(User::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function matches()
    {
        return $this->hasMany(FootballMatch::class, 'team1_id')->orWhere('team2_id', $this->id);
    }
}
