<?php

Class Feed Extends Eloquent{

	protected $table = 'feeds';

	protected $fillable = array('feed', 'title', 'active','category');

	//Validation rules
	public static $form_rules = array(
		'feed' 		=> 'required|url',
        'title'  	=> 'required',
        'active'  	=> 'required|between:0,1',
        'category'  => 'required| in:News,Sports,Technology'
        );

}