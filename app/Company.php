<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable=['name','address','website','email','company_id','user_id'];

    public function contacts(){
        return $this->hasMany('App\Contact');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
    public static function userCompanies(){
        return self::where('user_id',auth()->id())->orderBy('name')->pluck('name','id')->prepend('all companies','');
    }

    public function scopeLatestFirst($query){
        return $query->orderBy('name','desc');
    }

    // adding local scope

    public function scopeFilter($query){
        if($company_id=request('company_id')){
            $query->where('company_id',$company_id);
        }

        if($search=request('search')){
            $query->where('name','Like',"%{$search}%");
            $query->orwhere('address','Like',"%{$search}%");
        }

        return $query;
    }
}
