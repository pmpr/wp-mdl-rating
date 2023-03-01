<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff320fdf9e9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\x72\141\x74\x69\156\x67\x5f"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post) { goto cecuyayqoioasumi; } $post = $seumokooiykcomco->iooowgsqoyqseyuu(); cecuyayqoioasumi: if (!$post) { goto qiaqsassksqiuyae; } $cuakwceieagskoaa = in_array($seumokooiykcomco->gueasuouwqysmomu($post), $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []), true) && !in_array($post, $this->weysguygiseoukqw(self::qgiwmgmeaagqwgkw, []), true); qiaqsassksqiuyae: return $this->ocksiywmkyaqseou(self::aiucyqocowoqgciy . "\141\154\x6c\157\167\137\162\145\x6e\144\x65\x72", $cuakwceieagskoaa, $post); } }
