<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	 public $timestamps = false;	
    protected $fillable = [
        'subject', 'status', 'startdate','duedate','relatedto','contactname','priority','leads','description','assignedto'];
}
