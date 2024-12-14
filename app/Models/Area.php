<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function company()
    {
        return $this->hasOne('App\Models\Company', 'id', 'area_company_id');
    }
}
