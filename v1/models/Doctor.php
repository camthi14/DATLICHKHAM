<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model{
    
    protected $table = 'doctors';
    protected $fillable = ['name', 'email', 'password', 'chucvu', 'khoa', 'bangcap'];
    public $timestamps = false;

}
?>