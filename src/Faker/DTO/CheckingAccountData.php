<?php

namespace Faker\DTO;

class CheckingAccountData
{
    /**
     * @var string
     */
    private string $rSkS;

    /**
     * @var string
     */
    private string $bik;

    /**
     * @param string $rSkS
     * @param string $bik
     */
    public function __construct(string $rSkS, string $bik)
    {
        $this->rSkS = $rSkS;
        $this->bik = $bik;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->rSkS;
    }

    /**
     * @return string
     */
    public function getBik(): string
    {
        return $this->bik;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getValue();
    }
}
