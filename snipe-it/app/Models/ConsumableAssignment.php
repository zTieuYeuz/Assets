<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class ConsumableAssignment extends Model
{
    use CompanyableTrait;
    use ValidatingTrait;

    protected $table = 'consumables_users';

    public $rules = [
        'assigned_to'        => 'required|exists:users,id',
    ];

    public function consumable()
    {
        return $this->belongsTo(\App\Models\Consumable::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'assigned_to');
    }

    public function admin()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
