<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6519638d647f1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\x72\x61\164\151\x6e\147\x5f"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post) { goto coywmiyqgsweuiic; } $post = $seumokooiykcomco->iooowgsqoyqseyuu(); coywmiyqgsweuiic: if (!$post) { goto siqagquguiemuoku; } $cuakwceieagskoaa = in_array($seumokooiykcomco->gueasuouwqysmomu($post), $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []), true) && !in_array($post, $this->weysguygiseoukqw(self::qgiwmgmeaagqwgkw, []), true); siqagquguiemuoku: return $this->ocksiywmkyaqseou(self::aiucyqocowoqgciy . "\141\154\x6c\157\167\x5f\162\x65\156\144\145\x72", $cuakwceieagskoaa, $post); } }
