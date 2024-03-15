<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class users extends Model
{
    protected $table = "users";
    protected $primaryKeys = "id";
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = ['username', 'password'];
    
    public function contact(): HasMany
    {
        return $this->hasMany(users::class, 'user_id', 'id');
    }
    use HasFactory;
}
