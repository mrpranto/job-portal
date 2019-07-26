<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = [];

    protected $fillable = [
       'employer_id', 'category_id', 'title', 'description', 'salary', 'country', 'location', 'job_type', 'status'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model){
            $model->fill([
                'employer_id' => 1,
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

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
