<?php
$systemurl = App::getSystemUrl();
$currency = getCurrency();
$tlds = getTLDList();
$domainsearch = '<form action="%sdomainchecker.php" method="post"><input type="hidden" name="direct" value="true">www. <input type="text" name="domain" size="30"> <select name="ext">';
$domainsearch = sprintf($domainsearch, htmlspecialchars($systemurl, ENT_QUOTES, 'UTF-8'));
foreach ($tlds AS $tld) {
    $domainsearch .= '<option>'. htmlspecialchars($tld, ENT_QUOTES, 'UTF-8') . '</option>';
}
$domainsearch .= '</select> <input type="submit" value="Go"></form>';
?>
