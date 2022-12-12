<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model{

    public function __construct(array $data = [])
    {
        $this->fill($data);
    }

    protected $table = 'doctors';

}
?>