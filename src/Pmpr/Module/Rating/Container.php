<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634be29e5839b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\x72\x61\x74\151\x6e\x67\137"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if ($post) { goto siqagquguiemuoku; } $post = ManipulatePost::mwikyscisascoeea(); siqagquguiemuoku: if (!$post) { goto ycakugokkqkuqyiu; } $cuakwceieagskoaa = in_array(ManipulatePost::gueasuouwqysmomu($post), $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []), true) && !in_array($post, $this->weysguygiseoukqw(self::qgiwmgmeaagqwgkw, []), true); ycakugokkqkuqyiu: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\x61\154\x6c\x6f\x77\137\x72\145\156\144\x65\x72"), $cuakwceieagskoaa, $post); } }
