<?php
// ================= CONFIG =================
$cacheFile = __DIR__ . '/cache/domains.json';
$cacheTTL  = 60 * 60 * 6; // 6 horas
$tlds      = ['com', 'net', 'org', 'info'];
$adminUser = 'adminkuntur';

// ================= CACHE VÁLIDO =================
if (file_exists($cacheFile)) {
    $cacheAge = time() - filemtime($cacheFile);

    if ($cacheAge < $cacheTTL) {
        $cached = json_decode(file_get_contents($cacheFile), true);
        if (is_array($cached)) {
            return $cached;
        }
    }
}

// ================= WHMCS API =================
require_once __DIR__ . '/../customer/init.php';

$response = localAPI('GetTLDPricing', [], $adminUser);

if (!is_array($response) || ($response['result'] ?? '') !== 'success') {
    // Si falla WHMCS pero hay cache viejo, úsalo
    if (file_exists($cacheFile)) {
        return json_decode(file_get_contents($cacheFile), true) ?? [];
    }
    return [];
}

// ================= PROCESAR PRECIOS =================
$domains = [];

foreach ($tlds as $tld) {
    if (isset($response['pricing'][$tld]['register'][1])) {
        $domains[$tld] = (float) $response['pricing'][$tld]['register'][1];
    }
}

// ================= GUARDAR CACHE =================
if (!empty($domains)) {
    file_put_contents($cacheFile, json_encode($domains));
}

return $domains;
