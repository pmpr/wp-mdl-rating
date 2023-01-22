<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf3b51eed1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\162\141\164\x69\156\x67\x5f"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if ($post) { goto kciouyuaqkyqomam; } $post = ManipulatePost::mwikyscisascoeea(); kciouyuaqkyqomam: if (!$post) { goto wwkgkaecgiwggcck; } $cuakwceieagskoaa = in_array(ManipulatePost::gueasuouwqysmomu($post), $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []), true) && !in_array($post, $this->weysguygiseoukqw(self::qgiwmgmeaagqwgkw, []), true); wwkgkaecgiwggcck: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\141\154\x6c\x6f\x77\x5f\x72\145\156\144\145\162"), $cuakwceieagskoaa, $post); } }
