<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6394af54b2b68             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Widget as BaseClass; use Pmpr\Module\Rating\Model\Rate; class Widget extends BaseClass { public function __construct() { parent::__construct(__("\120\157\x70\x75\x6c\141\162\40\x50\157\x73\x74\163", PR__MDL__RATING), __("\x44\151\x73\160\x6c\x61\171\x20\x74\x68\145\x20\x6d\157\163\164\40\x70\157\x70\165\x6c\x61\162\x20\160\157\163\164\163\40\x62\171\x20\x72\141\164\x69\x6e\x67\x2e", PR__MDL__RATING)); } public function ugmceccgwaaaigiy() : array { $kuguwoaesuqsqysu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\145\164\x61\144\141\x74\141\137\x69\x74\x65\x6d\x73"), []); return [self::qescuiwgsyuikume => [self::squoamkioomemiyi => "\x74\145\170\x74", self::NAME => __("\124\151\x74\154\x65", PR__MDL__RATING)], self::qiyqwyiiwykeccmo => [self::NAME => __("\103\x6f\x75\x6e\x74", PR__MDL__RATING), self::wikgqsqysyuoykse => 5, "\141\163\55\156\165\x6d\x62\x65\x72"], self::uouymeyqasaeckso => [self::squoamkioomemiyi => "\142\x73\x73\x65\x6c\145\143\x74", self::NAME => __("\120\157\163\x74\40\x54\x79\160\x65", PR__MDL__RATING), self::aeweusomuikewuis => ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::eoaiagsgqsmskugs])], self::ckcuiukmyisueqeo => [self::squoamkioomemiyi => "\x62\163\x73\x65\x6c\x65\143\164", self::NAME => __("\115\x65\164\141\x64\141\164\x61", PR__MDL__RATING), self::aeweusomuikewuis => $kuguwoaesuqsqysu, "\141\163\x2d\155\165\x6c\164\x69\x70\x6c\145", "\x73\x69\155\x70\x6c\145\55\x73\150\157\167\55\143\x62" => !empty($kuguwoaesuqsqysu)], self::icaykmacogqcsmog => [self::squoamkioomemiyi => "\x62\x73\x73\145\x6c\145\x63\x74", self::NAME => __("\123\150\x6f\167\x20\x54\145\x6d\x70\x6c\141\164\145", PR__MDL__RATING), self::aeweusomuikewuis => ["\x73\x69\155\160\x6c\x65\137\x6c\151\x73\164" => __("\x53\151\x6d\160\x6c\x65\x20\x4c\x69\x73\164", PR__MDL__RATING), self::ugmwekegkosuuwii => __("\x4c\x69\x73\164", PR__MDL__RATING), self::ugsuecoyuqcamsac => __("\124\x61\x62\x6c\x65", PR__MDL__RATING)]]]; } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $wyoiwuqokyeeuguk = []; $gaeqamemwmwsyukm = ManipulateArray::get($owgumcsyqsamiemg, self::qiyqwyiiwykeccmo, 5); $useksmwkuswkwcqg = ManipulateArray::get($owgumcsyqsamiemg, self::uouymeyqasaeckso, self::mswoacegomcucaik); $qagsauoksewmegym = []; if (!DecoratorQuery::cukiusasccucgwqc($useksmwkuswkwcqg)) { goto qmiwsequckckoaei; } $qagsauoksewmegym[] = ManipulatePost::mwikyscisascoeea(); qmiwsequckckoaei: Rate::symcgieuakksimmu()->syiwgwgkeyykggsy([self::uouymeyqasaeckso => $wyoiwuqokyeeuguk, self::ccyeycyyykwuymsy => $qagsauoksewmegym, self::cgiswgcumueqgcmw => $gaeqamemwmwsyukm]); return [self::qwumqqyuasyskkkc => $wyoiwuqokyeeuguk, self::qescuiwgsyuikume => ManipulateArray::get($owgumcsyqsamiemg, self::qescuiwgsyuikume), self::ckcuiukmyisueqeo => ManipulateArray::get($owgumcsyqsamiemg, self::ckcuiukmyisueqeo), self::okciuaikiyaecwmy => ManipulateArray::get($owgumcsyqsamiemg, self::icaykmacogqcsmog, self::ugmwekegkosuuwii)]; } }