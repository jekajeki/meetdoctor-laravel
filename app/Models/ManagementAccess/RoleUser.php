<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'role_id',
        'user_id',
    ];

    protected function role()
    {
        return $this->belongsTo('app\Models\ManagementAccess\Role.php', 'role_id', 'id');
    }

    protected function user()
    {
        return $this->belongsTo('app\Models\User.php', 'user_id', 'id');
    }
}
