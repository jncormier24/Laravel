<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $dates    = ["published"];
    protected $fillable = [
        "title",
        "body",
        "published"
    ];

    public function scopePublished($query){
        $query->where("published", "<=", Carbon::now());
    }
    public function setPublishedAttribute($date){
        $this->attributes["published"] = Carbon::parse($date);
    }
}
