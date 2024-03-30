<?php

declare(strict_types=1);

namespace Potter\Event;

trait EventTrait
{
    private string $id;
    
    final public function getId(): string
    {
        return $this->id;
    }
    
    final protected function setId(string $id): void
    {
        $this->id = $id;
    }
}