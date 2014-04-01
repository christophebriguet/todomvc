<?php

class task extends \Eloquent {
  
  // Add your validation rules here
  public static $rules = ['title' => 'required'];
  
  // Don't forget to fill this array
  protected $fillable = ['title'];
  
  protected $attributes = array ('done' => false);
 
};