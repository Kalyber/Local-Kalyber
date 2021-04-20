<?php

namespace Google\Web_Stories_Dependencies\AmpProject\Exception\Cli;

use Google\Web_Stories_Dependencies\AmpProject\Exception\AmpCliException;
use OutOfBoundsException;
/**
 * Exception thrown when an invalid option was provided to the CLI.
 *
 * @package ampproject/amp-toolbox
 */
final class InvalidColumnFormat extends \OutOfBoundsException implements \Google\Web_Stories_Dependencies\AmpProject\Exception\AmpCliException
{
    /**
     * Instantiate an InvalidColumn exception for multiple fluid columns.
     *
     * @return self
     */
    public static function forMultipleFluidColumns()
    {
        $message = 'Only one fluid column allowed.';
        return new self($message, \Google\Web_Stories_Dependencies\AmpProject\Exception\AmpCliException::E_ANY);
    }
    /**
     * Instantiate an InvalidColumn exception for an unknown column format.
     *
     * @param string $column Unknown column format.
     * @return self
     */
    public static function forUnknownColumnFormat($column)
    {
        $message = "Unknown column format: '{$column}'.";
        return new self($message, \Google\Web_Stories_Dependencies\AmpProject\Exception\AmpCliException::E_ANY);
    }
    /**
     * Instantiate an InvalidColumn exception for an unknown column format.
     *
     * @return self
     */
    public static function forExceededMaxWidth()
    {
        $message = 'Total of requested column widths exceeds available space.';
        return new self($message, \Google\Web_Stories_Dependencies\AmpProject\Exception\AmpCliException::E_ANY);
    }
}
