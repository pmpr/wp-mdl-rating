<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b43e6c18             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Feedback; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; class Rating extends ComponentInitiator { use CommonTrait; const aiucyqocowoqgciy = "\x72\141\164\151\156\147\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\122\141\164\x69\x6e\147", PR__MDL__RATING); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x62\145\146\157\162\x65\x5f\x65\156\161\165\x65\x75\145\x5f\x66\x72\x6f\156\164\x65\x6e\144\x5f\141\163\163\145\x74\x73", [$this, "\145\x6e\161\165\145\165\145"]); } public function mameiwsayuyquoeq() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); Hook::symcgieuakksimmu(); if ($owaoeyikmqaeegma->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->syukqeyowauuucwi()) { Frontend::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->awumyiewiaosiyyy()) { Rate::symcgieuakksimmu(); Feedback::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\163\x74\162\165\143\164\165\x72\x65\144\x2d\144\x61\164\141")) { StructuredData::symcgieuakksimmu(); } } public function enqueue() { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\146\162\157\x6e\164", $eygsasmqycagyayw->get("\146\162\157\156\164\x2e\x6a\x73"))->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); $eygsasmqycagyayw->iagmuqogkyysiick([Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, Constants::squoamkioomemiyi => $icwicymcioeyeyek[Constants::squoamkioomemiyi], Constants::eggygikowgywcayq => $icwicymcioeyeyek[Constants::eggygikowgywcayq], Constants::iysmcyukumkiiuik => $this->weysguygiseoukqw(Setting::emymmsaswkougwqo, 1), Constants::eoskkkieowogacws => ["\x74\162\171\137\x61\147\x61\151\156" => __("\x52\141\x74\145\40\x69\x73\40\156\157\164\40\x72\x65\143\x6f\162\144\145\x64\56\x20\160\x6c\145\x61\163\145\40\x74\162\171\x20\x61\147\141\x69\x6e\56", PR__MDL__RATING)]]); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\162\141\x74\151\x6e\x67")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x66\x72\157\x6e\x74\x2e\143\163\x73"))); } } }
