<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cbJob extends Model
{
     protected $fillable = [
        'JobNumber',
        'CustOrderNum',
        'Reg',
        'DueDate',
        'ColDate',
        'DelDate',
        'Progress',
        'POCName',
        'POCDate',
        'POCTime',
        'POCMiles',
        'PODName',
        'PODDate',
        'PODTime',
        'PODMiles',
        'JobCancelled',
        'JobAborted',
        'webhook_payload',
        'notes'
    ];
}
