<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','email', 'password','bio','company','Profile_picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function contacts(){
        return $this->hasMany('App\Contact');
    }
    public function companies(){
        return $this->hasMany('App\Company');
    }

	/**
	 * The attributes that are mass assignable.
	 * 
	 * @return array
	 */
	public function getFillable() {
		return $this->fillable;
	}
	
	/**
	 * The attributes that are mass assignable.
	 * 
	 * @param array $fillable The attributes that are mass assignable.
	 * @return self
	 */
	public function setFillable($fillable): self {
		$this->fillable = $fillable;
		return $this;
	}
    public function fullName(){
        return $this->first_name.' '.$this->last_name;
    }

    // to add picture in ui if it is available in database
    public function Profilepic(){
        return Storage::exists($this->Profile_picture) ?Storage::url($this->Profile_picture) : 'http://via.placeholder.com/150x150';
    }
}
