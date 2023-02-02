<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Http\Contorollers\MIssionController;
use Illuminate\Database\Eloquent\SoftDeletes;
class Mission extends Model
{
    use HasFactory;
    use SoftDeletes;
   
    protected $fillable = [
    'mission_title',
    'mission_body',
    'category_id'
    ];
    
        public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
        public function mission_todays()
    {
        return $this->hasMany(Mission_today::class);
    }
}
