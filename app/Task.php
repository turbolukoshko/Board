<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }
}
