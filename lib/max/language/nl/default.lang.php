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

// Set text direction and characterset
$GLOBALS['phpAds_TextDirection'] = "ltr";
$GLOBALS['phpAds_CharSet'] = "UTF-8";

$GLOBALS['phpAds_DecimalPoint'] = ",";
$GLOBALS['phpAds_ThousandsSeperator'] = ".";

// Date & time configuration
$GLOBALS['date_format'] = "%d-%m-%Y";
$GLOBALS['time_format'] = "%H:%M:%S";
$GLOBALS['minute_format'] = "%H:%M";
$GLOBALS['month_format'] = "%m-%Y";
$GLOBALS['day_format'] = "%m-%d";
$GLOBALS['week_format'] = "%W-%Y";
$GLOBALS['weekiso_format'] = "%V-%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting'] = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting'] = "#,##0.000;-#,##0.000;-";

/* ------------------------------------------------------- */
/* Translations                                          */
/* ------------------------------------------------------- */

$GLOBALS['strHome'] = "Hoofdpagina";
$GLOBALS['strHelp'] = "Help";
$GLOBALS['strContactUs'] = "Neem contact met ons op";
$GLOBALS['strStartOver'] = "Opnieuw beginnen";
$GLOBALS['strNavigation'] = "Navigatie";
$GLOBALS['strShortcuts'] = "Snelkoppelingen";
$GLOBALS['strActions'] = "Actie";
$GLOBALS['strMore'] = "Meer";
$GLOBALS['strAndXMore'] = "en %s meer";
$GLOBALS['strLess'] = "Minder";
$GLOBALS['strAdminstration'] = "Inventaris";
$GLOBALS['strMaintenance'] = "Onderhoud";
$GLOBALS['strProbability'] = "Waarschijnlijkheid";
$GLOBALS['strInvocationcode'] = "Invocatiecode";
$GLOBALS['strTrackerVariables'] = "Tracker-variabelen";
$GLOBALS['strBasicInformation'] = "Standaard informatie";
$GLOBALS['strAdditionalInformation'] = "Aanvullende informatie";
$GLOBALS['strContractInformation'] = "Contract informatie";
$GLOBALS['strLoginInformation'] = "Aanmeldingsgegevens";
$GLOBALS['strLogoutURL'] = "URL om te worden afgemeld. <br />Laat leeg voor standaard";
$GLOBALS['strAppendTrackerCode'] = "Append tracker-code";
$GLOBALS['strOverview'] = "Overzicht";
$GLOBALS['strSearch'] = "<u>Z</u>oeken";
$GLOBALS['strHistory'] = "Geschiedenis";
$GLOBALS['strDetails'] = "Details";
$GLOBALS['strUpdateSettings'] = "Instellingen bijwerken";
$GLOBALS['strCheckForUpdates'] = "Controleer voor updates";
$GLOBALS['strWhenCheckingForUpdates'] = "Bij het controleren op updates";
$GLOBALS['strCompact'] = "Compact";
$GLOBALS['strVerbose'] = "Uitgebreid";
$GLOBALS['strUser'] = "Gebruiker";
$GLOBALS['strEdit'] = "Wijzig";
$GLOBALS['strCreate'] = "Creëer";
$GLOBALS['strDuplicate'] = "Dubbel";
$GLOBALS['strCopyOf'] = "Kopie van";
$GLOBALS['strMoveTo'] = "Verplaatst naar";
$GLOBALS['strDelete'] = "Verwijder";
$GLOBALS['strActivate'] = "Activeer";
$GLOBALS['strDeActivate'] = "Deactiveer";
$GLOBALS['strConvert'] = "Converteer";
$GLOBALS['strRefresh'] = "Vernieuwen";
$GLOBALS['strSaveChanges'] = "Bewaar veranderingen";
$GLOBALS['strUp'] = "Omhoog";
$GLOBALS['strDown'] = "Omlaag";
$GLOBALS['strSave'] = "Bewaren";
$GLOBALS['strCancel'] = "Annuleren";
$GLOBALS['strBack'] = "Terug";
$GLOBALS['strPrevious'] = "Vorige";
$GLOBALS['strPrevious_Key'] = "Vo<u>r</u>ige";
$GLOBALS['strNext'] = "Volgende";
$GLOBALS['strNext_Key'] = "Vol<u>g</u>ende";
$GLOBALS['strYes'] = "Ja";
$GLOBALS['strNo'] = "Nee";
$GLOBALS['strNone'] = "Geen";
$GLOBALS['strCustom'] = "Custom";
$GLOBALS['strDefault'] = "Standaard";
$GLOBALS['strOther'] = "Andere";
$GLOBALS['strUnknown'] = "Onbekend";
$GLOBALS['strUnlimited'] = "Onbeperkt";
$GLOBALS['strUntitled'] = "Naamloos";
$GLOBALS['strAll'] = "alle";
$GLOBALS['strAvg'] = "Gem.";
$GLOBALS['strAverage'] = "Gemiddelde";
$GLOBALS['strAveraged'] = "Gemiddeld";
$GLOBALS['strAveragedColumnLegend'] = "Dit pictogram geeft aan dat van de waarden in deze rij het gemiddelde wordt berekend.<br>Er zijn situaties waar meer dan een enkele set van targeting gegevens kan zijn gegenereerd voor een uur. <br/> <ul><li>Bijvoorbeeld, als u {$PRODUCT_NAME} uitvoert met een werkinterval van minder dan 60 minuten (zie \"onderhoudsinstellingen\"), de doelstelling voor Contract campagnes wordt berekend na elke operatie moet gebeuren, en wordt dan gemiddeld om de uur-gegevens te berekenen.  </li> <li>Dit kan ook gebeuren in het geval waar u de optie voor het bijwerken van advertenties prioriteiten wanneer wijzigingen worden aangebracht in de Gebruikersinterface hebt ingeschakeld (Zie prioriteit-instellingen in het menu \"onderhoudsinstellingen\") en u wijzigingen hebt aangebracht aan het Contract campagnes terwijl zij lopen.</li></ul>";
$GLOBALS['strOverall'] = "Algemeen";
$GLOBALS['strTotal'] = "Totaal";
$GLOBALS['strUnfilteredTotal'] = "Totaal (ongefilterd)";
$GLOBALS['strFilteredTotal'] = "Totaal (gefilterd)";
$GLOBALS['strActive'] = "actief";
$GLOBALS['strFrom'] = "Van";
$GLOBALS['strTo'] = "tot";
$GLOBALS['strAdd'] = "Toevoegen";
$GLOBALS['strLinkedTo'] = "gekoppeld aan";
$GLOBALS['strDaysLeft'] = "Dagen resterend";
$GLOBALS['strCheckAllNone'] = "Selecteer alle / geen";
$GLOBALS['strKiloByte'] = "KB";
$GLOBALS['strExpandAll'] = "Alles <u>u</u>itklappen";
$GLOBALS['strCollapseAll'] = "Alles <u>i</u>nklappen";
$GLOBALS['strShowAll'] = "Toon alles";
$GLOBALS['strNoAdminInterface'] = "Het admin-scherm is voor onderhoud uitgeschakeld.  Dit heeft geen invloed op de uitlevering van uw campagnes.";
$GLOBALS['strFilterBySource'] = "filter op bron";
$GLOBALS['strFieldStartDateBeforeEnd'] = "'Vanaf' datum moet eerder zijn dan 'Tot' datum";
$GLOBALS['strFieldContainsErrors'] = "De volgende velden bevatten fouten:";
$GLOBALS['strFieldFixBeforeContinue1'] = "Voordat u verder kunt gaan dient u";
$GLOBALS['strFieldFixBeforeContinue2'] = "deze fouten te corrigeren.";
$GLOBALS['strDelimiter'] = "Scheidingsteken";
$GLOBALS['strMiscellaneous'] = "Diversen";
$GLOBALS['strCollectedAllStats'] = "Alle statistieken";
$GLOBALS['strCollectedToday'] = "Vandaag";
$GLOBALS['strCollectedYesterday'] = "Gisteren";
$GLOBALS['strCollectedThisWeek'] = "Deze week";
$GLOBALS['strCollectedLastWeek'] = "Vorige week";
$GLOBALS['strCollectedThisMonth'] = "Deze maand";
$GLOBALS['strCollectedLastMonth'] = "Vorige maand";
$GLOBALS['strCollectedLast7Days'] = "Afgelopen 7 dagen";
$GLOBALS['strCollectedSpecificDates'] = "Specifieke datums";
$GLOBALS['strDifference'] = "Verschil (%)";
$GLOBALS['strPercentageOfTotal'] = "% Totaal";
$GLOBALS['strValue'] = "Waarde";
$GLOBALS['strAdmin'] = "Beheerder";
$GLOBALS['strWarning'] = "Waarschuwing";
$GLOBALS['strNotice'] = "Melding";
$GLOBALS['strRequiredField'] = "Verplicht veld";
$GLOBALS['strCloseWindow'] = "Venster sluiten";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "Het dashboard kan niet worden weergegeven";
$GLOBALS['strNoCheckForUpdates'] = "Het dashboard kan niet worden weergegeven, tenzij de < br / > instelling controleren voor updates wordt ingeschakeld.";
$GLOBALS['strEnableCheckForUpdates'] = "Schakel de instelling <a href='account-settings-update.php' target='_top'> controleren op updates</a> op de <br/> pagina <a href='account-settings-update.php' target='_top'> instellingen bijwerken</a> in.";
$GLOBALS['strChoosenDisableHomePage'] = "U hebt gekozen om uw beginpagina uit te schakelen.";
$GLOBALS['strAccessHomePage'] = "Klik hier voor toegang tot uw beginpagina";
$GLOBALS['strEditSyncSettings'] = "en bewerk uw synchronisatie-instellingen";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode'] = "code";
$GLOBALS['strDashboardSystemMessage'] = "Systeemmelding";
$GLOBALS['strDashboardErrorHelp'] = "Als deze fout vaker voorkomt, beschrijf dan alstublieft uw probleem in detail en plaats het op <a href='http://forum.revive-adserver.com/'> forum.revive-adserver.com/</a>.";

// Priority
$GLOBALS['strPriority'] = "Prioriteit";
$GLOBALS['strPriorityLevel'] = "Prioriteitsniveau";
$GLOBALS['strPriorityTargeting'] = "Distributie ";
$GLOBALS['strPriorityOptimisation'] = "Diversen"; // Er, what?
$GLOBALS['strOverrideAds'] = "Banners van Override campagne";
$GLOBALS['strHighAds'] = "Contract campagne advertenties";
$GLOBALS['strECPMAds'] = "eCPM campagne advertenties";
$GLOBALS['strLowAds'] = "Restant campagne advertenties";
$GLOBALS['strLimitations'] = "Limitaties ";
$GLOBALS['strNoLimitations'] = "Geen beperkingen";
$GLOBALS['strCapping'] = "Capping";
$GLOBALS['strCapped'] = "Afgetopte";
$GLOBALS['strNoCapping'] = "Geen aftopping";

// Properties
$GLOBALS['strName'] = "Naam";
$GLOBALS['strSize'] = "Afmetingen";
$GLOBALS['strWidth'] = "Breedte";
$GLOBALS['strHeight'] = "Hoogte";
$GLOBALS['strURL2'] = "URL";
$GLOBALS['strTarget'] = "Doel";
$GLOBALS['strLanguage'] = "Taal";
$GLOBALS['strDescription'] = "Beschrijving";
$GLOBALS['strVariables'] = "Variabelen";
$GLOBALS['strID'] = "ID";
$GLOBALS['strComments'] = "Notities";

// User access
$GLOBALS['strWorkingAs'] = "Aan het werken als";
$GLOBALS['strWorkingAs_Key'] = "<u>W</u>erken als";
$GLOBALS['strWorkingAs'] = "Aan het werken als";
$GLOBALS['strSwitchTo'] = "Overschakelen naar";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Het zoekvak van de switcher gebruiken om meer accounts te zoeken";
$GLOBALS['strWorkingFor'] = "%s voor...";
$GLOBALS['strNoAccountWithXInNameFound'] = "Geen accounts met \"%s\" in de naam gevonden";
$GLOBALS['strRecentlyUsed'] = "Recent gebruikt";
$GLOBALS['strLinkUser'] = "Voeg gebruiker toe";
$GLOBALS['strLinkUser_Key'] = "Voeg <u>G</u>ebruiker toe";
$GLOBALS['strUsernameToLink'] = "Gebruikersnaam van toe te voegen gebruiker";
$GLOBALS['strEmailToLink'] = "E-mail van toe te voegen gebruiker";
$GLOBALS['strNewUserWillBeCreated'] = "Nieuwe gebruiker zal worden aangemaakt";
$GLOBALS['strToLinkProvideEmail'] = "Om een gebruiker toe te voegen, voer het e-mail adres van de gebruiker in";
$GLOBALS['strToLinkProvideUsername'] = "Om een gebruiker toe te voegen, voer de gebruikersnaam in";
$GLOBALS['strErrorWhileCreatingUser'] = "Error tijdens aanmaken gebruiker: %s";
$GLOBALS['strUserLinkedToAccount'] = "Gebruiker is toegevoegd aan account";
$GLOBALS['strUserAccountUpdated'] = "Gebruikersaccount bijgewerkt";
$GLOBALS['strUserUnlinkedFromAccount'] = "Gebruiker is verwijderd uit het account";
$GLOBALS['strUserWasDeleted'] = "Gebruiker is verwijderd";
$GLOBALS['strUserNotLinkedWithAccount'] = "Deze gebruiker is niet verbonden met dit account";
$GLOBALS['strCantDeleteOneAdminUser'] = "U kunt deze gebruiker niet verwijderen. Ten minste één gebruiker moet verbonden zijn met het system administrator account.";
$GLOBALS['strLinkUserHelp'] = "Om een <b>bestaande gebruiker</b> toe te voegen, type de %1\\$s en klik %2\\$s <br />Om een <b>nieuwe gebruiker</b> toe te voegen, type de gewenste %1\\$s en klik %2\\$s";
$GLOBALS['strLinkUserHelpUser'] = "gebruikersnaam";
$GLOBALS['strLinkUserHelpEmail'] = "E-mail adres";
$GLOBALS['strLastLoggedIn'] = "Laatst ingelogd";
$GLOBALS['strDateLinked'] = "Datum gekoppeld";
$GLOBALS['strUnlink'] = "Verwijder";
$GLOBALS['strUnlinkingFromLastEntity'] = "Gebruiker verwijderen uit de laatste instantie";
$GLOBALS['strUnlinkingFromLastEntityBody'] = "Gebruiker verwijderen uit de laatste instantie zorgt ervoor dat de gebruiker wordt verwijderd. Wilt u deze gebruiker verwijderen?";
$GLOBALS['strUnlinkAndDelete'] = "Verwijder en verwijder gebruiker";
$GLOBALS['strUnlinkUser'] = "Verwijder gebruiker";
$GLOBALS['strUnlinkUserConfirmBody'] = "Weet u zeker dat u deze gebruiker wilt verwijderen?";

