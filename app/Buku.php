<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Buku extends Model
{
    protected $table = 'tabel_buku';
    protected $dates = ['tgl_terbit'];
}
