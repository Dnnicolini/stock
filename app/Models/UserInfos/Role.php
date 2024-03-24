<?php

namespace App\Models\UserInfos;

use App\Models\UserInfos\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'roles';

    protected $fillable = [
        'name',
        'group_id',
    ];

    public function group(){
        return $this->belongsTo(Group::class);
    }


}
