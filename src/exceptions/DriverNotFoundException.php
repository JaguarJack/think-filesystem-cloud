<?php
namespace jaguarjack\filesystem\cloud\exceptions;

class DriverNotFoundException extends \Exception
{
    protected $message = 'driver not found';
}