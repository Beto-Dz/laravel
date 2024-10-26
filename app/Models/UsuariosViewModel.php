<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosViewModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'usuarios_info_view';

    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'username',
        'activo',
        'sexo',
        'rol'
    ];
}