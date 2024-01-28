<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballMatch extends Model
{
    use HasFactory;
    protected $table = 'matches'; 


    protected $fillable = [
        'team1_id', 
        'team2_id', 
        'date_time', 
        'result_team1', 
        'result_team2'
    ];

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }

    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }
    
    protected $casts = [
        'date_time' => 'datetime',
    ];
    
}
