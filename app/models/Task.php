<?php

class Task extends \Eloquent {
  
  // Add your validation rules here
  public static $rules = ['title' => 'required|max:100'];
  
  // Don't forget to fill this array
  protected $fillable = ['title'];
  
  protected $attributes = array ('done' => false);
  
  public function scopeActive($query)
	{
    return $query->where('done', '=', 'true');
	}    
  
 	public function scopeDone($query)
	{
    return $query->where('done', '=', 'false');
	} 

  public function isValid()
  {
    return Validator::make(
      $this->toArray(),
      array(
        'title'  => 'required|max:100'
      )
    )->passes();
  }
};