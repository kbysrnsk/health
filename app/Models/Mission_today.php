<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Mission;
use App\Http\Contorollers\MIssionController;
class Mission_today extends Model
{
    use HasFactory;
    protected $fillable = [
    'mission_title',
    'mission_body',
    'category_id',
    'achievement'
    ];
    
    public function mission()   
    {
        return $this->belongsTo(Mission::class);  
    }
    
    public function user()   
    {
        return $this->belongsTo(User::class);  
    }
}
