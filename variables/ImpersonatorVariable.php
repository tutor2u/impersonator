<?php
/**
 * Impersonator plugin for Craft CMS
 *
 * Impersonator Variable
 *
 * @author    tutor2u
 * @copyright Copyright (c) 2017 tutor2u
 * @link      https://www.tutor2u.net
 * @package   Impersonator
 * @since     1.0.0
 */

namespace Craft;

class ImpersonatorVariable
{
    /**
     */
    public function get()
    {
        return craft()->impersonator->getImpersonator();
    }
}
