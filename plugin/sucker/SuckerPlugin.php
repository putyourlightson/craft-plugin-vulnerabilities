<?php
namespace Craft;

/**
 * Sucker Plugin
 */
class SuckerPlugin extends BasePlugin
{
    public function getName()
    {
        return 'Sucker';
    }

    public function getVersion()
    {
        return '0.0.1';
    }

    public function getDeveloper()
    {
    return 'Sucker Dev';
    }

    public function getDeveloperUrl()
    {
        return '';
    }

    public function getDescription()
    {
        return Craft::t('A plugin that does nothing, purely for testing purposes.');
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/putyourlightson/craft-plugin-vulnerabilities';
    }
}
