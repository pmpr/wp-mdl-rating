<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a01f63b1cd0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\x72\x61\x74\151\x6e\147\x5f"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post) { goto qogqewiwmwiwskgm; } $post = $seumokooiykcomco->iooowgsqoyqseyuu(); qogqewiwmwiwskgm: if (!$post) { goto qgoiooayqmqqsiok; } $cuakwceieagskoaa = in_array($seumokooiykcomco->gueasuouwqysmomu($post), $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []), true) && !in_array($post, $this->weysguygiseoukqw(self::qgiwmgmeaagqwgkw, []), true); qgoiooayqmqqsiok: return $this->ocksiywmkyaqseou(self::aiucyqocowoqgciy . "\141\154\x6c\x6f\167\x5f\x72\145\x6e\144\145\162", $cuakwceieagskoaa, $post); } }
