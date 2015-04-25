<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Matome extends Model {

    protected $fillable = ['topic_id', 'title', 'content'];

    /**
     * Return the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Return the Topic.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }

    /**
     * Return human readable time.
     *
     * @return mixed
     */
    public function humanCreatedTime()
    {
        return $this->created_at->diffForHumans();
    }

    /**
     * Return no format content.
     *
     * @return string
     */
    public function noFormatContent()
    {
        return strip_tags($this->content);
    }
}