// Login & Permissions
$GLOBALS['strUserAccess'] = "Gebruikerstoegang";
$GLOBALS['strAdminAccess'] = "Beheerderstoegang";
$GLOBALS['strUserProperties'] = "Gebruikerseigenschappen";
$GLOBALS['strLinkNewUser'] = "Link nieuwe gebruiker";
$GLOBALS['strPermissions'] = "Permissies ";
$GLOBALS['strAuthentification'] = "Authenticatie";
$GLOBALS['strWelcomeTo'] = "Welkom bij";
$GLOBALS['strEnterUsername'] = "Voer uw gebruikersnaam en wachtwoord om in te loggen";
$GLOBALS['strEnterBoth'] = "Vul zowel uw gebruikersnaam als uw wachtwoord in";
$GLOBALS['strEnableCookies'] = "U dient cookies te accepteren voor het gebruik van {$PRODUCT_NAME}";
$GLOBALS['strSessionIDNotMatch'] = "Cookie error voor deze sessie, gelieve nogmaals in te loggen";
$GLOBALS['strLogin'] = "Inloggen";
$GLOBALS['strLogout'] = "Uitloggen";
$GLOBALS['strUsername'] = "Gebruikersnaam";
$GLOBALS['strPassword'] = "Wachtwoord";
$GLOBALS['strPasswordRepeat'] = "Herhaal het wachtwoord";
$GLOBALS['strAccessDenied'] = "Toegang geweigerd";
$GLOBALS['strUsernameOrPasswordWrong'] = "De gebruikersnaam en/of het wachtwoord zijn niet juist. Probeer het alstublieft opnieuw.";
$GLOBALS['strPasswordWrong'] = "Het wachtwoord is niet correct";
$GLOBALS['strParametersWrong'] = "De parameters die u hebt opgegeven zijn niet correct";
$GLOBALS['strNotAdmin'] = "Uw account beschikt niet over de vereiste toestemming om deze functie te gebruiken, U kunt inloggen op een andere account om dit te gebruiken.";
$GLOBALS['strDuplicateClientName'] = "De gebruikersnaam die u wenst is al in gebruik, gelieve een andere gebruikersnaam te gebruiken.";
$GLOBALS['strDuplicateAgencyName'] = "De gebruikersnaam die u wenst is al in gebruik, gelieve een andere gebruikersnaam te gebruiken.";
$GLOBALS['strInvalidPassword'] = "Het nieuwe wachtwoord is niet geldig, voer een ander wachtwoord in.";
$GLOBALS['strInvalidEmail'] = "Het e-mail adres is niet correct opgemaakt, voer svp een juist e-mailadres in.";
$GLOBALS['strNotSamePasswords'] = "De twee wachtwoorden die u ingevoerd heeft zijn niet hetzelfde";
$GLOBALS['strRepeatPassword'] = "Herhaal het wachtwoord";
$GLOBALS['strOldPassword'] = "Oud wachtwoord";
$GLOBALS['strNewPassword'] = "Nieuw wachtwoord";
$GLOBALS['strNoBannerId'] = "Geen banner ID";
$GLOBALS['strDeadLink'] = "Deze link is ongeldig";
$GLOBALS['strNoPlacement'] = "Geselecteerde campagne bestaat niet. Probeer deze <a href='{link}'>link</a> eens";
$GLOBALS['strNoAdvertiser'] = "Geselecteerde adverteerder bestaat niet. Probeer deze <a href='{link}'>link</a> eens";

// General advertising
$GLOBALS['strRequests'] = "Requests";
$GLOBALS['strImpressions'] = "Impressies";
$GLOBALS['strClicks'] = "Kliks";
$GLOBALS['strConversions'] = "Conversies ";
$GLOBALS['strCTRShort'] = "CTR";
$GLOBALS['strCTRShortHigh'] = "CTR voor hoog";
$GLOBALS['strCTRShortLow'] = "CTR voor laag";
$GLOBALS['strCNVRShort'] = "SR";
$GLOBALS['strCTR'] = "Doorklik-percentage";
$GLOBALS['strCNVR'] = "Verkoop ratio";
$GLOBALS['strCPC'] = "Kosten Per Klik";
$GLOBALS['strCPCo'] = "Kosten Per conversie";
$GLOBALS['strCPCoShort'] = "CPCo";
$GLOBALS['strCPCShort'] = "CPC";
$GLOBALS['strTotalViews'] = "Totaal aantal impressies";
$GLOBALS['strTotalClicks'] = "Totaal aantal klikken";
$GLOBALS['strTotalConversions'] = "Totaal aantal conversies";
$GLOBALS['strViewCredits'] = "Budget impressies";
$GLOBALS['strClickCredits'] = "Budget kliks";
$GLOBALS['strConversionCredits'] = "Budget conversies";
$GLOBALS['strImportStats'] = "Statistieken importeren";
$GLOBALS['strDateTime'] = "Datum tijd";
$GLOBALS['strTrackerID'] = "Tracker-ID";
$GLOBALS['strTrackerName'] = "Tracker naam";
$GLOBALS['strTrackerImageTag'] = "Afbeelding tag";
$GLOBALS['strTrackerJsTag'] = "Javascript tag";
$GLOBALS['strTrackerAlwaysAppend'] = "Altijd de toegevoegde code weergeven, zelfs als geen conversie is geconstateerd door de tracker?";
$GLOBALS['strBanners'] = "Banners";
$GLOBALS['strCampaigns'] = "Campagnes";
$GLOBALS['strCampaignID'] = "Campagne-ID";
$GLOBALS['strCampaignName'] = "Campagne naam";
$GLOBALS['strCountry'] = "Land";
$GLOBALS['strStatsAction'] = "Actie";
$GLOBALS['strWindowDelay'] = "Vertragingsperiode";
$GLOBALS['strStatsVariables'] = "Variabelen";

// Finance
$GLOBALS['strFinanceCPM'] = "CPM";
$GLOBALS['strFinanceCPC'] = "CPC";
$GLOBALS['strFinanceCPA'] = "CPA";
$GLOBALS['strFinanceMT'] = "Maandelijks bedrag";
$GLOBALS['strFinanceCTR'] = "CTR";
$GLOBALS['strFinanceCR'] = "CR";
$GLOBALS['strPercentRevenueSplit'] = "% Inkomstenverdeling";
$GLOBALS['strPercentBasketValue'] = "% van de Verkoopwaarde";
$GLOBALS['strAmountPerItem'] = "Bedrag per item";
$GLOBALS['strPercentCustomVariable'] = "% van de maatwerk variable";
$GLOBALS['strPercentSumVariables'] = "% van de Som van de variabelen";

// Time and date related
$GLOBALS['strDate'] = "Datum";
$GLOBALS['strToday'] = "Vandaag";
$GLOBALS['strDay'] = "Dag";
$GLOBALS['strDays'] = "Dagen";
$GLOBALS['strLast7Days'] = "Afgelopen 7 dagen";
$GLOBALS['strWeek'] = "Week";
$GLOBALS['strWeeks'] = "Weken";
$GLOBALS['strSingleMonth'] = "Maand";
$GLOBALS['strMonths'] = "Maanden";
$GLOBALS['strDayOfWeek'] = "Dag van de week";
$GLOBALS['strThisMonth'] = "Deze maand";

$GLOBALS['strMonth'] = array();
$GLOBALS['strMonth'][0] = "januari";
$GLOBALS['strMonth'][1] = "februari";
$GLOBALS['strMonth'][2] = "maart";
$GLOBALS['strMonth'][3] = "april";
$GLOBALS['strMonth'][4] = "mei";
$GLOBALS['strMonth'][5] = "juni";
$GLOBALS['strMonth'][6] = "juli";
$GLOBALS['strMonth'][7] = "augustus";
$GLOBALS['strMonth'][8] = "september";
$GLOBALS['strMonth'][9] = "oktober";
$GLOBALS['strMonth'][10] = "november";
$GLOBALS['strMonth'][11] = "december";

$GLOBALS['strDayFullNames'] = array();
$GLOBALS['strDayFullNames'][0] = 'zondag';
$GLOBALS['strDayFullNames'][1] = 'maandag';
$GLOBALS['strDayFullNames'][2] = 'dinsdag';
$GLOBALS['strDayFullNames'][3] = 'woensdag';
$GLOBALS['strDayFullNames'][4] = 'donderdag';
$GLOBALS['strDayFullNames'][5] = 'vrijdag';
$GLOBALS['strDayFullNames'][6] = 'zaterdag';

$GLOBALS['strDayShortCuts'] = array();
$GLOBALS['strDayShortCuts'][0] = 'zo';
$GLOBALS['strDayShortCuts'][1] = 'ma';
$GLOBALS['strDayShortCuts'][2] = 'di';
$GLOBALS['strDayShortCuts'][3] = 'wo';
$GLOBALS['strDayShortCuts'][4] = 'do';
$GLOBALS['strDayShortCuts'][5] = 'vr';
$GLOBALS['strDayShortCuts'][6] = 'za';

$GLOBALS['strHour'] = "Uur";
$GLOBALS['strHourFilter'] = "Uur filter";
$GLOBALS['strSeconds'] = "seconden";
$GLOBALS['strMinutes'] = "minuten";
$GLOBALS['strHours'] = "uren";
$GLOBALS['strTimes'] = "keer";

// Advertiser
$GLOBALS['strClient'] = "Adverteerder";
$GLOBALS['strClients'] = "Adverteerders";
$GLOBALS['strClientsAndCampaigns'] = "Adverteerders & Campagnes";
$GLOBALS['strAddClient'] = "Voeg een adverteerder toe";
$GLOBALS['strAddClient_Key'] = "<u>V</u>oeg een adverteerder toe";
$GLOBALS['strTotalClients'] = "Totaal aantal adverteerders";
$GLOBALS['strClientProperties'] = "Adverteerder eigenschappen";
$GLOBALS['strClientHistory'] = "Adverteerder geschiedenis";
$GLOBALS['strNoClients'] = "Er zijn momenteel geen adverteerders beschikbaar. Om een campagne aan te maken, <a href='advertiser-edit.php'>voeg eerst een nieuwe adverteerder toe</a>.";
$GLOBALS['strNoClientsForBanners'] = "Er zijn momenteel geen adverteerders beschikbaar. Om een campagne aan te maken, <a href='advertiser-edit.php'>voeg eerst een nieuwe adverteerder toe</a>.";
$GLOBALS['strConfirmDeleteClient'] = "Weet u zeker dat u deze adverteerder wilt verwijderen?";
$GLOBALS['strConfirmDeleteClients'] = "Weet u zeker dat u deze adverteerders wilt verwijderen?";
$GLOBALS['strConfirmResetClientStats'] = "Weet u zeker dat u alle statistieken van deze adverteerder wilt wissen?";
$GLOBALS['strSite'] = "Site";
$GLOBALS['strHideInactive'] = "niet-actieve verbergen";
$GLOBALS['strHideInactiveAdvertisers'] = "Verberg niet-actieve adverteerders";
$GLOBALS['strInactiveAdvertisersHidden'] = "niet-actieve adverteerder(s) verborgen";
$GLOBALS['strOverallAdvertisers'] = "adverteerder(s)";
$GLOBALS['strAdvertiserSignup'] = "Adverteerder aanmelden";
$GLOBALS['strAdvertiserSignupLink'] = "Adverteerder aanmeldingslink";
$GLOBALS['strAdvertiserSignupOption'] = "Adverteerder aanmeldingsoptie";
$GLOBALS['strAdvertiserCampaigns'] = "Campagnes van de adverteerder";

