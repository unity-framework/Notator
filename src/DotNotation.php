<?php

namespace Unity\Notator;

use Unity\Contracts\Notator\INotation;

/**
 * Class DotNotation.
 *
 * Denotes a string using a dot `.` as separator.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
class DotNotation extends Notation
{
    /**
     * Notation separator.
     *
     * @var string
     */
    const SEPARATOR = '.';
}
