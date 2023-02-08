<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'age',
    ];

    public function user()
    {
        return $this->belongsTo('app\Models\User.php', 'user_id', 'id');
    }

    public function type_user()
    {
        return $this->belongsTo('app\Models\MasterData\TypeUser.php', 'type_user_id', 'id');
    }
}
