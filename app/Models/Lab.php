<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    public $timestamps = false;
    // protected $with=["analyses"];
    public function scopeFilter($query)
    {
        if (request("sherch")) {
            return $query->where("name", "like", "%" . request("sherch") . "%")
                ->orWhere("address", "like", "%" . request("sherch") . "%");
        }
    }
    public function analyses()
    {
        return $this->hasMany(Analyse::class);
    }
}
