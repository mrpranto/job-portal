<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model){
            $model->fill([
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        });
        static::updating(function ($model){
            $model->fill([
                'updated_at' => Carbon::now(),
            ]);
        });
    }

    public function scopeOrderDesc($q){
        return $q->orderBy('id','desc')->get();
    }

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function job_applies(){
        return $this->hasMany(JobApply::class);
    }
}
