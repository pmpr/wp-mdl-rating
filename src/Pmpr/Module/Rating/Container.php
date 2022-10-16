<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634c2a645ff81             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\162\141\x74\x69\x6e\147\137"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if ($post) { goto gygawoqywkukmqee; } $post = ManipulatePost::mwikyscisascoeea(); gygawoqywkukmqee: if (!$post) { goto kciouyuaqkyqomam; } $cuakwceieagskoaa = in_array(ManipulatePost::gueasuouwqysmomu($post), $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []), true) && !in_array($post, $this->weysguygiseoukqw(self::qgiwmgmeaagqwgkw, []), true); kciouyuaqkyqomam: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\x61\x6c\154\x6f\167\137\162\x65\156\144\145\x72"), $cuakwceieagskoaa, $post); } }
