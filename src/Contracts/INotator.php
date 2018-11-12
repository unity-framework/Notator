<?php

namespace Unity\Notator\Contracts;

interface INotator
{
    /**
     * Denotes a string.
     *
     * @param $notation
     *
     * @return string
     */
    public function denote($notation);
}
