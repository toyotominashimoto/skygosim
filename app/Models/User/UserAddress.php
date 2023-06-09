<?php


namespace App\Models\User;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'user_addresses';

    protected $fillable = [
        'user_id',
        'street',
        'city',
        'state',
        'zip_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
