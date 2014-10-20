<?php namespace Behzadsh; 

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	public function author()
	{
		return $this->belongsTo('User');
	}

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}

	public function series()
	{
		return $this->belongsTo('Series');
	}

}
