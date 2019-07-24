<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
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

   public function employer(){
       return $this->belongsTo(Employer::class);
   }

   public function job(){
       return $this->belongsTo(Job::class);
   }

   public function applicant(){
       return $this->belongsTo(Applicant::class);
   }


}
