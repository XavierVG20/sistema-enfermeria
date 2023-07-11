<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends  Authenticatable 
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'users';

    protected $fillable = ['name','email','id_rol'];
	
    public function recivesBroadcastNotification ()
    {
       return 'App.Models.User.{id}'.$this->id;
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'id_rol');
    }
    
}
