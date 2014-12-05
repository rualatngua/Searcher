<?php
namespace Phalcon\Searcher\Exceptions;

/**
 * Class InvalidTypeException
 * @package Phalcon
 * @subpackage Phalcon\Searcher\Exceptions
 * @since PHP >=5.5.12
 * @version 1.0
 * @author Stanislav WEB | Lugansk <stanisov@gmail.com>
 * @copyright Stanilav WEB
 */
class InvalidTypeException extends \RuntimeException
{
	/**
	 * Rise error message
	 *
	 * @param mixed $object
	 * @param string $method
	 * @param string $expected
	 * @param int $code
	 * @return \RuntimeException
	 */
	public function __construct($object, $method, $expected, $code = 0) {
        return parent::__construct('Wrong Type: '.gettype($object).' in '.$method.'. Expected '.$expected.' >> '.$this->getLine(), $code);
    }

	/**
	 * toString overload
	 *
	 * @return string
	 */
	public function __toString() {
		return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
	}
}