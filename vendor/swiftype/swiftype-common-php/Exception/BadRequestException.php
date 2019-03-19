<?php
/**
 * This file is part of the Swiftype Common PHP Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swiftype\Exception;

/**
 * Exception thrown when something goes bad with the user request.
 *
 * @package Swiftype\Exception
 *
 * @author  Aurélien FOUCRET <aurelien.foucret@elastic.co>
 */
class BadRequestException extends ApiException implements SwiftypeException
{
}
