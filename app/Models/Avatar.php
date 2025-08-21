<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = ['image','about_id'];

    public function about()
    {
        return $this->belongsTo(About::class);
    }
}
