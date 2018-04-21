<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $appends = array('likes', 'contact');

    public function getLikesAttribute()
    {
        $likes = Like::where('event_id', $this->id)->count();

        return $likes;
    }

    public function getContactAttribute()
    {
        $organiser = User::find($this->organiser_id);

        return $organiser->email;
    }
}
