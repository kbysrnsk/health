<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Http\Contorollers\MIssionController;
class Mission extends Model
{
    use HasFactory;
    
    protected $table = 'mission';
    protected $fillable = [
    'mission_title',
    'mission_body',
    'category_id'
    ];
    
        public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