// Advertisers properties
$GLOBALS['strContact'] = "Contactpersoon";
$GLOBALS['strContactName'] = "Naam van de contactpersoon";
$GLOBALS['strEMail'] = "E-mail";
$GLOBALS['strChars'] = "tekens";
$GLOBALS['strSendAdvertisingReport'] = "Campagne uitleveringsrapporten per e-mail";
$GLOBALS['strNoDaysBetweenReports'] = "Aantal dagen tussen campagne uitleveringsrapporten";
$GLOBALS['strSendDeactivationWarning'] = "Stuur een e-mail wanneer de campagne geactiveerd/gedeactiveerd wordt";
$GLOBALS['strAllowClientModifyInfo'] = "Deze gebruiker kan zijn eigen instellingen wijzigen";
$GLOBALS['strAllowClientModifyBanner'] = "Deze gebruiker kan zijn eigen banners wijzigen";
$GLOBALS['strAllowClientAddBanner'] = "Deze gebruiker kan zijn eigen banners toevoegen";
$GLOBALS['strAllowClientDisableBanner'] = "Deze gebruiker kan zijn eigen banners deactiveren";
$GLOBALS['strAllowClientActivateBanner'] = "Deze gebruiker kan zijn eigen banners activeren";
$GLOBALS['strAllowClientViewTargetingStats'] = "Laat deze gebruiker de gerichte statistieken bekijken";
$GLOBALS['strAllowCreateAccounts'] = "Sta deze gebruiker toe nieuwe accounts aan te maken";
$GLOBALS['strCsvImportConversions'] = "Deze gebruiker kan offline conversies importeren";
$GLOBALS['strAdvertiserLimitation'] = "Slechts één banner van deze adverteerder op een webpagina weergeven";
$GLOBALS['strAllowAuditTrailAccess'] = "Deze gebruiker toegang tot het Audit logboek toestaan";

// Campaign
$GLOBALS['strCampaign'] = "Campagne";
$GLOBALS['strCampaigns'] = "Campagnes";
$GLOBALS['strOverallCampaigns'] = "campagne(s)";
$GLOBALS['strTotalCampaigns'] = "Totaal aantal campagnes";
$GLOBALS['strActiveCampaigns'] = "Actieve campagnes";
$GLOBALS['strAddCampaign'] = "Voeg een campagne toe";
$GLOBALS['strAddCampaign_Key'] = "<u>V</u>oeg een campagne toe";
$GLOBALS['strCampaignForAdvertiser'] = "voor adverteerder";
$GLOBALS['strCreateNewCampaign'] = "Maak nieuwe campagne";
$GLOBALS['strModifyCampaign'] = "Wijzig campagne";
$GLOBALS['strMoveToNewCampaign'] = "Verplaats naar een nieuwe campagne";
$GLOBALS['strBannersWithoutCampaign'] = "Banners zonder campagne";
$GLOBALS['strDeleteAllCampaigns'] = "Verwijder alle campagnes";
$GLOBALS['strLinkedCampaigns'] = "Gekoppelde campagnes";
$GLOBALS['strCampaignStats'] = "Campagne statistieken";
$GLOBALS['strCampaignProperties'] = "Campagne eigenschappen";
$GLOBALS['strCampaignOverview'] = "Campagne overzicht";
$GLOBALS['strCampaignHistory'] = "Campagne geschiedenis";
$GLOBALS['strNoCampaigns'] = "Er zijn momenteel geen campagnes voor deze adverteerder gedefinieerd.";
$GLOBALS['strNoCampaignsAddAdvertiser'] = "Er zijn momenteel geen campagnes beschikbaar. Om een campagne aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe adverteerder toe</a>.";
$GLOBALS['strNoCampaignsForBanners'] = "Deze adverteerder heeft geen campagnes. U dient eerst <a href='campaign-edit.php?clientid=%s'>een campagne te maken</a> om banners toe te voegen";
$GLOBALS['strConfirmDeleteAllCampaigns'] = "Weet u zeker dat u alle campagnes van deze adverteerder wilt verwijderen?";
$GLOBALS['strConfirmDeleteCampaign'] = "Weet u zeker dat u deze campagne wilt verwijderen?";
$GLOBALS['strConfirmDeleteCampaigns'] = "Weet u zeker dat u de geselecteerde campagnes wilt verwijderen?";
$GLOBALS['strConfirmResetCampaignStats'] = "Weet u zeker dat u de statistieken wilt wissen voor deze campagne?";
$GLOBALS['strShowParentAdvertisers'] = "Toon bovenliggende adverteerders";
$GLOBALS['strHideParentAdvertisers'] = "Bovenliggende adverteerders verbergen";
$GLOBALS['strHideInactiveCampaigns'] = "Verberg niet-actieve campagnes";
$GLOBALS['strInactiveCampaignsHidden'] = "niet-actieve campagne(s) verborgen";
$GLOBALS['strContractDetails'] = "Contract details";
$GLOBALS['strInventoryDetails'] = "Inventaris details";
$GLOBALS['strPriorityInformation'] = "Prioriteit in relatie tot andere campagnes";
$GLOBALS['strImpressionGoal'] = "Impressies doelstelling";
$GLOBALS['strECPMInformation'] = "eCPM Prioritisering";
$GLOBALS['strRemnantEcpmDescription'] = "eCPM wordt automatisch berekend op basis van deze resultaten van deze campagne.<br / >Het zal worden gebruikt om prioriteit te te bepalen voor Remnant campagnes ten opzichte van elkaar.";
$GLOBALS['strContractEcpmDescription'] = "eCPM wordt automatisch berekend op basis van de resultaten van deze campagne.<br / >Het zal worden gebruikt om de prioriteit te te bepalen voor campagnes met prioriteit niveaus %s tot en met %s.";
$GLOBALS['strEcpmMinImpsDescription'] = "Stel dit in op uw gewenste minimale hoeveelheid impressies voor de berekening van de campagne eCPM.";
$GLOBALS['strHiddenCampaign'] = "Campagne";
$GLOBALS['strHiddenAd'] = "Advertentie";
$GLOBALS['strHiddenAdvertiser'] = "Adverteerder";
$GLOBALS['strHiddenTracker'] = "Tracker";
$GLOBALS['strHiddenWebsite'] = "Website";
$GLOBALS['strHiddenZone'] = "Zone";
$GLOBALS['strUnderdeliveringCampaigns'] = "Campagnes die te weinig uitleveren";
$GLOBALS['strCampaignDelivery'] = "Campagne uitlevering";
$GLOBALS['strBookedMetric'] = "Ingeboekt kengetal";
$GLOBALS['strValueBooked'] = "Ingeboekte waarde";
$GLOBALS['strRemaining'] = "Resterend";
$GLOBALS['strCompanionPositioning'] = "Gelijktijdige uitlevering";
$GLOBALS['strSelectUnselectAll'] = "Selecteer/deselecteer alles";
$GLOBALS['strConfirmOverwrite'] = "Opslaan van deze wijzigingen overschrijft eventuele individuele banner-zone koppelingen. Weet je het zeker?";
$GLOBALS['strCampaignsOfAdvertiser'] = "van"; //this is added between page name and advertiser name eg. 'Campaigns of Advertiser 1'$GLOBALS['strShowCappedNoCookie'] = "Show capped ads if cookies are disabled";

// Campaign-zone linking page
$GLOBALS['strCalculatedForAllCampaigns'] = "Berekend voor alle campagnes";
$GLOBALS['strCalculatedForThisCampaign'] = "Berekend voor deze campagne";
$GLOBALS['strLinkingZonesProblem'] = "Er is een probleem opgetreden bij het koppelen van de zones";
$GLOBALS['strUnlinkingZonesProblem'] = "Er is een probleem opgetreden bij het ontkoppelen van de zones";
$GLOBALS['strZonesLinked'] = "zone(s) gekoppeld";
$GLOBALS['strZonesUnlinked'] = "zone(s) ontkoppeld";
$GLOBALS['strZonesSearch'] = "Zoeken";
$GLOBALS['strZonesSearchTitle'] = "Zones en websites zoeken op naam";
$GLOBALS['strNoWebsitesAndZones'] = "Geen websites en zones";
$GLOBALS['strNoWebsitesAndZonesCategory'] = "in categorie";
$GLOBALS['strNoWebsitesAndZonesText'] = "met \"%s\" in de naam";
$GLOBALS['strToLink'] = "koppelen";
$GLOBALS['strToUnlink'] = "koppeling verbreken";
$GLOBALS['strLinked'] = "Gekoppeld";
$GLOBALS['strAvailable'] = "Beschikbaar";
$GLOBALS['strShowing'] = "Zichtbaar";
$GLOBALS['strAllCategories'] = "alle categoriëen";
$GLOBALS['strUncategorized'] = "Ongecategoriseerd";
$GLOBALS['strEditZone'] = "Zone bewerken";
$GLOBALS['strEditWebsite'] = "Website bewerken";


// Campaign properties
$GLOBALS['strDontExpire'] = "Deze campagne niet laten vervallen op een specifieke datum";
$GLOBALS['strActivateNow'] = "Deze campagne direct activeren";
$GLOBALS['strSetSpecificDate'] = "Stel een specifieke datum in";
$GLOBALS['strLow'] = "Laag";
$GLOBALS['strHigh'] = "Hoog";
$GLOBALS['strExpirationDate'] = "Einddatum";
$GLOBALS['strExpirationDateComment'] = "Campagne zal eindigen aan het einde van deze dag";
$GLOBALS['strActivationDate'] = "Begindatum";
$GLOBALS['strActivationDateComment'] = "Campagne zal beginnen aan het begin van deze dag";
$GLOBALS['strRevenueInfo'] = "Inkomsten informatie";
$GLOBALS['strTotalRevenue'] = "Totale opbrengsten";
$GLOBALS['strImpressionsRemaining'] = "Resterende impressies ";
$GLOBALS['strClicksRemaining'] = "Resterende kliks";
$GLOBALS['strConversionsRemaining'] = "Resterende conversies";
$GLOBALS['strImpressionsBooked'] = "Geboekte impressies";
$GLOBALS['strClicksBooked'] = "Geboekte kliks";
$GLOBALS['strConversionsBooked'] = "Geboekte conversies";
$GLOBALS['strCampaignWeight'] = "Campagne gewicht";
$GLOBALS['strTargetLimitAdImpressions'] = "Gewenst aantal impressies";
$GLOBALS['strOptimise'] = "Optimaliseer de uitlevering van deze campagne.";
$GLOBALS['strAnonymous'] = "Verberg de adverteerder en websites van deze campagne";
$GLOBALS['strHighPriority'] = "Toon de banners in deze campagne met hoge prioriteit.<br />Indien u deze optie gebruikt zal {$PRODUCT_NAME} proberen om het aantal AdViews gelijkmatig over de dag de verspreiden.";
$GLOBALS['strLowPriority'] = "Toon de banners in deze campagne met lage prioriteit.<br />Deze campagne wordt gebruikt om de overgebleven AdViews te tonen, welke niet gebruikt worden door hoge prioriteit campagnes.";
$GLOBALS['strTargetPerDay'] = "per dag.";
$GLOBALS['strTargetLimitImpressionsTo'] = "Beperk impressies tot";
$GLOBALS['strPriorityAutoTargeting'] = "Gekochte AdViews en vervaldatum zijn ingesteld.
 De limiet wordt elke dag bijgesteld.";
$GLOBALS['strCampaignWarningRemnantNoWeight'] = "De prioriteit van deze campagne is laag,
terwijl het gewicht op nul is gezet of niet
gespecificeerd is. Dit zal er voor zorgen dat de campagne
gedeactiveerd wordt en de banners zullen niet getoond
worden totdat het gewicht aangepast is.

Weet u zeker dat u door wilt gaan?";
$GLOBALS['strCampaignWarningEcpmNoRevenue'] = "Deze campagne gebruikt eCPM optimalisatie
maar de 'inkomsten' zijn ingestuld op nul of niet gespecificeerd.
Dit zal er toe leiden dat de campagne wordt gedeactiveerd
en dat de bijbehorende banners niet vertoond worden tot de
inkomsten zijn ingeteld op een geldige waarde.

Weet u zeker dat u wilt doorgaan?";
$GLOBALS['strCampaignWarningOverrideNoWeight'] = "Het type van deze campagne is ingesteld op Override
maar het gewicht is ingesteld op nul of het is niet
gespecificeerd. Dat leidt er toe dat de campagne wordt
gedeactiveerd en de banners niet vertoond worden
tot het gewicht is ingesteld op een geldige waarde.

Weet u zeker dat u wilt doorgaan?";
$GLOBALS['strCampaignWarningNoTarget'] = "De prioriteit van deze campagne is hoog,
maar u heeft het aantal AdViews niet gelimiteerd tot een.
bepaald aantal. Dit zal er voor zorgen dat de campagne
 gedeactiveerd wordt en de banner zullen niet getoond
worden totdat u het aantal AdViews gelimiteerd heeft

