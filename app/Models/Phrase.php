<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phrase extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'text',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function accessiblePhrases(User $user)
    {
        return self::whereNull('user_id')->orWhere('user_id', $user->id)->get();
    }
}
