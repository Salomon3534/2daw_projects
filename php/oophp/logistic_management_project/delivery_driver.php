<?php

class DeliveryDriver {
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        private array $packets = []
    ) {}
}

?>