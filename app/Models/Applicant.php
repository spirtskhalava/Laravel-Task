<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Applicant extends Model 
{
    //use /*Previewable,*/ HasMediaTrait;

    protected $table = 'applicant';
    public $timestamps = false;

    protected $primaryKey = 'id';


    protected $guarded = [];

    protected $booleans = [

    ];

    public $defVariables = [

    ];

    protected $fillable = [

    ];

    protected $localizable = [

    ];

    protected $dates = [
        '',
    ];



}