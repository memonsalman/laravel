<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  public $timestamps = false;		
protected $fillable = ['pre','fname','lname','officephone','mobile','title','department','aname','email','address','city','state','postalcode','country','description','leadsource','assignedto'];
}
