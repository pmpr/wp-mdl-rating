<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63977daf6fb4c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\162\x61\164\x69\156\147\x5f"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if ($post) { goto kciouyuaqkyqomam; } $post = ManipulatePost::mwikyscisascoeea(); kciouyuaqkyqomam: if (!$post) { goto wwkgkaecgiwggcck; } $cuakwceieagskoaa = in_array(ManipulatePost::gueasuouwqysmomu($post), $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []), true) && !in_array($post, $this->weysguygiseoukqw(self::qgiwmgmeaagqwgkw, []), true); wwkgkaecgiwggcck: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\x61\x6c\154\157\167\x5f\162\x65\156\144\x65\162"), $cuakwceieagskoaa, $post); } }
