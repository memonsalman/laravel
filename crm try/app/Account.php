<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	 public $timestamps = false;	
    protected $fillable = [
        'aname', 'officephone', 'website','fax','email','street','city','state','postalcode','country','description','assignedto','industry'
    ];
}
