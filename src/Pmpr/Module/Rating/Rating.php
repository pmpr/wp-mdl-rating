<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b75094c93             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Feedback; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; class Rating extends ComponentInitiator { use CommonTrait; const aiucyqocowoqgciy = "\x72\x61\164\x69\x6e\x67\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x52\141\x74\151\x6e\147", PR__MDL__RATING); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\x65\146\x6f\x72\145\x5f\145\156\161\x75\x65\x75\x65\137\146\162\157\156\164\145\156\x64\x5f\x61\x73\x73\145\x74\163", [$this, "\145\156\x71\165\x65\165\x65"]); } public function mameiwsayuyquoeq() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); Hook::symcgieuakksimmu(); if ($owaoeyikmqaeegma->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->syukqeyowauuucwi()) { Frontend::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->awumyiewiaosiyyy()) { Rate::symcgieuakksimmu(); Feedback::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x73\164\x72\165\143\x74\x75\x72\145\144\55\x64\x61\164\x61")) { StructuredData::symcgieuakksimmu(); } } public function enqueue() { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, "\146\x72\x6f\x6e\x74", "\146\x72\x6f\x6e\x74\56\x6a\163")->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); $meakksicouekcgoe->qgkgieacuwasgiuy($this, [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, Constants::squoamkioomemiyi => $icwicymcioeyeyek[Constants::squoamkioomemiyi], Constants::eggygikowgywcayq => $icwicymcioeyeyek[Constants::eggygikowgywcayq], Constants::iysmcyukumkiiuik => $this->weysguygiseoukqw(Setting::emymmsaswkougwqo, 1), Constants::eoskkkieowogacws => ["\164\162\171\x5f\x61\147\x61\x69\156" => __("\122\141\x74\145\40\x69\x73\x20\x6e\x6f\164\x20\162\x65\x63\157\162\x64\x65\x64\56\x20\160\154\x65\x61\x73\145\40\x74\162\171\40\x61\x67\141\x69\156\56", PR__MDL__RATING)]]); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, "\x72\141\164\151\156\x67")->awagieqcmmwkgwgs($meakksicouekcgoe->souwykwwmyygqyqi($this, "\146\x72\157\x6e\164\x2e\x63\163\x73"))); } } }
