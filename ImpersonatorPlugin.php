<?php
/**
 * Impersonator plugin for Craft CMS
 *
 * Tells you about the person using the Login
 *
 * @author    tutor2u
 * @copyright Copyright (c) 2017 tutor2u
 * @link      https://www.tutor2u.net
 * @package   Impersonator
 * @since     1.0.0
 */

namespace Craft;

class ImpersonatorPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Impersonator');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Tells you about the person using the Login');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/tutor2u/impersonator/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/tutor2u/impersonator/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'tutor2u';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://www.tutor2u.net';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}