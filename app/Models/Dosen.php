<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    public $fillable = ['nip', 'nama', 'kelamin', 'sudah_menikah', 'alamat'];
    public $appends = ['status_menikah'];

    public function statusMenikah(): Attribute
    {
        return new Attribute(get: function () {
            return $this->attributes['sudah_menikah'] ? "Sudah menikah" : "Belum Menikah";
        });
    }
}