Weet u zeker dat u door wilt gaan?";
$GLOBALS['strCampaignStatusPending'] = "Wachtend";
$GLOBALS['strCampaignStatusInactive'] = "Niet actief";
$GLOBALS['strCampaignStatusRunning'] = "Actief";
$GLOBALS['strCampaignStatusPaused'] = "Gepauzeerd";
$GLOBALS['strCampaignStatusAwaiting'] = "Wachtend";
$GLOBALS['strCampaignStatusExpired'] = "Voltooid";
$GLOBALS['strCampaignStatusApproval'] = "In afwachting van goedkeuring »";
$GLOBALS['strCampaignStatusRejected'] = "Afgewezen";
$GLOBALS['strCampaignStatusAdded'] = "Toegevoegd";
$GLOBALS['strCampaignStatusStarted'] = "Gestart";
$GLOBALS['strCampaignStatusRestarted'] = "Herstart ";
$GLOBALS['strCampaignStatusDeleted'] = "Verwijderd";
$GLOBALS['strCampaignApprove'] = "Goedkeuren";
$GLOBALS['strCampaignApproveDescription'] = "accepteren van deze campagne";
$GLOBALS['strCampaignReject'] = "Afwijzen";
$GLOBALS['strCampaignRejectDescription'] = "deze campagne afwijzen";
$GLOBALS['strCampaignPause'] = "Pauseren";
$GLOBALS['strCampaignPauseDescription'] = "tijdelijk onderbreken van deze campagne";
$GLOBALS['strCampaignRestart'] = "Hervatten";
$GLOBALS['strCampaignRestartDescription'] = "deze campagne hervatten";
$GLOBALS['strCampaignStatus'] = "Campagnestatus";
$GLOBALS['strReasonForRejection'] = "Reden voor afwijzing";
$GLOBALS['strReasonSiteNotLive'] = "Site niet live";
$GLOBALS['strReasonBadCreative'] = "Ongepaste creative";
$GLOBALS['strReasonBadUrl'] = "Ongepaste doel-URL";
$GLOBALS['strReasonBreakTerms'] = "Website voldoet niet aan de voorwaarden";
$GLOBALS['strChangeStatus'] = "Status wijzigen";
$GLOBALS['strCampaignType'] = "Campagnetype";
$GLOBALS['strType'] = "Type";
$GLOBALS['strContract'] = "Contract";
$GLOBALS['strOverride'] = "Override";
$GLOBALS['strOverrideInfo'] = "Override campagnes zijn een speciaal soort campagnes die specifiek gebruikt worden om
    Remnant en Contract campagnes te verdringen. Override campagnes worden over het algemeen gebruikt met
    specifieke targeting en/of capping regels om er voor te zorgen dat de banners altijd vertoond worden op bepaalde
    locaties, aan bepaalde gebruikers, of misschien een bepaald aantal keren, als onderdeel van een specifieke promotie. (Dit campagne
    type stond vroeger bekend als 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract'] = "Contract";
$GLOBALS['strRemnant'] = "Restant";
$GLOBALS['strContractCampaign'] = "Contract campagne";
$GLOBALS['strRemnantCampaign'] = "Restant campagne";
$GLOBALS['strPricing'] = "Prijsmodel";
$GLOBALS['strPricingModel'] = "Prijsmodel";
$GLOBALS['strSelectPricingModel'] = "-- selecteer model --";
$GLOBALS['strRatePrice'] = "Tarief / Prijs";
$GLOBALS['strMinimumImpressions'] = "Minimale aantal dagelijkse vertoningen";
$GLOBALS['strLimit'] = "Limiet";
$GLOBALS['strLowExclusiveDisabled'] = "U kunt deze campagne niet wijzigen in Restant of Override, aangezien zowel een einddatum als een impressies/kliks/conversies maximum is ingesteld.<br>Om het type te veranderen, dient u eerst de einddatum of the maximum waarde te verwijderen.";
$GLOBALS['strCannotSetBothDateAndLimit'] = "U kunt niet zowel een begin-en einddatum en de maximum instellen voor een Remnant of een Override campagne.<br>Als u zowel een einddatum als een maximaal aantal impressies/kliks/conversies wilt instellen, kies dan een Contract campagne.";
$GLOBALS['strWhyDisabled'] = "Waarom is dit uitgeschakeld?";
$GLOBALS['strBackToCampaigns'] = "Terug naar campagnes";
$GLOBALS['strCampaignBanners'] = "Banners van deze campagne";
$GLOBALS['strCookies'] = "Cookies";

// Tracker
$GLOBALS['strTracker'] = "Tracker";
$GLOBALS['strTrackers'] = "Trackers";
$GLOBALS['strTrackerOverview'] = "Tracker overzicht";
$GLOBALS['strTrackerPreferences'] = "Tracker voorkeuren";
$GLOBALS['strAddTracker'] = "Toevoegen van nieuwe tracker";
$GLOBALS['strAddTracker_Key'] = "Voeg een <u>n</u>ieuwe tracker toe";
$GLOBALS['strTrackerForAdvertiser'] = "voor adverteerder";
$GLOBALS['strNoTrackers'] = "Er zijn momenteel geen trackers gedefinieerd voor deze adverteerder";
$GLOBALS['strConfirmDeleteAllTrackers'] = "Weet je zeker dat je alle trackers van deze adverteerder wilt verwijderen?";
$GLOBALS['strConfirmDeleteTrackers'] = "Weet u zeker dat u alle geselecteerde trackers wilt verwijderen?";
$GLOBALS['strConfirmDeleteTracker'] = "Weet u zeker dat u deze tracker wilt verwijderen?";
$GLOBALS['strDeleteAllTrackers'] = "Verwijderen van alle trackers";
$GLOBALS['strTrackerProperties'] = "Tracker eigenschappen";
$GLOBALS['strTrackerOverview'] = "Tracker overzicht";
$GLOBALS['strModifyTracker'] = "Tracker wijzigen";
$GLOBALS['strDefaultStatus'] = "Standaard Status";
$GLOBALS['strStatus'] = "Status";
$GLOBALS['strLinkedTrackers'] = "Gekoppelde Trackers";
$GLOBALS['strTrackerInformation'] = "Tracker informatie";
$GLOBALS['strConversionWindow'] = "Conversie tijdsvenster";
$GLOBALS['strUniqueWindow'] = "Uniek scherm";
$GLOBALS['strClick'] = "Klik";
$GLOBALS['strView'] = "Impressie";
$GLOBALS['strArrival'] = "Aankomst";
$GLOBALS['strManual'] = "Handmatig";
$GLOBALS['strImpression'] = "Impressie";
$GLOBALS['strConversionClickWindow'] = "Aantal conversies die zich binnen dit aantal seconden van een klik voordoen tellen";
$GLOBALS['strConversionViewWindow'] = "Aantal conversies die zich binnen dit aantal seconden van een weergave voordoen";
$GLOBALS['strTotalTrackerImpressions'] = "Totale aantal impressies";
$GLOBALS['strTotalTrackerConversions'] = "Totaal aantal conversies";
$GLOBALS['strTrackerImpressions'] = "Impressies";
$GLOBALS['strConversionType'] = "Conversietype";
$GLOBALS['strLinkCampaignsByDefault'] = "Koppel nieuw gecreëerde campagnes standaard";
$GLOBALS['strNoLinkedTrackersDropdown'] = "--Geen gekoppelde tracker--";
$GLOBALS['strPerSingleImpression'] = "per één vertoning";
$GLOBALS['strBackToTrackers'] = "Terug naar trackers";
$GLOBALS['strIPAddress'] = "IP-Adres";

// Banners (General)
$GLOBALS['strBanner'] = "Banner";
$GLOBALS['strBanners'] = "Banners";
$GLOBALS['strBannerFilter'] = "Banner Filter";
$GLOBALS['strAddBanner'] = "Voeg een banner toe";
$GLOBALS['strAddBanner_Key'] = "<u>V</u>oeg een banner toe";
$GLOBALS['strBannerToCampaign'] = "aan campagne";
$GLOBALS['strModifyBanner'] = "Wijzig banner";
$GLOBALS['strActiveBanners'] = "Actieve banners";
$GLOBALS['strTotalBanners'] = "Totaal aantal banners";
$GLOBALS['strShowBanner'] = "Toon banner";
$GLOBALS['strShowAllBanners'] = "Toon alle banners";
$GLOBALS['strShowBannersNoAdViews'] = "Toon banners zonder impressies";
$GLOBALS['strShowBannersNoAdClicks'] = "Toon banners zonder kliks";
$GLOBALS['strShowBannersNoAdConversions'] = "Toon banners zonder verkopen";
$GLOBALS['strDeleteAllBanners'] = "Verwijder alle banners";
$GLOBALS['strActivateAllBanners'] = "Activeer alle banners";
$GLOBALS['strDeactivateAllBanners'] = "Deactiveer alle banners";
$GLOBALS['strBannerOverview'] = "Banner overzicht";
$GLOBALS['strBannerProperties'] = "Banner eigenschappen";
$GLOBALS['strBannerHistory'] = "Banner geschiedenis";
$GLOBALS['strBannerNoStats'] = "Er zijn geen statistieken beschikbaar voor deze banner";
$GLOBALS['strNoBanners'] = "Er zijn momenteel geen banners gedefinieerd voor deze campagne.";
$GLOBALS['strNoBannersAddCampaign'] = "Er zijn momenteel geen websites beschikbaar. Om een zone aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe website toe</a> .";
$GLOBALS['strNoBannersAddAdvertiser'] = "Er zijn momenteel geen banners beschikbaar. Om een banner aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe adverteerder toe</a> .";
$GLOBALS['strConfirmDeleteBanner'] = "Verwijderen van deze banner zal ook bijbehorende statistieken verwijderen. \\nWeet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strConfirmDeleteBanners'] = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strConfirmDeleteAllBanners'] = "Weet u zeker dat u alle banners die bij deze campagne horen wilt vewijderen?";
$GLOBALS['strConfirmResetBannerStats'] = "Weet u zeker dat u de statistieken wilt wissen voor deze banner?";
$GLOBALS['strShowParentCampaigns'] = "Toon bovenliggende campagnes";
$GLOBALS['strHideParentCampaigns'] = "Verberg bovenliggende campagnes";
$GLOBALS['strHideInactiveBanners'] = "Verberg niet-actieve banners";
$GLOBALS['strInactiveBannersHidden'] = "niet-actieve banner(s) verborgen";
$GLOBALS['strAppendOthers'] = "Voeg andere toe";
$GLOBALS['strAppendTextAdNotPossible'] = "Het is niet mogelijk om andere banners toe te voegen aan tekst advertenties.";
$GLOBALS['strHiddenBanner'] = "Verborgen banner";
$GLOBALS['strWarningTag1'] = "Waarschuwing, tag ";
$GLOBALS['strWarningTag2'] = " is  mogelijk niet gesloten/geopend";
$GLOBALS['strWarningMissing'] = "Waarschuwing, mogelijk ontbrekende ";
$GLOBALS['strWarningMissingClosing'] = " afsluitende tag '>'";
$GLOBALS['strWarningMissingOpening'] = " Begin-tag '<'";
$GLOBALS['strSubmitAnyway'] = "Toch opslaan";
$GLOBALS['strOverallBanners'] = "banner(s)";
$GLOBALS['strBannersOfCampaign'] = "in"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'// Banner Preferences
$GLOBALS['strBannerPreferences'] = "Banner voorkeuren";
$GLOBALS['strCampaignPreferences'] = "Campagne voorkeuren";
$GLOBALS['strDefaultBanners'] = "Standaard Banners";
$GLOBALS['strDefaultBannerUrl'] = "Standaard afbeelding URL";
$GLOBALS['strDefaultBannerDestination'] = "Standaard bestemmings URL";
$GLOBALS['strAllowedBannerTypes'] = "Toegestane bannertypes";
$GLOBALS['strTypeSqlAllow'] = "SQL Local banners toestaan";
$GLOBALS['strTypeWebAllow'] = "Webserver local banners toestaan";
$GLOBALS['strTypeUrlAllow'] = "Externe banners toestaan";
$GLOBALS['strTypeHtmlAllow'] = "HTML banners toestaan";
$GLOBALS['strTypeTxtAllow'] = "Tekstadvertenties toestaan";
$GLOBALS['strTypeHtmlSettings'] = "HTML Banner opties";
$GLOBALS['strTypeHtmlAuto'] = "Automatisch HTML-banners aanpassen om click tracking te forceren";
$GLOBALS['strTypeHtmlPhp'] = "Toestaan dat PHP expressies worden uitgevoerd vanuit een HTML banner";

// Banner (Properties)
$GLOBALS['strChooseBanner'] = "Kies het banner type";
$GLOBALS['strMySQLBanner'] = "Een lokale banner uploaden naar de database";
$GLOBALS['strWebBanner'] = "Een lokale banner uploaden naar de webserver";
$GLOBALS['strURLBanner'] = "Externe banner koppelen";
$GLOBALS['strHTMLBanner'] = "Een HTML banner maken";
$GLOBALS['strTextBanner'] = "Maak een tekstadvertentie";
$GLOBALS['strAlterHTML'] = "HTML code aanpassen om click tracking mogelijk te maken voor:";
$GLOBALS['strIframeFriendly'] = "Deze banner kan veilig worden weergegeven binnen een iframe (is bijvoorbeeld niet uitklapbaar)";
$GLOBALS['strUploadOrKeep'] = "Wilt u uw bestaande afbeelding <br />houden, of wilt u een <br />nieuwe afbeelding uploaden?";
$GLOBALS['strUploadOrKeepAlt'] = "Wilt u uw bestaande afbeelding <br />houden, of wilt u een <br />nieuwe afbeelding uploaden?";
$GLOBALS['strNewBannerFile'] = "Selecteer de afbeelding die u <br />wilt gebruiken voor deze banner<br /><br />";
$GLOBALS['strNewBannerURL'] = "Afbeelding URL (incl. http://)";
$GLOBALS['strURL'] = "Doel URL (incl. http://)";
$GLOBALS['strHTML'] = "HTML";
$GLOBALS['strKeyword'] = "Sleutelwoorden";
$GLOBALS['strTextBelow'] = "Tekst onder banner";
$GLOBALS['strWeight'] = "Gewicht";
$GLOBALS['strAlt'] = "Alternative tekst";
$GLOBALS['strStatusText'] = "Status tekst";
$GLOBALS['strBannerWeight'] = "Banner gewicht";
$GLOBALS['strBannerType'] = "Advertentietype";
$GLOBALS['strAdserverTypeGeneric'] = "Generieke HTML Banner";
$GLOBALS['strDoNotAlterHtml'] = "Breng geen wijzigingen aan in HTML";
$GLOBALS['strGenericOutputAdServer'] = "Generiek";
$GLOBALS['strSwfTransparency'] = "Transparante achtergrond toestaan";
$GLOBALS['strBackToBanners'] = "Terug naar banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML'] = "Altijd de volgende HTML-code aan deze banner toevoegen";
$GLOBALS['strBannerAppendHTML'] = "Altijd de volgende HTML-code aan deze banner toevoegen";

// Banner (swf)
$GLOBALS['strCheckSWF'] = "Controleer op vaste links in het Flash bestand";
$GLOBALS['strConvertSWFLinks'] = "Converteer Flash links";
$GLOBALS['strHardcodedLinks'] = "Hard-coded links";
$GLOBALS['strConvertSWF'] = "<br />Het Flash bestand dat u zojuist upgeload heeft bevat vaste links. Pas als deze vaste links geconverteerd zijn zal {$PRODUCT_NAME} AdClicks kunnen volgen voor deze banner. Hieronder vindt u een lijst met alle links welke in het Flash bestand aanwezig zijn. Indien u de links wilt converteren, klik dan op <b>Converteer</b>, klik anders op <b>Annuleer</b>.<br /><br />Notitie: Als u klikt op <b>Converteer</b> zal het Flash bestand welke u zojuist geupload heeft veranderd worden. <br />Bewaar het orginele bestand goed. Ongeacht in welke versie de banner gemaakt is, het geconverteerde bestand zal alleen goed te zien zijn met de Flash 4 player (of hoger).<br /><br />";
$GLOBALS['strCompressSWF'] = "Comprimeer SWF bestand voor versneld downloaden (Flash 6 speler benodigd)";
$GLOBALS['strOverwriteSource'] = "Overschrijft de Source parameter";
$GLOBALS['strLinkToShort'] = "Waarschuwing: Hard-coded URLs aangetroffen - maar de URL is te kort om automatisch te worden gewijzigd";

// Banner (network)
$GLOBALS['strBannerNetwork'] = "HTML sjabloon";
$GLOBALS['strChooseNetwork'] = "Kies het sjabloon dat u wilt gebruiken";
$GLOBALS['strMoreInformation'] = "Meer informatie...";
$GLOBALS['strTrackAdClicks'] = "Tel kliks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts'] = "AdSense accounts";
$GLOBALS['strLinkAdSenseAccount'] = "AdSense-Account koppelen";
$GLOBALS['strCreateAdSenseAccount'] = "Maak AdSense account";
$GLOBALS['strEditAdSenseAccount'] = "Verander AdSense account";

// Display limitations
$GLOBALS['strModifyBannerAcl'] = "Uitleveringsbeperkingen";
$GLOBALS['strACL'] = "Uitlevering";
$GLOBALS['strACLAdd'] = "Voeg nieuwe beperking toe";
$GLOBALS['strACLAdd_Key'] = "<u>V</u>oeg nieuwe beperking toe";
$GLOBALS['strNoLimitations'] = "Geen beperkingen";
$GLOBALS['strApplyLimitationsTo'] = "Pas beperking toe op";
$GLOBALS['strAllBannersInCampaign'] = "Alle banners in deze campagne";
$GLOBALS['strRemoveAllLimitations'] = "Verwijder alle beperkingen";
$GLOBALS['strEqualTo'] = "is gelijk aan";
$GLOBALS['strDifferentFrom'] = "is verschillend van";
$GLOBALS['strLaterThan'] = "is later dan";
$GLOBALS['strLaterThanOrEqual'] = "is later dan of gelijk aan";
$GLOBALS['strEarlierThan'] = "is vroeger dan";
$GLOBALS['strEarlierThanOrEqual'] = "is vroeger dan of gelijk aan";
$GLOBALS['strContains'] = "bevat";
$GLOBALS['strNotContains'] = "bevat niet";
$GLOBALS['strGreaterThan'] = "is groter dan";
$GLOBALS['strLessThan'] = "is minder dan";
$GLOBALS['strAND'] = "EN";                          // logical operator
$GLOBALS['strOR'] = "OF";                         // logical operator
$GLOBALS['strOnlyDisplayWhen'] = "Toon deze banner alleen indien:";
$GLOBALS['strWeekDay'] = "Weekdag";
$GLOBALS['strWeekDays'] = "Weekdagen";
$GLOBALS['strTime'] = "Tijd";
$GLOBALS['strUserAgent'] = "Useragent";
$GLOBALS['strDomain'] = "Domain";
$GLOBALS['strClientIP'] = "Client IP";
$GLOBALS['strSource'] = "Bron";
$GLOBALS['strBrowser'] = "Browser";
$GLOBALS['strOS'] = "OS";
$GLOBALS['strCountryCode'] = "Landcode (ISO 3166)";
$GLOBALS['strCountryName'] = "Naam van het land";
$GLOBALS['strRegion'] = "Regiocode (ISO-3166-2 of FIPS 10-4)";
$GLOBALS['strCity'] = "Plaats";
$GLOBALS['strPostalCode'] = "U.S. / Canada ZIP/Postcode";
$GLOBALS['strLatitude'] = "Breedtegraad";
$GLOBALS['strLongitude'] = "Lengtegraad";
$GLOBALS['strDMA'] = "Amerikaanse DMA Code";
$GLOBALS['strOrg'] = "Naam van de organisatie";
$GLOBALS['strIsp'] = "ISP naam";
$GLOBALS['strNetspeed'] = "Internet verbindingssnelheid";
$GLOBALS['strReferer'] = "Verwijzende pagina";
$GLOBALS['strDeliveryLimitations'] = "Uitleveringsbeperkingen";

$GLOBALS['strDeliveryCapping'] = "Leveringsplafond";
$GLOBALS['strDeliveryCappingReset'] = "Reset vertoningentellers na:";
$GLOBALS['strDeliveryCappingTotal'] = "in totaal";
$GLOBALS['strDeliveryCappingSession'] = "per sessie";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = "Leveringsplafond";
$GLOBALS['strCappingBanner']['limit'] = "Limiteer banner vertoningen tot";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = "Leveringsplafond";
$GLOBALS['strCappingCampaign']['limit'] = "Limiteer campagne vertoningen tot:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = "{$GLOBALS['strDeliveryCapping']}";
$GLOBALS['strCappingZone']['limit'] = "Limiteer zone vertoningen tot:";

// Website
$GLOBALS['strAffiliate'] = "Website";
$GLOBALS['strAffiliates'] = "Websites";
$GLOBALS['strAffiliatesAndZones'] = "Websites & Zones";
$GLOBALS['strAddNewAffiliate'] = "Voeg een website toe";
$GLOBALS['strAddNewAffiliate_Key'] = "<u>V</u>oeg een website toe";
$GLOBALS['strAddAffiliate'] = "Maak website";
$GLOBALS['strAffiliateProperties'] = "Website eigenschappen";
$GLOBALS['strAffiliateOverview'] = "Website overzicht";
$GLOBALS['strAffiliateHistory'] = "Website geschiedenis";
$GLOBALS['strZonesWithoutAffiliate'] = "Zones zonder website";
$GLOBALS['strMoveToNewAffiliate'] = "Verplaats naar een nieuwe website";
$GLOBALS['strNoAffiliates'] = "Er zijn momenteel geen websites beschikbaar. Om een zone aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe website toe</a> .";
$GLOBALS['strConfirmDeleteAffiliate'] = "Weet u zeker dat u deze website wilt wissen?";
$GLOBALS['strConfirmDeleteAffiliates'] = "Weet u zeker dat u de geselecteerde websites wilt wissen?";
$GLOBALS['strMakePublisherPublic'] = "Maak de zones die horen bij deze website publiekelijk toegankelijk";
$GLOBALS['strAffiliateInvocation'] = "Invocatiecode";
$GLOBALS['strAdvertiserSetup'] = "Adverteerder aanmelden";
$GLOBALS['strTotalAffiliates'] = "Total aantal websites";
$GLOBALS['strInactiveAffiliatesHidden'] = "niet-actieve website(s) verborgen";
$GLOBALS['strShowParentAffiliates'] = "Toon bovenliggende websites";
$GLOBALS['strHideParentAffiliates'] = "Verberg de bovenliggende websites";

// Website (properties)
$GLOBALS['strWebsite'] = "Website";
$GLOBALS['strWebsiteURL'] = "Website URL";
$GLOBALS['strMnemonic'] = "Mnemonic";
$GLOBALS['strAllowAffiliateModifyInfo'] = "Deze gebruiker kan zijn eigen instellingen wijzigen";
$GLOBALS['strAllowAffiliateModifyZones'] = "Deze gebruiker kan zijn eigen zones wijzigen";
$GLOBALS['strAllowAffiliateLinkBanners'] = "Deze gebruiker kan banners koppelen aan zijn eigen zones";
$GLOBALS['strAllowAffiliateAddZone'] = "Toestaan dat deze gebruiker nieuwe zones mag definiëren";
$GLOBALS['strAllowAffiliateDeleteZone'] = "Deze gebruiker kan bestaande zones verwijderen";
$GLOBALS['strAllowAffiliateGenerateCode'] = "Deze gebruiker toestaan om invocation code te genereren";
$GLOBALS['strAllowAffiliateZoneStats'] = "Laat deze gebruiker de gerichte statistieken bekijken";
$GLOBALS['strAllowAffiliateApprPendConv'] = "Deze gebruiker toestaan om alleen goedgekeurde conversies of conversies in behandeling te bekijken";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation'] = "Betalingsinformatie ";
$GLOBALS['strAddress'] = "Adres";
$GLOBALS['strPostcode'] = "Postcode";
$GLOBALS['strCity'] = "Plaats";
$GLOBALS['strCountry'] = "Land";
$GLOBALS['strPhone'] = "Telefoon";
$GLOBALS['strFax'] = "Fax";
$GLOBALS['strAccountContact'] = "Contactpersoon van account";
$GLOBALS['strPayeeName'] = "Naam begunstigde";
$GLOBALS['strTaxID'] = "Belastingnummer";
$GLOBALS['strModeOfPayment'] = "Wijze van betaling";
$GLOBALS['strPaymentChequeByPost'] = "Cheque per post";
$GLOBALS['strCurrency'] = "Valuta";
$GLOBALS['strCurrencyGBP'] = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation'] = "Andere informatie";
$GLOBALS['strUniqueUsersMonth'] = "aantal unieke gebruikers/maand";
$GLOBALS['strUniqueViewsMonth'] = "Aantal unieke vertoningen/maand";
$GLOBALS['strCategory'] = "Categorie";
$GLOBALS['strPrimaryCategory'] = "Primaire categorie";
$GLOBALS['strSecondaryCategory'] = "Secundaire categorie";
$GLOBALS['strHelpFile'] = "Help bestand";
$GLOBALS['strApprovedTandC'] = "Goedgekeurde bepalingen en voorwaarden";
$GLOBALS['strWebsiteZones'] = "Zones van de website";

// Zone
$GLOBALS['strChooseZone'] = "Kies zone";
$GLOBALS['strZone'] = "Zone";
$GLOBALS['strZones'] = "Zones";
$GLOBALS['strAddNewZone'] = "Voeg een zone toe";
$GLOBALS['strAddNewZone_Key'] = "<u>V</u>oeg een zone toe";
$GLOBALS['strAddZone'] = "Maak zone";
$GLOBALS['strModifyZone'] = "Wijzig zone";
$GLOBALS['strZoneToWebsite'] = "aan website";
$GLOBALS['strLinkedZones'] = "Gekoppelde zones";
$GLOBALS['strAvailableZones'] = "Beschikbare Zones";
$GLOBALS['strLinkingNotSuccess'] = "Koppelen niet gelukt, probeer het svp opnieuw";
$GLOBALS['strZoneOverview'] = "Zone overzicht";
$GLOBALS['strZoneProperties'] = "Zone eigenschappen";
$GLOBALS['strZoneHistory'] = "Zone geschiedenis";
$GLOBALS['strNoZones'] = "Er zijn momenteel geen zones gedefinieerd voor deze website.";
$GLOBALS['strNoZonesAddWebsite'] = "Er zijn momenteel geen websites beschikbaar. Om een zone aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe website toe</a> .";
$GLOBALS['strConfirmDeleteZone'] = "Weet u zeker dat u deze zone wilt verwijderen?";
$GLOBALS['strConfirmDeleteZones'] = "Weet u zeker dat u de geselecteerde zone wilt verwijderen?";
$GLOBALS['strZoneType'] = "Zonetype";
$GLOBALS['strBannerButtonRectangle'] = "Banner, Button of Rectangle";
$GLOBALS['strInterstitial'] = "Interstitial of Floating DHTML";
$GLOBALS['strPopup'] = "Popup";
$GLOBALS['strTextAdZone'] = "Tekst advertentie";
$GLOBALS['strEmailAdZone'] = "E-mail/nieuwsbrief zone";
$GLOBALS['strZoneVideoInstream'] = "Inline Video-advertentie";
$GLOBALS['strZoneVideoOverlay'] = "Video overlay-advertentie";
$GLOBALS['strShowMatchingBanners'] = "Toon overeenkomende banners";
$GLOBALS['strHideMatchingBanners'] = "Overeenkomende banners verbergen";
$GLOBALS['strBannerLinkedAds'] = "Banners gekoppeld aan de zone";
$GLOBALS['strCampaignLinkedAds'] = "Campagnes gekoppeld aan de zone";
$GLOBALS['strTotalZones'] = "Totaal aantal zones";
$GLOBALS['strInactiveZonesHidden'] = "niet-actieve banner(s) verborgen";
$GLOBALS['strZonesOfWebsite'] = 'in'; //this is added between page name and website name eg. 'Zones in www.example.com'$GLOBALS['strBackToZones'] = "Back to zones";

$GLOBALS['strIab']['IAB_FullBanner(468x60)'] = "IAB Full Banner (468 x 60)";
$GLOBALS['strIab']['IAB_Skyscraper(120x600)'] = "IAB Skyscraper (120 x 600)";
$GLOBALS['strIab']['IAB_Leaderboard(728x90)'] = "IAB Leaderboard (728 x 90)";
$GLOBALS['strIab']['IAB_Button1(120x90)'] = "IAB Knop 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)'] = "IAB Knop 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)'] = "IAB Half Banner (234 x 60)";
$GLOBALS['strIab']['IAB_MicroBar(88x31)'] = "IAB Micro Bar (88 x 31)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)'] = "IAB Square Button (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*'] = "IAB Rectangle (180 x 150)";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)'] = "IAB Vierkante Pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)'] = "IAB Vertical Banner (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*'] = "IAB Medium Rectangle (300 x 250)";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)'] = "IAB Large Rectangle  (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Vertical Rectangle (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*'] = "IAB Wide Skyscraper (160 x 600)";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)'] = "IAB Pop-Under (720 x 300)";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)'] = "IAB 3:1 Rectangle (300 x 100)";

