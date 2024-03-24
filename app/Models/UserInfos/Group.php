<?php

namespace App\Models\UserInfos;

use App\Models\UserInfos\Role;
use App\Models\UserInfos\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'groups';

    protected $fillable = [
        'name',
    ];


    public function roles(){
        return $this->hasMany(Role::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }


}
