<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    public static function booted(): void
    {
        static::creating(function (ContactUs $contact_us) {
            $contact_us->ip_address = request()->ip();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'city',
        'state',
        'message',
        'ip_address',
    ];
}
