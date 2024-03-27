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
        // search for analyses
        $query->when($filters["analyses"] ?? false, function ($query, $analyses) {
            return $query->whereExists(function ($query) use ($analyses) {
                $query->select("id")
                    ->from("labs")
                    ->whereColumn("id", "analyses.id")
                    ->where("name", $analyses);
            });
        });
    }
    protected $with = ["labs"];
    public function labs()
    {
        return $this->belongsTo(Lab::class, "lab_id");
    }
}
