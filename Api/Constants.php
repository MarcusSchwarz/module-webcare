<?php
/**
 * @author      Benjamin Rosenberger <rosenberger@e-conomix.at>
 * @package DataReporter\WebCare\Api
 * @copyright Copyright (c) 2019 E-CONOMIX GmbH (https://www.e-conomix.at)
 * @created 21.02.2019
 */

namespace DataReporter\WebCare\Api;


class Constants
{
    const CONFIG_WEBCARE_WEBCACHEURL = 'datareporter/webcare/webcache_url';
    const CONFIG_WEBCARE_ADD_LANGUAGECODE = 'datareporter/webcare/language_code';
    const CONFIG_WEBCARE_ENABLE_IMPRINT = 'datareporter/webcare/enable_imprint';
    const CONFIG_WEBCARE_ENABLE_PRIVACYNOTICE = 'datareporter/webcare/enable_privacy_notice';
    const CONFIG_WEBCARE_ENABLE_COOKIEBANNER = 'datareporter/webcare/enable_cookie_banner';

    const TYPE_IMPRINT = 'empress';
    const TYPE_PRIVACYNOTICE = 'privacynotice';
    const TYPE_COOKIEBANNER = 'banner';
}