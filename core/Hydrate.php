<?php


namespace Core;

/**
 * Trait Hydrate
 * @package Core
 */
trait Hydrate
{
    public function set($data)
    {
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}