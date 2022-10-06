<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $table = 'locations';
    protected $primaryKey = 'id';
    protected $fillable = ['app_user_id', 'address', 'latitude','longitude','city','district','state','country','zip','crime_count','incident_type','r_type','agent','action1','action2','action3','delegated','status','created_at','updated_at'];
}
