<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668daba780c94             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; use WP_Post; use WP_Term; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\162\141\164\151\156\x67\137"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($moqewomugocaueis = null, string $sqeykgyoooqysmca = self::uouymeyqasaeckso) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($moqewomugocaueis) { goto sciwggaeogcoesiu; } $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $moqewomugocaueis = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); if (!($moqewomugocaueis && $mksyucucyswaukig)) { goto mkwskuycuyguqqok; } if ($mksyucucyswaukig instanceof WP_Post) { goto cuykwgmswkskqkyi; } if (!$mksyucucyswaukig instanceof WP_Term) { goto csscmcacoikwsecs; } $sqeykgyoooqysmca = self::gmmygyiecgmggaam; csscmcacoikwsecs: goto kuicqywysciceggs; cuykwgmswkskqkyi: $sqeykgyoooqysmca = self::uouymeyqasaeckso; kuicqywysciceggs: mkwskuycuyguqqok: sciwggaeogcoesiu: $cuakwceieagskoaa = false; switch ($sqeykgyoooqysmca) { case self::uouymeyqasaeckso: $cuakwceieagskoaa = in_array($seumokooiykcomco->gueasuouwqysmomu($moqewomugocaueis), $this->weysguygiseoukqw(Setting::miemwgakuokqyoqo, [])); goto eqkauqciwewmgeoi; case self::gmmygyiecgmggaam: $cuakwceieagskoaa = in_array($aoskwucuugeuaeus->yyoeeseewqmmyaee($moqewomugocaueis), $this->weysguygiseoukqw(Setting::isocsewwmygicgqs, [])); goto eqkauqciwewmgeoi; } kwagwqyusyiyoaqs: eqkauqciwewmgeoi: if (!$cuakwceieagskoaa) { goto yowsmsiyimmimemc; } $cuakwceieagskoaa = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::eggygikowgywcayq => $moqewomugocaueis]; yowsmsiyimmimemc: return $this->ocksiywmkyaqseou(self::aiucyqocowoqgciy . "\x61\x6c\154\157\167\137\162\x65\156\144\145\162", $cuakwceieagskoaa, $moqewomugocaueis, $sqeykgyoooqysmca); } }
