<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    public $timestamps = false;
    // protected $with=["analyses"];
    public function scopeFilter($query, array $filters)
    {
        // when to bulde the scope query localy
        $query->when($filters["search"] ?? false, function ($query, $search) {
            return $query->where("name", "like", "%" . $search . "%")
                ->orWhere("address", "like", "%" . $search . "%");
        });
        // Lab  category search
        $query->when($filters["analyses"] ?? false, function ($query, $search) {
            return $query->where("name", "like", "%" . $search . "%")
                ->orWhere("address", "like", "%" . $search . "%");
        });


        // if ($filters["search"] ?? false) {
        //     $query->where("name", "like", "%" . request("sherch") . "%")
        //         ->orWhere("address", "like", "%" . request("sherch") . "%");
        // }
    }
    public function analyses()
    {
        return $this->hasMany(Analyse::class);
    }
}
