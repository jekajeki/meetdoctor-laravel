<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'title',
    ];

    public function role_user()
    {
        return $this->hasMany('app\Models\ManagementAccess\RoleUser.php', 'role_id');
    }

    public function permission_role()
    {
        return $this->hasMany('app\Models\ManagementAccess\PermissionRole.php', 'role_id');
    }
}
