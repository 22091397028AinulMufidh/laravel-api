<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class contacts extends Model
{
    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $table = "contacts";
    protected $incrementing = true;
    public $timestamps = true;

    protected $fillable = ['fisrt_name', 'last_name', 'email', 'phone'];

    public function users(): BelongsTo
    {
        return $this->belongsTo(users::class, 'user_id');
    }
    use HasFactory;
}
