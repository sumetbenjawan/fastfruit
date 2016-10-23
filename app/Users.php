<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use App\Follow_user;

class Users extends Authenticatable
{
	use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName','lastName','citizenId' , 'email', 'password','address','phone','userPicture','userType','idProvince',
    ];

    protected $primaryKey = 'id';

    public function province()
    {
        return $this->belongsTo('App\Provinces','idProvince');
    }

    public function matchings()
    {
        return $this->hasMany('App\Matchings');
    }

     public function admins()
    {
        return $this->hasMany('App\Admins','idUser');
    }

     public function bookmarks()
    {
        return $this->hasMany('App\Bookmarks');
    }
    public function userBookmarks()
    {
        return $this->belongsToMany('App\Product_sprints', 'bookmarks','idUser','idProductSprint');            
    }

    public function followUsers()
    {
        return $this->hasMany('App\Follow_user','idUserFollowing');
    }

    public function followBy()
    {
        return $this->hasMany('App\Follow_user','idUserFollower');
    }

    public function followOrchards()
    {
        return $this->hasMany('App\Follow_orchard');
    }

    public function orchards()
    {
        return $this->belongsToMany('App\Orchards', 'admins' , 'idUser', 'idOrchard');
    }
    
    public function orchardFollowing()
    {
        return $this->belongsToMany('App\Orchards', 'follow_orchard','idUser','idOrchard');            
    }

    public function userFollowers()
    {
        return $this->belongsToMany('App\Users', 'follow_user', 'idUser', 'idFollower');
    }

    public function userFollowings()
    {
        return $this->belongsToMany('App\Users', 'follow_user', 'idFollower', 'idUser');        
    }


}
