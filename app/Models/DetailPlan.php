<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPlan extends Model
{
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    protected $table = 'details_plan';

    protected $fillable = ['name'];
}
