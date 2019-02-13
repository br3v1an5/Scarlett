<?php
    $domainpricing = '<table cellspacing="1" cellpadding="0" class="domainpricing"><tr><th>TLD</th><th>Min. Years</th><th>Register</th><th>Transfer</th><th>Renew</th></tr>';
if (!is_numeric($currency)) {
    $currency = array();
} else {
    $currency = getCurrency('', $currency);
}
if (!$currency || !is_array($currency) || !isset($currency['id'])) {
    $currency = getCurrency();
}
$freeamt = formatCurrency(0);
$tldslist = getTLDList();
foreach ($tldslist AS $tld) {
    $tldpricing = getTLDPriceList($tld, true);
    $firstoption = current($tldpricing);
    $year = key($tldpricing);
    $transfer = ($firstoption["transfer"] == $freeamt) ? $_LANG['orderfree'] : $firstoption["transfer"];
    $domainpricing .= sprintf(
        '<tr><td>%s</td><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>',
        htmlspecialchars($tld, ENT_QUOTES, 'UTF-8'),
        $year,
        htmlspecialchars($firstoption["register"], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($transfer, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($firstoption["renew"], ENT_QUOTES, 'UTF-8')
    );
}
$domainpricing .= '</table>';
 ?>