// Advanced zone settings
$GLOBALS['strAdvanced'] = "Geavanceerd";
$GLOBALS['strChains'] = "Kettingen";
$GLOBALS['strChainSettings'] = "Ketting instellingen";
$GLOBALS['strZoneNoDelivery'] = "Indien er geen banners van deze<br />zone geleverd kunnen worden, probeer...";
$GLOBALS['strZoneStopDelivery'] = "Stop levering en toon geen banner";
$GLOBALS['strZoneOtherZone'] = "Toon de geselecteerde zone";
$GLOBALS['strZoneUseKeywords'] = "Selecteer een banner met de volgende sleutelwoorden";
$GLOBALS['strZoneAppend'] = "Voeg altijd de volgende<br /> HTML code altijd toe<br /> aan deze zone";
$GLOBALS['strAppendSettings'] = "Invoeg instellingen";
$GLOBALS['strZonePrependHTML'] = "Voeg de volgende HTML code altijd toe voor de HTML code die getoond wordt door deze zone";
$GLOBALS['strZoneAppendHTML'] = "Voeg de volgende HTML code altijd toe na de HTML code die getoond wordt door deze zone";
$GLOBALS['strZoneAppendType'] = "Toevoeg type";
$GLOBALS['strZoneAppendHTMLCode'] = "HTML-code";
$GLOBALS['strZoneAppendZoneSelection'] = "Popup of interstitial";
$GLOBALS['strZoneAppendSelectZone'] = "Voeg altijd de volgende popup of intersitial toe aan banners die getoond worden door deze zone";

