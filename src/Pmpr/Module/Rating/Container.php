<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65195a014b4bb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\x72\141\164\x69\x6e\147\137"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post) { goto coywmiyqgsweuiic; } $post = $seumokooiykcomco->iooowgsqoyqseyuu(); coywmiyqgsweuiic: if (!$post) { goto siqagquguiemuoku; } $cuakwceieagskoaa = in_array($seumokooiykcomco->gueasuouwqysmomu($post), $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []), true) && !in_array($post, $this->weysguygiseoukqw(self::qgiwmgmeaagqwgkw, []), true); siqagquguiemuoku: return $this->ocksiywmkyaqseou(self::aiucyqocowoqgciy . "\141\154\154\157\x77\137\x72\x65\156\144\145\162", $cuakwceieagskoaa, $post); } }
