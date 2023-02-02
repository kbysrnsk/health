<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Contorollers\MissionController;
use App\Models\Mission;
class Category extends Model
{
            public function missions()   
        {
            return $this->hasMany(Mission::class);  
        }
        
   
}
