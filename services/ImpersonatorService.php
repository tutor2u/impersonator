<?php
/**
 * Impersonator plugin for Craft CMS
 *
 * Impersonator Service
 *
 * @author    tutor2u
 * @copyright Copyright (c) 2017 tutor2u
 * @link      https://www.tutor2u.net
 * @package   Impersonator
 * @since     1.0.0
 */

namespace Craft;

class ImpersonatorService extends BaseApplicationComponent
{
    /**
     */
    public function getImpersonator()
    {
        $impersonatorId = craft()->session->get('Craft.UserSessionService.prevImpersonateUserId');

        if (!is_null($impersonatorId))
        {
            $impersonator = craft()->users->getUserById($impersonatorId);

            if ($impersonator)
            {
                return $impersonator;
            }
        }

        return null;
    }

}
