<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ecdc7387882             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Container extends BaseClass { const aiucyqocowoqgciy = "\162\141\x74\x69\x6e\x67\137"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if ($post) { goto kiwqkcaekqqyuegq; } $post = ManipulatePost::mwikyscisascoeea(); kiwqkcaekqqyuegq: if (!$post) { goto quwcqmyokicssyew; } $cuakwceieagskoaa = in_array(ManipulatePost::gueasuouwqysmomu($post), $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []), true) && !in_array($post, $this->weysguygiseoukqw(self::qgiwmgmeaagqwgkw, []), true); quwcqmyokicssyew: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\141\x6c\x6c\x6f\x77\x5f\x72\145\x6e\x64\x65\162"), $cuakwceieagskoaa, $post); } }
