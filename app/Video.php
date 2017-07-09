<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  public $fillable = array(
    "title",
    "description",
    "category",
    "subject",
    "certification_credit",
    "link",
    "written_content",
  );
}
