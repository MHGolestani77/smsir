<?php

namespace Mhgolestani77\Smsir\Objects;

class Parameters {

    public $Name;
    public $Value;

    public function __construct(string $name, string $value) {
        $this->Name = $name;
        $this->Value = $value;
    }

    public function __serialize(): array {
        return [
            'Name' => $this->Name,
            'Value' => $this->Value,
        ];
    }

}
