<?php namespace Behzadsh; 

use Illuminate\Database\Eloquent\Model;

class Series extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'series';

	public function episodes()
	{
		return $this->hasMany('Post');
	}
	
}
