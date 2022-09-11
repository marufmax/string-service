<?php

declare(strict_types=1);

namespace MarufMax\String\String;

class Stringify
{
    private string $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * Return uppercase caps of a given string
     *
     * @return string
     */
    public function toUpperCase(): string
    {
        return strtoupper($this->string);
    }

    /**
     * @return string
     */
    public function toAlternateCase(): string
    {
        $arr = $this->toArray();
        array_walk($arr, static fn(&$str, $key) => $str = $key % 2 ? strtoupper($str) : strtolower($str));

        return $this->toString($arr);
    }

    public function toArray(): array
    {
        return str_split($this->string);
    }

    /**
     * Return modified array of string to string
     *
     * @param array|null $array
     * @return string
     */
    public function toString(?array $array = null): string
    {
        if (!$array) {
            return implode('', $this->toArray());
        }

        return implode('', $array);
    }

    /**
     * @param string $delimiter
     * @return string
     */
    public function insertDelimiterAllChar(string $delimiter = ','): string
    {
       return implode($delimiter, $this->toArray());
    }
}