// Zone probability
$GLOBALS['strZoneProbListChain'] = "De banners welke gekoppeld zijn aan deze zone zijn niet actief. <br />De volgende ketting wordt daarom gebruikt:";
$GLOBALS['strZoneProbNullPri'] = "De banners welke gekoppeld zijn aan deze zone zijn niet actief.";
$GLOBALS['strZoneProbListChainLoop'] = "De ketting welke gevolgd wordt is aan zichzelf gekoppeld. Het is niet mogelijk om deze zone te tonen";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType'] = "Kies de manier van banners koppelen";
$GLOBALS['strLinkedBanners'] = "Koppel individuele banners";
$GLOBALS['strCampaignDefaults'] = "Koppeling banners via bovenliggende campagne";
$GLOBALS['strLinkedCategories'] = "Koppeling banners via categorie";
$GLOBALS['strWithXBanners'] = "%d banner(s)";
$GLOBALS['strInteractive'] = "Interactief";
$GLOBALS['strRawQueryString'] = "Sleutelwoord";
$GLOBALS['strIncludedBanners'] = "Gekoppelde banners";
$GLOBALS['strLinkedBannersOverview'] = "Overzicht gekoppelde banners";
$GLOBALS['strLinkedBannerHistory'] = "Gekoppelde banner geschiedenis";
$GLOBALS['strNoZonesToLink'] = "Er zijn geen zones aanwezig waar deze banner aan gekoppeld kan worden";
$GLOBALS['strNoBannersToLink'] = "Er zijn momenteel geen banners beschikbaar welke gekoppeld kunnen worden aan deze zone";
$GLOBALS['strNoLinkedBanners'] = "Er zijn banners beschikbaar welke gekoppeld zijn aan deze zone";
$GLOBALS['strMatchingBanners'] = "{count} geschikte banners";
$GLOBALS['strNoCampaignsToLink'] = "Er zijn momenteel geen campagnes beschikbaar welke gekoppeld kunnen worden aan deze zone";
$GLOBALS['strNoTrackersToLink'] = "Er zijn momenteel geen trackers beschikbaar welke gekoppeld kunnen worden aan deze campagne";
$GLOBALS['strNoZonesToLinkToCampaign'] = "Er zijn geen zones aanwezig waar deze campagne aan gekoppeld kan worden";
$GLOBALS['strSelectBannerToLink'] = "Selecteer de banner welke u wilt koppelen aan deze zone:";
$GLOBALS['strSelectCampaignToLink'] = "Selecteer de campagne welke u wilt koppelen aan deze zone:";
$GLOBALS['strSelectAdvertiser'] = "Selecteer adverteerder";
$GLOBALS['strSelectPlacement'] = "Selecteer campagne";
$GLOBALS['strSelectAd'] = "Selecteer Banner";
$GLOBALS['strSelectPublisher'] = "Selecteer website";
$GLOBALS['strSelectZone'] = "Selecteer zone";
$GLOBALS['strTrackerCode'] = "De volgende code toevoegen aan elke Javascript tracker impressies";
$GLOBALS['strTrackerCodeSubject'] = "Append tracker-code";
$GLOBALS['strAppendTrackerNotPossible'] = "Het is niet mogelijk om deze tracker toe te voegen.";
$GLOBALS['strStatusPending'] = "In behandeling";
$GLOBALS['strStatusApproved'] = "Goedgekeurd";
$GLOBALS['strStatusDisapproved'] = "Afgekeurd";
$GLOBALS['strStatusDuplicate'] = "Dupliceren";
$GLOBALS['strStatusOnHold'] = "In de wachtstand";
$GLOBALS['strStatusIgnore'] = "Negeren";
$GLOBALS['strConnectionType'] = "Type";
$GLOBALS['strConnTypeSale'] = "Verkoop";
$GLOBALS['strConnTypeLead'] = "Potentiële klant";
$GLOBALS['strConnTypeSignUp'] = "Aanmelding";
$GLOBALS['strShortcutEditStatuses'] = "Statussen bewerken";
$GLOBALS['strShortcutShowStatuses'] = "Toon statussen";

// Statistics
$GLOBALS['strStats'] = "Statistieken";
$GLOBALS['strNoStats'] = "Er zijn momenteel geen statistieken beschikbaar";
$GLOBALS['strNoTargetingStats'] = "Er zijn momenteel geen statistieken beschikbaar";
$GLOBALS['strNoStatsForPeriod'] = "Er zijn momenteel geen statistieken beschikbaar voor de periode van  %s tot %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Er zijn momenteel geen statistieken beschikbaar voor de periode van  %s tot %s";
$GLOBALS['strConfirmResetStats'] = "Weet u zeker dat u alle statistieken wilt wissen?";
$GLOBALS['strGlobalHistory'] = "Globale geschiedenis";
$GLOBALS['strDailyHistory'] = "Dagelijkse geschiedenis";
$GLOBALS['strDailyStats'] = "Dagelijkse statistieken";
$GLOBALS['strWeeklyHistory'] = "Weeklijkse geschiedenis";
$GLOBALS['strMonthlyHistory'] = "Maandelijkse geschiedenis";
$GLOBALS['strCreditStats'] = "Krediet statistieken";
$GLOBALS['strDetailStats'] = "Gedetailleerde statistieken";
$GLOBALS['strTotalThisPeriod'] = "Totaal deze periode";
$GLOBALS['strAverageThisPeriod'] = "Gemiddelde deze periode";
$GLOBALS['strResetStats'] = "Wis Statistieken";
$GLOBALS['strSourceStats'] = "Bron statistieken";
$GLOBALS['strSelectSource'] = "Selecteer de bron die u wilt bekijken:";
$GLOBALS['strSizeDistribution'] = "Distributie op grootte";
$GLOBALS['strCountryDistribution'] = "Distributie op land";
$GLOBALS['strEffectivity'] = "Effectiviteit";
$GLOBALS['strTargetStats'] = "Doelberekeningen";
$GLOBALS['strCampaignTarget'] = "Doel";
$GLOBALS['strTargetRatio'] = "Doel ratio";
$GLOBALS['strTargetModifiedDay'] = "Er zijn doelen gewijzigd gedurende de dag, hierdoor waren de berekeningen niet accuraat";
$GLOBALS['strTargetModifiedWeek'] = "Er zijn doelen gewijzigd gedurende de week, hierdoor waren de berekeningen niet accuraat";
$GLOBALS['strTargetModifiedMonth'] = "Er zijn doelen gewijzigd gedurende de maand, hierdoor waren de berekeningen neit accuraat";
$GLOBALS['strNoTargetStats'] = "Er zijn momenteen geen gegevens bekend over doelberekeningen";
$GLOBALS['strOVerall'] = "Algemeen";
$GLOBALS['strByZone'] = "Per Zone";
$GLOBALS['strViewBreakdown'] = "Weergeven per";
$GLOBALS['strBreakdownByDay'] = "Dag";
$GLOBALS['strBreakdownByWeek'] = "Week";
$GLOBALS['strBreakdownByMonth'] = "Maand";
$GLOBALS['strBreakdownByDow'] = "Dag van de week";
$GLOBALS['strBreakdownByHour'] = "Uur";
$GLOBALS['strItemsPerPage'] = "Items per pagina";
$GLOBALS['strShowGraphOfStatistics'] = "Toon <u>G</u>rafiek van statistieken";
$GLOBALS['strExportStatisticsToExcel'] = "<u>E</u>xporteer statistieken naar Excel";
$GLOBALS['strStatsArea'] = "Gebied";

// Hosts
$GLOBALS['strHosts'] = "Hosts";
$GLOBALS['strTopHosts'] = "Meest actieve bezoekers";
$GLOBALS['strTopCountries'] = "Meest active landen";
$GLOBALS['strRecentHosts'] = "Meest recente bezoekers";

// Expiration
$GLOBALS['strExpired'] = "Vervallen";
$GLOBALS['strExpiration'] = "Vervaldatum";
$GLOBALS['strNoExpiration'] = "Geen vervaldatum ingesteld";
$GLOBALS['strEstimated'] = "Geschatte vervaldatum";
$GLOBALS['strNoExpirationEstimation'] = "Nog geen geschatte einddatum";
$GLOBALS['strDaysAgo'] = "dagen geleden";
$GLOBALS['strCampaignStop'] = "Campagne geschiedenis";

// Reports
$GLOBALS['strReports'] = "Rapportages";
$GLOBALS['strAdvancedReports'] = "Geavanceerde rapporten";
$GLOBALS['strAdminReports'] = "Beheerdersrapportages";
$GLOBALS['strAdvertiserReports'] = "Adverteerder rapporten";
$GLOBALS['strPublisherReports'] = "Website rapporten";
$GLOBALS['strSelectReport'] = "Selecteer de rapportage welke u wilt genereren";
$GLOBALS['strStartDate'] = "Begindatum";
$GLOBALS['strEndDate'] = "Einddatum";
$GLOBALS['strNoData'] = "Er zijn geen gegevens beschikbaar voor deze periode";
$GLOBALS['strPeriod'] = "Periode";
$GLOBALS['strLimitations'] = "Limitaties ";
$GLOBALS['strWorksheets'] = "Werkbladen";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers'] = "Alle adverteerders";
$GLOBALS['strAnonAdvertisers'] = "Anonieme adverteerders";
$GLOBALS['strAllPublishers'] = "Alle websites";
$GLOBALS['strAnonPublishers'] = "Anonieme websites";
$GLOBALS['strAllAvailZones'] = "Alle beschikbare zones";

// Userlog
$GLOBALS['strUserLog'] = "Gebruikers logboek";
$GLOBALS['strUserLogDetails'] = "Gebruikers log details";
$GLOBALS['strDeleteLog'] = "Verwijder log";
$GLOBALS['strAction'] = "Actie";
$GLOBALS['strNoActionsLogged'] = "Er zijn geen acties vastgelegd";

// Code generation
$GLOBALS['strGenerateBannercode'] = "Directe selectie";
$GLOBALS['strChooseInvocationType'] = "Kies het type banner invocatie";
$GLOBALS['strGenerate'] = "Genereer";
$GLOBALS['strParameters'] = "Parameters";
$GLOBALS['strFrameSize'] = "Frame grootte";
$GLOBALS['strBannercode'] = "Bannercode";
$GLOBALS['strTrackercode'] = "Trackercode";
$GLOBALS['strOptional'] = "optioneel";
$GLOBALS['strBackToTheList'] = "Ga terug naar verslaglijst ";
$GLOBALS['strGoToReportBuilder'] = "Ga naar het geselecteerde rapport";
$GLOBALS['strCharset'] = "Tekenset";
$GLOBALS['strAutoDetect'] = "Automatisch detecteren";


