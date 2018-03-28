<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    public $timestamps = false;	
        protected $fillable = ['pre','fname','lname','officephone','title','mobile','department','fax','aname','website','address','city','state','postalcode','country','otheraddress','email','description','status','statusdescription','opportunityamount','leadsource','leadsourcedescription','referredby','assignedto'];
}
