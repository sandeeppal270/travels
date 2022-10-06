<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $table = 'emails';
    protected $primaryKey = 'id';
    protected $fillable = ['app_user', 'contact_person', 'email_id','address','image_attachment','city_name','latitude','longitude','created_at','updated_at'];
}
