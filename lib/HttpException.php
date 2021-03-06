<?php

namespace Sabre\HTTP;

/**
 * An exception representing a HTTP error.
 *
 * This can be used as a generic exception in your application, if you'd like
 * to map HTTP errors to exceptions.
 *
 * If you'd like to use this, create a new exception class, extending Exception
 * and implementing this interface.
 *
 * @copyright Copyright (C) 2009-2014 fruux GmbH. All rights reserved.
 * @author Evert Pot (http://evertpot.com/)
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
interface HttpException {

    /**
     * The http status code for the error.
     *
     * This may either be just the number, or a number and a human-readable
     * message, separated by a space.
     *
     * @return string|null
     */
    function getHttpStatus();

}
