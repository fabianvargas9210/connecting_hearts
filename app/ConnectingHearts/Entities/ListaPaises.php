<?php namespace ConnectingHearts\Entities;

class ListaPaises extends \Eloquent {
	protected $fillable = ['pais', 'id'];


    public function contacts()
    {
        return $this->hasMany('ConnectingHearts\Entities\Contact');
    }


}