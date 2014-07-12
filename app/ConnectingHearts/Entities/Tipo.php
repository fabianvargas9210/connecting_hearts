<?php namespace ConnectingHearts\Entities;

class Tipo extends \Eloquent {
	protected $fillable = ['tipo_id'];

  public function contacts()
    {
        return $this->hasMany('ConnectingHearts\Entities\Contact');
    }

    public function getPaginateContactsAttribute()
    {
        return Contact::where('tipo_id', $this->id)->paginate();
    }

    public function getContact()
    {
        $contact = $this->contacts();
        if(is_null($contact))
        {
            $contact = new Contact();
            $contact->id = $this->id;
        }
        return $contact;
    }
}