// Errors
$GLOBALS['strMySQLError'] = "SQL fout:";
$GLOBALS['strErrorDatabaseConnetion'] = "Database verbindingsfout.";
$GLOBALS['strLogErrorClients'] = "Er is een fout opgetreden. De adverteerders konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorBanners'] = "Er is een fout opgetreden. De banners konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorViews'] = "Er is een fout opgetreden. De impressies konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorClicks'] = "Er is een fout opgetreden. De kliks konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorConversions'] = "Er is een fout opgetreden. De conversies konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strErrorViews'] = "U moet het aantal impressies invullen of het vakje 'Onbegrensd' aankruisen!";
$GLOBALS['strErrorNegViews'] = "Negatieve aantallen impressies zijn niet toegestaan";
$GLOBALS['strErrorClicks'] = "U moet het aantal kliks invullen of het vakje 'Onbegrensd' aankruisen!";
$GLOBALS['strErrorNegClicks'] = "Negatieve aantallen kliks zijn niet toegestaan";
$GLOBALS['strNoMatchesFound'] = "Geen objecten gevonden";
$GLOBALS['strErrorOccurred'] = "Er is een fout opgetreden";
$GLOBALS['strErrorUploadSecurity'] = "Er is een potentieel beveiligingsprobleem gedetecteerd. De operatie is afgebroken!";
$GLOBALS['strErrorUploadBasedir'] = "Het verzonden bestand kon niet worden gelezen. De oorzaak is waarschijnlijk een safemode of open_basedir restrictie";
$GLOBALS['strErrorUploadUnknown'] = "Door een onbekende oorzaak kon het verzonden bestand kon niet worden gelezen. Controleer uw PHP configuratie";
$GLOBALS['strErrorStoreLocal'] = "Er is een fout opgetreden tijdens het bewaren van de banner in een lokale map. De oorzaak van dit probleem is waarschijnlijk een misconfiguratie van de locatie van de lokale map";
$GLOBALS['strErrorStoreFTP'] = "Er is een fout opgetreden tijdens het overzenden van de banner naar de FTP server. De server is niet bereikbaar, of er is een fout gemaakt tijdens het invullen van de gegevens van de FTP server";
$GLOBALS['strErrorDBPlain'] = "Er is een probleem opgetreden tijdens het benaderen van de database";
$GLOBALS['strErrorDBSerious'] = "Er is een ernstig probleem met de database opgetreden";
$GLOBALS['strErrorDBNoDataPlain'] = "Wegens het probleem kon {$PRODUCT_NAME} geen gegevens ophalen of versturen. ";
$GLOBALS['strErrorDBNoDataSerious'] = "Wegens het ernstige problem kon {$PRODUCT_NAME}  geen gegevens ophalen";
$GLOBALS['strErrorDBCorrupt'] = "De database tabel is waarschijnlijk beschadigd en moet gerepareerd worden. Voor meer informatie over het repareren van beschadigde tabellen lees het hoofdstuk <i>Troubleshooting</i> van de <i>Administrator guide</i>.";
$GLOBALS['strErrorDBContact'] = "Neem a.u.b. contact op met de beheerder van deze server en breng hem op de hoogte van uw probleem.";
$GLOBALS['strErrorDBSubmitBug'] = "Indien dit probleem te reproduceren is, dan is het mogelijk dat het veroorzaakt wordt door een fout in {$PRODUCT_NAME}. Reporteer de volgende gegevens aan de makers van {$PRODUCT_NAME}. Probeer tevens de acties die deze fout tot gevolg hebben zo duidelijk mogelijk te omschrijven.";
$GLOBALS['strMaintenanceNotActive'] = "Het onderhoudsscript heeft niet gedraaid in de laatste 24 uur.
Het script moet elk uur gedraaid worden ander zal {$PRODUCT_NAME} niet
correct functioneren.

Lees a.u.b. de Administrator guide voor meer informatie
 over het instellen van het onderhoudsscript.";
$GLOBALS['strUnableToLinkBanner'] = "Deze banner kan niet gekoppeld worden: ";
$GLOBALS['strErrorEditingCampaign'] = "Fout bij het bijwerken van de campagne:";
$GLOBALS['strUnableToChangeCampaign'] = "Deze wijziging kan niet worden uitgevoerd omdat:";
$GLOBALS['strErrorEditingZone'] = "Fout bij het bijwerken van zone:";
$GLOBALS['strUnableToChangeZone'] = "Deze wijziging kan niet worden uitgevoerd omdat:";
$GLOBALS['strEmailNoDates'] = "E-mail zone campagnes moeten een start- en einddatum hebben";
$GLOBALS['strWarningInaccurateReadMore'] = "Lees hier meer over";

//Validation
$GLOBALS['strRequiredFieldLegend'] = "geeft aan dat het veld verplicht is";
$GLOBALS['strRequiredField'] = "Verplicht veld";
$GLOBALS['strXRequiredField'] = "%s is vereist";
$GLOBALS['strMaxLengthField'] = "Voer maximaal %s tekens in";
$GLOBALS['strEmailField'] = "Voer een geldig e-mailadres in";
$GLOBALS['strNumericField'] = "Voer een getal in (alleen cijfers toegestaan)";
$GLOBALS['strGreaterThanZeroField'] = "Moet groter zijn dan 0";
$GLOBALS['strXGreaterThanZeroField'] = "%s moet groter zijn dan 0";
$GLOBALS['strXPositiveWholeNumberField'] = "%s moet een positief geheel getal zijn";
$GLOBALS['strXUniqueField'] = "%s met dit %s bestaat al";
$GLOBALS['strInvalidWebsiteURL'] = "Ongeldige Website URL";


// Email
$GLOBALS['strSirMadam'] = "Meneer/mevrouw";
$GLOBALS['strMailSubject'] = "Advertentierapport";
$GLOBALS['strAdReportSent'] = "Advertentierapport verzonden";
$GLOBALS['strMailHeader'] = "Geachte {contact},";
$GLOBALS['strMailBannerStats'] = "Bijgevoegd vind u de banner-statistieken van {clientname}:";
$GLOBALS['strMailBannerActivatedSubject'] = "Campagne geactiveerd";
$GLOBALS['strMailBannerDeactivatedSubject'] = "Campagne gedeactiveerd";
$GLOBALS['strMailFooter'] = "Met vriendelijke groet,
    {adminfullname}";
$GLOBALS['strMailClientDeactivated'] = "De volgende banners zijn gedeactiveerd omdat";
$GLOBALS['strMailNothingLeft'] = "Indien u verder wilt adverteren op onze website, neem dan gerust contact met ons op. We horen graag van u.";
$GLOBALS['strClientDeactivated'] = "Deze campagne is momenteel niet actief omdat";
$GLOBALS['strBeforeActivate'] = "de activeringsdatum nog niet bereikt is";
$GLOBALS['strAfterExpire'] = "de vervaldatum bereikt is";
$GLOBALS['strNoMoreClicks'] = "er geen kliks meer over zijn";
$GLOBALS['strNoMoreConversions'] = "de gekochte AdClicks gebruikt zijn";
$GLOBALS['strWeightIsNull'] = "het gewicht op nul gezet is";
$GLOBALS['strWarnClientTxt'] = "Er zijn minder dan {limit} AdClicks of AdViews over voor uw banners. ";
$GLOBALS['strNoViewLoggedInInterval'] = "Er zijn geen AdViews gelogd gedurende de dagen van dit rapport";
$GLOBALS['strNoClickLoggedInInterval'] = "Er zijn geen AdClicks gelogd gedurende de dagen van dit rapport";
$GLOBALS['strNoConversionLoggedInInterval'] = "Er zijn geen AdViews gelogd gedurende de dagen van dit rapport";
$GLOBALS['strMailReportPeriod'] = "Dit rapport bevat de statistieken van {startdate} tot en met {enddate}.";
$GLOBALS['strMailReportPeriodAll'] = "Dit rapport bevat alle statistieken tot en met {enddate}.";
$GLOBALS['strNoStatsForCampaign'] = "Er zijn geen statistieken beschikbaar voor deze campagne";
$GLOBALS['strYourCampaign'] = "Uw campagne";
$GLOBALS['strTheCampiaignBelongingTo'] = "De campagne behorend bij";

// Priority
$GLOBALS['strPriority'] = "Prioriteit";
$GLOBALS['strSourceEdit'] = "Verander bronnen";

// Preferences
$GLOBALS['strPreferences'] = "Voorkeuren";
$GLOBALS['strUserPreferences'] = "Gebruikersvoorkeuren ";
$GLOBALS['strChangePassword'] = "Verander wachtwoord";
$GLOBALS['strChangeEmail'] = "Verander e-mail adres";
$GLOBALS['strCurrentPassword'] = "Huidig wachtwoord";
$GLOBALS['strChooseNewPassword'] = "Kies nieuw wachtwoord";
$GLOBALS['strReenterNewPassword'] = "Herhaal nieuw wachtwoord";
$GLOBALS['strNameLanguage'] = "Naam en taal";
$GLOBALS['strAccountPreferences'] = "Account voorkeuren";
$GLOBALS['strCampaignEmailReportsPreferences'] = "Campagne e-mail rapporteer voorkeuren";
$GLOBALS['strTimezonePreferences'] = "Tijdzone voorkeuren";
$GLOBALS['strAdminEmailWarnings'] = "Administrator e-mail waarschuwingen";
$GLOBALS['strAgencyEmailWarnings'] = "Agentschap e-mail waarschuwingen";
$GLOBALS['strAdveEmailWarnings'] = "Adverteerder e-mail waarschuwingen ";
$GLOBALS['strFullName'] = "Volledige naam";
$GLOBALS['strEmailAddress'] = "E-mail adres";
$GLOBALS['strUserDetails'] = "Gebruikersdetails";
$GLOBALS['strLanguageTimezone'] = "Taal en tijdzone";
$GLOBALS['strLanguageTimezonePreferences'] = "Taal en tijdzone voorkeuren";
$GLOBALS['strUserInterfacePreferences'] = "Gebruikersinterface voorkeuren";
$GLOBALS['strPluginPreferences'] = "Plugin voorkeuren";
$GLOBALS['strColumnName'] = "Kolomnaam";
$GLOBALS['strShowColumn'] = "Kolom weergeven";
$GLOBALS['strCustomColumnName'] = "Aangepaste kolomnaam";
$GLOBALS['strColumnRank'] = "Kolom rangorde";


// Statistics columns
// Long names
$GLOBALS['strRevenue'] = "Opbrengst";
$GLOBALS['strNumberOfItems'] = "Aantal items";
$GLOBALS['strRevenueCPC'] = "Inkomsten CPC";
$GLOBALS['strERPM'] = "CPM";
$GLOBALS['strERPC'] = "CPC";
$GLOBALS['strERPS'] = "CPM";
$GLOBALS['strEIPM'] = "CPM";
$GLOBALS['strEIPC'] = "CPC";
$GLOBALS['strEIPS'] = "CPM";
$GLOBALS['strECPM'] = "CPM";
$GLOBALS['strECPC'] = "CPC";
$GLOBALS['strECPS'] = "CPM";
$GLOBALS['strEPPM'] = "CPM";
$GLOBALS['strEPPC'] = "CPC";
$GLOBALS['strEPPS'] = "CPM";
$GLOBALS['strPendingConversions'] = "Conversies in behandeling";
$GLOBALS['strImpressionSR'] = "AdViews";
$GLOBALS['strRequiredImpressions'] = "Vereiste aantal impressies";
$GLOBALS['strRequestedImpressions'] = "Gevraagd aantal impressies";
$GLOBALS['strActualImpressions'] = "AdViews";

// Short names
$GLOBALS['strERPM_short'] = "CPM";
$GLOBALS['strERPC_short'] = "CPC";
$GLOBALS['strERPS_short'] = "CPM";
$GLOBALS['strEIPM_short'] = "CPM";
$GLOBALS['strEIPC_short'] = "CPC";
$GLOBALS['strEIPS_short'] = "CPM";
$GLOBALS['strECPM_short'] = "CPM";
$GLOBALS['strECPC_short'] = "CPC";
$GLOBALS['strECPS_short'] = "CPM";
$GLOBALS['strEPPM_short'] = "CPM";
$GLOBALS['strEPPC_short'] = "CPC";
$GLOBALS['strEPPS_short'] = "CPM";
$GLOBALS['strID_short'] = "ID";
$GLOBALS['strClicks_short'] = "AdClicks";
$GLOBALS['strCTR_short'] = "CTR";

// Global Settings
$GLOBALS['strConfiguration'] = "Instellingen";
$GLOBALS['strGlobalSettings'] = "Algemene instellingen";
$GLOBALS['strGeneralSettings'] = "Standaard instellingen";
$GLOBALS['strMainSettings'] = "Hoofd instellingen";
$GLOBALS['strAdminSettings'] = "Administratie instellingen";
$GLOBALS['strPlugins'] = "Plugins";

$GLOBALS['strChooseSection'] = 'Kies sectie';

// Product Updates
$GLOBALS['strProductUpdates'] = "Nieuwe versies";
$GLOBALS['strViewPastUpdates'] = "Updates en backups uit het verleden beheren";
$GLOBALS['strFromVersion'] = "Van versie";
$GLOBALS['strToVersion'] = "Naar versie";
$GLOBALS['strToggleDataBackupDetails'] = "Gegevens-backups details aan/uit";
$GLOBALS['strClickViewBackupDetails'] = "Klik om backup details te bekijken";
$GLOBALS['strClickHideBackupDetails'] = "Klik om backup details te verbergen";
$GLOBALS['strShowBackupDetails'] = "Toon data backup details";
$GLOBALS['strHideBackupDetails'] = "Verberg data backup details";
$GLOBALS['strInstallation'] = "Installatie";
$GLOBALS['strBackupDeleteConfirm'] = "Weet je zeker dat je alle back-ups wilt verwijderen, die gecreëerd zijn van deze upgrade?";
$GLOBALS['strDeleteArtifacts'] = "Artefacten verwijderen";
$GLOBALS['strArtifacts'] = "Artefacten";
$GLOBALS['strBackupDbTables'] = "Reservekopie van de databasetabellen";
$GLOBALS['strLogFiles'] = "Log-bestanden";
$GLOBALS['strConfigBackups'] = "Backup van configuratie-files";
$GLOBALS['strUpdatedDbVersionStamp'] = "Bijgewerkte database versieaanduiding";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE'] = "Upgrade compleet";
$GLOBALS['aProductStatus']['UPGRADE_FAILED'] = "Upgrade mislukt";

