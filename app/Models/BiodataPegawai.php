<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataPegawai extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Add attributes here that you want to be mass assignable
    ];

    public function pendidikanKaryawan()
    {
        return $this->hasMany(PendidikanPegawai::class);
    }

    public function sertifikatKaryawan()
    {
        return $this->hasMany(SertifikatPegawai::class);
    }

    public function jabatanPegawai()
    {
        return $this->hasMany(JabatanPegawai::class);
    }
}