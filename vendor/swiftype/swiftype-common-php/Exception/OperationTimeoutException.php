<?php
/**
 * This file is part of the Swiftype Common PHP Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swiftype\Exception;

/**
 * Exception raised when an HTTP operation timeout.
 *
 * @package Swiftype\Exception
 *
 * @author  Aurélien FOUCRET <aurelien.foucret@elastic.co>
 */
class OperationTimeoutException extends ConnectionException implements SwiftypeException
{
}
