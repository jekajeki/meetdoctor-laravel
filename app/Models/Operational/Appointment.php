<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
    ];

    public function doctor()
    {
        return $this->belongsTo('app\Models\Operational\Doctor.php', 'doctor_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('app\Models\User.php', 'user_id', 'id');
    }

    public function consultation()
    {
        return $this->belongsTo('app\Models\MasterData\Consultation.php', 'consultation_id', 'id');
    }

    public function transaction()
    {
        return $this->hasOne('app\Models\Operational\Transaction.php', 'appointment_id');
    }
}
