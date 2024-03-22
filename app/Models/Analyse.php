<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analyse extends Model
{
    use HasFactory;
    // protected $fillable=["name","parms","value","result"];
    public $timestamps = false;
    public function scopeFilter($query, array $filters)
    {
        // when to bulde the scope query localy
        $query->when($filters["search"] ?? false, function ($query, $search) {
            return $query->where("name", "like", "%" . $search . "%")
                ->orWhere("parms", "like", "%" . $search . "%");
        });

        // if ($filters["search"] ?? false) {
        //     $query->where("name", "like", "%" . request("sherch") . "%")
        //         ->orWhere("address", "like", "%" . request("sherch") . "%");
        // }
    }
    protected $with = ["labs"];
    public function labs()
    {
        return $this->belongsTo(Lab::class, "lab_id");
    }
}
