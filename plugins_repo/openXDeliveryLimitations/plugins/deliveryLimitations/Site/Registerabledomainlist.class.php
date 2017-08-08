<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

require_once LIB_PATH . '/Extension/deliveryLimitations/DeliveryLimitations.php';
require_once RV_PATH . '/lib/max/Plugin/Translation.php';

/**
 * A Site delivery rule plugin, for filtering delivery of ads on the basis of a
 * whitelist/blacklist of the domain name of the website the ad is on.
 *
 * Valid comparison operators:
 * =~, !~
 *
 * @package    OpenXPlugin
 * @subpackage DeliveryLimitations
 */
class Plugins_DeliveryLimitations_Site_Registerabledomainlist extends Plugins_DeliveryLimitations
{
    var $defaultComparison = '=~';

    /**
     * Override the parent contstructor to:
     *  - Set the comparison operators (which are bespoke to this plugin); and
     *  - Set the name of the delivery rule for use in the UI.
     */
    function __construct()
    {
        $this->aOperations = array(
            '=~' => MAX_Plugin_Translation::translate('Whitelist - Only deliver on these registerable domains', $oPlugin->module, $oPlugin->package),
            '!~' => MAX_Plugin_Translation::translate('Blacklist - Do not deliver on these registerable domains', $oPlugin->module, $oPlugin->package)
        );
        $aConf = $GLOBALS['_MAX']['CONF'];
        $this->nameEnglish = 'Site - Registerable Domain List';
    }

    /**
     * Override the parent method to display the UI for the delivery rule.
     */
    function displayData()
    {
        if (extension_loaded('intl')) {
            $this->_displayMainUI();
        } else {
            $this->_displayIntlMissingWarning();
        }
    }

    /**
     * A private method for displaying the UI for the delivery rule when
     * the PHP intl extension is loaded, and the delivery rule is able to
     * be used.
     */
    function _displayMainUI()
    {
    	global $tabindex;
        require_once RV_PATH . '/www/admin/plugins/Site/lib/updateList.php';
        echo
            "<div style=\"float: left;\">" .
                "<textarea rows='40' cols='70' name='acl[{$this->executionorder}][data]' tabindex='".($tabindex++)."'>" .
                  htmlspecialchars(isset($this->data) ? $this->data : "") .
                "</textarea>" .
            "</div>" .
            "<div style=\"margin-left: 15px; float: left;\">" .
              "<p>" . $this->translate('Enter domains below to remove matching entries from the list') . "</p>" .
              "<textarea rows='10' cols='50' name='removelist[{$this->executionorder}][data]' tabindex='".($tabindex++)."'></textarea>" .
              "<br /><br />" .
              "<input id='removeDomains' type='button' value='" . $this->translate('Remove Domains') . "' onclick='updateList(\"acl[{$this->executionorder}][data]\", \"removelist[{$this->executionorder}][data]\", \"removeMessage{$this->executionorder}\");' />" .
              "<br /><br />" .
              "<div id='removeMessage{$this->executionorder}'></div>" .
            "</div>";        
    }

    /**
     * A private method for displaying the UI for the delivery rule when
     * the PHP intil extension is not loaded, and the deliver rule is not
     * able to be used.
     */
    function _displayIntlMissingWarning()
    {
        echo
            "<div class='errormessage' style='width: 50%;'>" .
                "<img class='errormessage' src='" . OX::assetPath() . "/images/warning.gif' align='absmiddle'>" .
                "<span class='tab-r'>" .
                    $this->translate('WARNING') . ": " .
                    $this->translate('The Registerable Domain List delivery rule cannot be used; it requires that the PHP <i>intl</i> extension be installed.') .
                "</span>" .
            "</div>";
    }

    /**
     * Override the parent getData() method, to call the _sanitiseData() method
     * on the provided data before returning it.
     *
     * @return string A "\n" separated string of sanitised page domains.
     */
    function getData()
    {
        return $this->_sanitiseData($this->data); 
    }
    
    /**
     * A local private method to sanitise the registerable domain data.
     *
     *  For each URL input line:
     *  - Trims whitespace;
     *  - Converts to lowercase;
     *  - Parses the line as a URL, considering only the host (for performance),
     *    using the Public Suffic List Manager;
     *      - If the result of parsing is false, the URL was badly broken,
     *        so the line is ignored;
     *      - Otherwise, if a registerable domain was located in the URL, then
     *        the line is added to the output list.
     * 
     *  - Converts the domain to UTF8 (if PHP intl extension installed);
     *
     *  - Deduplicates the list of registerable domains; and
     *  - Sorts the registerable domains into ascending order.
     * 
     * @param string $data A "\n" separated string of input page registerable
     *                      domains and/or URLs.
     * @return string A "\n" separated string of registerable domains.
     */
    function _sanitiseData($data)
    {
        $aData = explode("\n", $data);
        $aSanitisedData = [];
        if (extension_loaded('intl')) {
            $oPslManager = new Pdp\PublicSuffixListManager();
            $oParser = new Pdp\Parser($oPslManager->getList());
            foreach ($aData as $key => $url) {
                $url = trim($url);
                $url = strtolower($url);
                $oHost = $oParser->parseHost($url);
                if ($oHost !== false) {
                    $registrableDomain = $oHost->registerableDomain;
                    if (is_string($registrableDomain) && strlen($registrableDomain)) {
                        array_push($aSanitisedData, $registrableDomain);
                    }
                }
            }

            // $domain = function_exists('idn_to_utf8') ? idn_to_utf8($domain) : $domain;

            $aSanitisedData = array_unique($aSanitisedData);
            sort($aSanitisedData);
        }
        return implode($aSanitisedData, "\n");
    }
        
}

?>