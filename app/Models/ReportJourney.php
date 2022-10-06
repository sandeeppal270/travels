<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportJourney extends Model
{
    use HasFactory;
    protected $table = 'report_journeys';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'app_user_id', 'message','email_id','app_user_name','journey_image_attachment','start_location','destination_location','created_at','updated_at'];

}
