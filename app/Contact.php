<?php

namespace App;

use App\Scopes\FilterScope;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of Contact
 */
class Contact extends Model
{
    //
    protected $fillable=['first_name','last_name','phone','email','address','company_id','user_id'];
    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function scopeLatestFirst($query){
        return $query->orderBy('first_name','desc');
    }

    // adding local scope
    public function scopeFilter($query){
        if($company_id=request('company_id')){
            $query->where('company_id',$company_id);
        }
        if($search=request('search')){
            $query->where('first_name','Like',"%{$search}%");
            $query->orWhere('last_name','Like',"%{$search}%");
            $query->orWhere('email','Like',"%{$search}%");
            $query->orWhereHas('company',function($query)use($search){
                $query->where('name','LIKE',"%{$search}%");
            });
        }
        return $query;
    }

    // global scope
    // protected static function booted()
    // {
    //     parent::booted();
    //     static::addGlobalScope(new FilterScope);
    // }

}
