<?php

declare(strict_types=1);

namespace Potter\Event;

use \Potter\Event\Emitter\EmitterInterface;

trait EventTrait
{
    private EmitterInterface $emitter;
    private string $id;
    
    final public function getEmitter(): EmitterInterface
    {
        return $this->emitter;
    }
    
    final protected function setEmitter(EmitterInterface $emitter): void
    {
        $this->emitter = $emitter;
    }
    
    final public function getId(): string
    {
        return $this->id;
    }
    
    final protected function setId(string $id): void
    {
        $this->id = $id;
    }
}