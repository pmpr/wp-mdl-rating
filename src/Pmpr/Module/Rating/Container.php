<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             651963c466078             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\162\141\164\151\x6e\147\137"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post) { goto coywmiyqgsweuiic; } $post = $seumokooiykcomco->iooowgsqoyqseyuu(); coywmiyqgsweuiic: if (!$post) { goto siqagquguiemuoku; } $cuakwceieagskoaa = in_array($seumokooiykcomco->gueasuouwqysmomu($post), $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []), true) && !in_array($post, $this->weysguygiseoukqw(self::qgiwmgmeaagqwgkw, []), true); siqagquguiemuoku: return $this->ocksiywmkyaqseou(self::aiucyqocowoqgciy . "\x61\154\154\157\167\x5f\x72\x65\x6e\x64\145\x72", $cuakwceieagskoaa, $post); } }
