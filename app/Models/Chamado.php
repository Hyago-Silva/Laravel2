<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;
    protected $table = 'chamados';
    protected $primaryKey = 'id';
    protected $fillable = ['assunto', 'descricao', 'data_criacao', 'status', 'vendedor'];
}
