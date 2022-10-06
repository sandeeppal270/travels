<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userapp extends Model
{
    use HasFactory;
    protected $table = 'app_users';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name', 'email', 'telephone','avatar','latitude','longitude','gender','age','gcm_registration_id','created_at','updated_at'];
}
