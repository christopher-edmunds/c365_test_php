<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date_of_birth',
    ];
    
    /**
     * Store user
     *
     * @return void
     */
    public function storeUser(array $params) {
        $this->name = $params['name'];
        $this->date_of_birth = $params['date_of_birth'];
        $this->save();
    }

    
}