// Agency
$GLOBALS['strAgencyManagement'] = "Account beheer";
$GLOBALS['strAgency'] = "Account";
$GLOBALS['strAgencies'] = "Account";
$GLOBALS['strAddAgency'] = "Voeg nieuw account toe";
$GLOBALS['strAddAgency_Key'] = "<u>V</u>oeg een zone toe";
$GLOBALS['strTotalAgencies'] = "Totaal aantal accounts";
$GLOBALS['strAgencyProperties'] = "Accounteigenschappen";
$GLOBALS['strNoAgencies'] = "Er zijn momenteel geen zones gedefinieerd";
$GLOBALS['strConfirmDeleteAgency'] = "Weet u zeker dat u deze zone wilt wissen?";
$GLOBALS['strHideInactiveAgencies'] = "Inactieve accounts verbergen";
$GLOBALS['strInactiveAgenciesHidden'] = "niet-actieve banner(s) verborgen";
$GLOBALS['strSwitchAccount'] = "Overschakelen naar dit account";

// Channels
$GLOBALS['strChannelToWebsite'] = "Alle websites";
$GLOBALS['strNoChannels'] = "Er zijn momenteel geen banner gedefinieerd";
$GLOBALS['strNoChannelsAddWebsite'] = "Er zijn momenteel geen websites beschikbaar. Om een zone aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe website toe</a> .";

$GLOBALS['strChannelLimitations'] = "Uitleveringsbeperkingen";
$GLOBALS['strConfirmDeleteChannel'] = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strConfirmDeleteChannels'] = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strChannelsOfWebsite'] = 'in'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'// Tracker Variables
$GLOBALS['strVariableName'] = "Naam van de variabele";
$GLOBALS['strVariableDescription'] = "Beschrijving";
$GLOBALS['strVariableDataType'] = "Gegevenstype";
$GLOBALS['strVariablePurpose'] = "Doel";
$GLOBALS['strGeneric'] = "Generiek";
$GLOBALS['strBasketValue'] = "Waarde winkelmandje";
$GLOBALS['strNumItems'] = "Aantal items";
$GLOBALS['strVariableIsUnique'] = "Conversies ontdubbelen?";
$GLOBALS['strJavascript'] = "Javascript";
$GLOBALS['strInteger'] = "Geheel getal";
$GLOBALS['strNumber'] = "Getal";
$GLOBALS['strString'] = "String";
$GLOBALS['strVariableRejectEmpty'] = "Afwijzen indien leeg?";
$GLOBALS['strTrackerType'] = "Tracker naam";


// Upload conversions
$GLOBALS['strRecordWasNotInserted'] = "Record is niet ingevoegd";
$GLOBALS['strWrongColumnPart1'] = "<br>Fout in CSV bestand! Kolom <b>";
$GLOBALS['strWrongColumnPart2'] = "</b> is niet toegestaan voor deze tracker";
$GLOBALS['strMissingColumnPart1'] = "<br>Fout in CSV bestand! Kolom <b>";
$GLOBALS['strMissingColumnPart2'] = "</b> ontbreekt";
$GLOBALS['strYouHaveNoTrackers'] = "Adverteerder heeft geen trackers!";
$GLOBALS['strYouHaveNoCampaigns'] = "Adverteerders & Campagnes";
$GLOBALS['strYouHaveNoBanners'] = "Campagne heeft geen banners!";
$GLOBALS['strYouHaveNoZones'] = "Banner niet gekoppeld aan zones!";
$GLOBALS['strNoBannersDropdown'] = "--Geen Banners gevonden--";
$GLOBALS['strNoZonesDropdown'] = "--Geen Zones gevonden--";
$GLOBALS['strInsertErrorPart1'] = "<br><br><center><b>De fout, ";
$GLOBALS['strInsertErrorPart2'] = "Records zijn niet ingevoegd! </b></center>";
$GLOBALS['strDuplicatedValue'] = "Gedupliceerde waarde!";
$GLOBALS['strReuploadCsvFile'] = "CSV-bestand opnieuw uploaden";
$GLOBALS['strConfirmUpload'] = "Bevestigen uploaden";
$GLOBALS['strWrongDateFormat'] = "Verkeerde datum formaat";


// Password recovery
$GLOBALS['strForgotPassword'] = "Wachtwoord vergeten?";
$GLOBALS['strPasswordRecovery'] = "Wachtwoord herstellen";
$GLOBALS['strEmailRequired'] = "E-mail is een verplicht veld";
$GLOBALS['strPwdRecEmailNotFound'] = "E-mail adres is niet gevonden";
$GLOBALS['strPwdRecPasswordSaved'] = "Het nieuwe wachtwoord is ingesteld, ga verder om  <a href='index.php'>in te loggen</a>";
$GLOBALS['strPwdRecWrongId'] = "Verkeerde ID";
$GLOBALS['strPwdRecEnterEmail'] = "Geef uw e-mail adres onderaan";
$GLOBALS['strPwdRecEnterPassword'] = "Geef uw nieuw wachtwoord onderaan";
$GLOBALS['strPwdRecReset'] = "Wachtwoord reset";
$GLOBALS['strPwdRecResetLink'] = "Wachtwoord reset link";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Reset wachtwoord van deze gebruiker";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s wachtwoord herstelling";
$GLOBALS['strProceed'] = "Doorgaan >";
$GLOBALS['strNotifyPageMessage'] = "Een e-mail is naar u verzonden, deze bevat een link dat u de mogelijkheid bied om uw wachtwoord te resetten en in te loggen. <br />Gelieve enkele minuten te wachten eer de e-mail aankomt.<br />Indien u geen e-mail ontvangt, gelieve uw spam map na te kijken.<br /><a href='index.php'>Ga terug naar de login pagina.</a>";

// Audit
$GLOBALS['strAccount'] = "Account";
$GLOBALS['strAccountUserAssociation'] = "Account gebruikersgroep";
$GLOBALS['strEvent'] = "Gebeurtenis";
$GLOBALS['strImage'] = "Afbeelding";
$GLOBALS['strCampaignZoneAssociation'] = "Campagne zonegroep";
$GLOBALS['strAccountPreferenceAssociation'] = "Account voorkeurengroep";


// Widget - Audit

// Widget - Campaign
$GLOBALS['strCampaignGoTo'] = "Ga naar pagina campagnes";


$GLOBALS['strUnsavedChanges'] = "Je hebt onopgeslagen zken op deze pagina, weet zeker dat alle  \"Save Changes\" zijn gedaan";

//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "U werkt nu als <b>%s</b>";

$GLOBALS['strAdvertiserHasBeenAdded'] = "Adverteerder <a href='%s'>%s</a> is toegevoegd, u kunt nu <a href='%s'>een campagne toevoegen</a>";
$GLOBALS['strAdvertiserHasBeenUpdated'] = "Adverteerder <a href='%s'>%s</a> is bijgewerkt";
$GLOBALS['strAdvertiserHasBeenDeleted'] = "Adverteerder <b>%s</b> is verwijderd";

$GLOBALS['strTrackerHasBeenDeleted'] = "Tracker <b>%s</b> is verwijderd";
$GLOBALS['strTrackersHaveBeenDeleted'] = "Alle geselecteerde trackers zijn verwijderd";


$GLOBALS['strBannerHasBeenDeleted'] = "Banner <b>%s</b> is verwijderd";
$GLOBALS['strBannersHaveBeenDeleted'] = "Alle geselecteerde banners zijn verwijderd";
$GLOBALS['strBannerHasBeenDuplicated'] = "Banner <a href='%s'>%s</a> is gekopieerd naar <a href='%s'>%s</a>";
$GLOBALS['strBannerHasBeenMoved'] = "Banner <b>%s</b> is verplaatst naar campagne <b>%s</b>";
$GLOBALS['strBannerHasBeenActivated'] = "Banner <a href='%s'>%s</a> is geactiveerd";
$GLOBALS['strBannerHasBeenDeactivated'] = "Banner <a href='%s'>%s</a> is gedeactiveerd";

$GLOBALS['strXZonesLinked'] = "<b>%s</b> zone(s) gekoppeld";
$GLOBALS['strXZonesUnlinked'] = "<b>%s</b> zone(s) ontkoppeld";

$GLOBALS['strWebsiteHasBeenAdded'] = "Website <a href='%s'>%s</a> is toegevoegd, <a href='%s'>een zone toevoegen</a>";
$GLOBALS['strWebsiteHasBeenUpdated'] = "Website <a href='%s'>%s</a> is bijgewerkt";
$GLOBALS['strWebsiteHasBeenDeleted'] = "Website <b>%s</b> is verwijderd";
$GLOBALS['strWebsitesHaveBeenDeleted'] = "Alle geselecteerde website zijn verwijderd";

$GLOBALS['strZoneHasBeenAdded'] = "Zone <a href='%s'>%s</a> istoegevoegd";
$GLOBALS['strZoneHasBeenUpdated'] = "Zone <a href='%s'>%s</a> is bijgewerkt";
$GLOBALS['strZoneAdvancedHasBeenUpdated'] = "Geavanceerde instellingen voor de zone <a href='%s'>%s</a> zijn bijgewerkt";
$GLOBALS['strZoneHasBeenDeleted'] = "Zone <b>%s</b> is verwijderd";
$GLOBALS['strZonesHaveBeenDeleted'] = "Alle geselecteerde zone zijn verwijderd";
$GLOBALS['strZoneHasBeenDuplicated'] = "Zone <a href='%s'>%s</a> is gekopieerd naar <a href='%s'>%s</a>";
$GLOBALS['strZoneHasBeenMoved'] = "Zone <b>%s</b> is verplaatst naar website <b>%s</b>";
$GLOBALS['strZoneLinkedBanner'] = "Banner is gekoppeld aan zone <a href='%s'>%s</a>";
$GLOBALS['strZoneLinkedCampaign'] = "Campagne is gekoppeld aan zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedBanner'] = "Banner is ontkoppeld van zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedCampaign'] = "Campagne is ontkoppeld van zone <a href='%s'>%s</a>";


$GLOBALS['strPreferencesHaveBeenUpdated'] = "Voorkeuren zijn bijgewerkt";
$GLOBALS['strEmailChanged'] = "Uw E-mail adres is gewijzigd";
$GLOBALS['strPasswordChanged'] = "Uw wachtwoord is gewijzigd";
$GLOBALS['strXPreferencesHaveBeenUpdated'] = "<b>%s</b> zijn bijgewerkt";
$GLOBALS['strXSettingsHaveBeenUpdated'] = "<b>%s</b> zijn bijgewerkt";


/* ------------------------------------------------------- */
/* Keyboard shortcut assignments                           */
/* ------------------------------------------------------- */

// Reserved keys
// Do not change these unless absolutely needed
$GLOBALS['keyUp'] = "o";
$GLOBALS['keyNextItem'] = ",";
$GLOBALS['keyPreviousItem'] = ".";

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch'] = "z";
$GLOBALS['keyCollapseAll'] = "u";
$GLOBALS['keyExpandAll'] = "i";
$GLOBALS['keyAddNew'] = "v";
$GLOBALS['keyNext'] = "g";
$GLOBALS['keyPrevious'] = "r";
$GLOBALS['keyLinkUser'] = "o";

/* ------------------------------------------------------- */
/* Languages Names                                       */
/* ------------------------------------------------------- */

$GLOBALS['str_ar'] = "Arabisch";
$GLOBALS['str_bg'] = "Hongaars";
$GLOBALS['str_cs'] = "Tsjechisch";
$GLOBALS['str_cy'] = "Welsh";
$GLOBALS['str_da'] = "Deens";
$GLOBALS['str_de'] = "Duits";
$GLOBALS['str_el'] = "Grieks";
$GLOBALS['str_en'] = "Engels";
$GLOBALS['str_es'] = "Spaans";
$GLOBALS['str_fa'] = "Perzisch ";
$GLOBALS['str_fr'] = "Frans";
$GLOBALS['str_he'] = "Hebreeuws ";
$GLOBALS['str_hr'] = "Kroaats";
$GLOBALS['str_hu'] = "Hongaars";
$GLOBALS['str_id'] = "Indonesisch ";
$GLOBALS['str_it'] = "Italiaans";
$GLOBALS['str_ja'] = "Japans";
$GLOBALS['str_ko'] = "Koreaans";
$GLOBALS['str_lt'] = "Litouws ";
$GLOBALS['str_ms'] = "Maleisisch ";
$GLOBALS['str_nb'] = "Noors Bokmal";
$GLOBALS['str_nl'] = "Nederlands";
$GLOBALS['str_pl'] = "Pools";
$GLOBALS['str_pt_BR'] = "Portugees Brazilië";
$GLOBALS['str_pt_PT'] = "Portugees Portugal";
$GLOBALS['str_ro'] = "Romeens";
$GLOBALS['str_ru'] = "Russisch ";
$GLOBALS['str_sk'] = "Slowaaks ";
$GLOBALS['str_sl'] = "Sloveens ";
$GLOBALS['str_sq'] = "Albanees";
$GLOBALS['str_sv'] = "Zweeds";
$GLOBALS['str_tr'] = "Turks";
$GLOBALS['str_uk'] = "Ukranian";
$GLOBALS['str_zh_CN'] = "Vereenvoudigd Chinees";
$GLOBALS['str_zh_TW'] = "Traditioneel Chinees";
?>
