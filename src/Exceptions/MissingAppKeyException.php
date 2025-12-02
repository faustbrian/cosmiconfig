<?php declare(strict_types=1);

/**
 * Copyright (C) Brian Faust
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cline\Ferret\Exceptions;

use RuntimeException;

/**
 * Exception thrown when APP_KEY is required but not configured.
 *
 * @author Brian Faust <brian@cline.sh>
 */
final class MissingAppKeyException extends RuntimeException implements FerretException
{
    public static function forEncryption(): self
    {
        return new self('APP_KEY is not set. Cannot use --app-key without a configured application key.');
    }

    public static function forDecryption(): self
    {
        return new self('APP_KEY is not set. Cannot use --app-key without a configured application key.');
    }
}
