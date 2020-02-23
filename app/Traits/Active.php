<?php


namespace App\Traits;


trait Active
{
    public function active($active = true)
    {
        $where = [
            'column' => 'active',
            'operator' => '=',
            'value' => $active
        ];
        return $this->findAndGet(['*'], [], $where);
    }
}
