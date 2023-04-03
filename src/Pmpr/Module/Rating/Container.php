<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ad5f26292f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\x72\x61\x74\151\156\147\x5f"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post) { goto mqccmesakuemceqi; } $post = $seumokooiykcomco->iooowgsqoyqseyuu(); mqccmesakuemceqi: if (!$post) { goto eyiamcekkgkiawqy; } $cuakwceieagskoaa = in_array($seumokooiykcomco->gueasuouwqysmomu($post), $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []), true) && !in_array($post, $this->weysguygiseoukqw(self::qgiwmgmeaagqwgkw, []), true); eyiamcekkgkiawqy: return $this->ocksiywmkyaqseou(self::aiucyqocowoqgciy . "\141\154\x6c\x6f\x77\137\162\x65\x6e\x64\145\162", $cuakwceieagskoaa, $post); } }
