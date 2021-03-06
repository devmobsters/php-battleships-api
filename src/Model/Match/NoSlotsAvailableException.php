<?php
namespace App\Model\Match;

use RuntimeException;

/**
 * Class NoSlotsAvailableException
 *
 * @package App\Model\Match
 * @author  Maarten Bicknese <maarten.bicknese@devmob.com>
 */
class NoSlotsAvailableException extends RuntimeException
{
    protected $message = 'This match is already full on players';
}
