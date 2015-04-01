<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

  /**
   * The creater of the topic.
   *
   * @var User
   */
  public function author()
  {
    return $this->belongsTo('App\User');
  }

}
