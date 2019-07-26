<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employer extends Authenticatable
{
    protected $guard = 'employer';
    protected $guarded = [];

    protected $fillable = [
        'first_name', 'last_name', 'business_name', 'company_name', 'email', 'password',
    ];

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

    public function jobs(){
        return $this->hasMany(Job::class);
    }

    public function job_applies(){
        return $this->hasMany(JobApply::class);
    }

}
