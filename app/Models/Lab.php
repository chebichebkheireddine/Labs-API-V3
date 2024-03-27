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
        // when to bulde the scope query localy
        $query->when($filters["labs"] ?? false, function ($query, $analyses) {
            return $query->whereExists(function ($query) use ($analyses) {
                $query->select("id")
                    ->from("analyses")
                    ->whereColumn("id", "labs.id")
                    ->where("id", $analyses);
            });
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
