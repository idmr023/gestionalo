<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'mime',
        'size',
        'payload',
    ];

    /**
     * Raw binary contents of the stored file.
     */
    public function bytes(): string
    {
        return base64_decode((string) $this->payload, true) ?: '';
    }
}
