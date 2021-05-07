<?php


namespace Core;

/**
 * Hydrate entity when creating entity
 *
 * Class Entity
 * @package Core
 */
abstract class Entity
{
    use Hydrate;

    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->set($data);
        }
    }
}