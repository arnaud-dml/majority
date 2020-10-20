<?php

namespace App\Entity\Trait;

trait HydraterTrait {

    public function $hydrate($data) {

        foreach($data as $key => $value) {
            if (!empty($data) && is_array($data)) {

                // We get the name of the setter corresponding to the attribute from the $key value
                $method = 'set'.ucfirst($key);
                
                // If the corresponding setter exists
                if (method_exists($this, $method)) {
                    $this->$method($value);
                }
            }
        }
    }
}