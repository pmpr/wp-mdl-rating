<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d9940a38d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; use Pmpr\Module\StructuredData\AbstractStructuredData; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWorkSeries; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; class StructuredData extends AbstractStructuredData { use CommonTrait; public function cquokmemekqqywgi() { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $sqeykgyoooqysmca = $icwicymcioeyeyek[Constants::squoamkioomemiyi]; $moqewomugocaueis = $icwicymcioeyeyek[Constants::eggygikowgywcayq]; $qqyuqswckkcomeak = $mcieuoqmagekmouk->yumiigommgsksqsu($moqewomugocaueis, $sqeykgyoooqysmca); if (isset($qqyuqswckkcomeak[Constants::qiyqwyiiwykeccmo], $qqyuqswckkcomeak[Constants::yewgggaqoacewaai])) { $meqocwsecsywiiqs = ''; switch ($sqeykgyoooqysmca) { case Constants::uouymeyqasaeckso: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($moqewomugocaueis); break; case Constants::gmmygyiecgmggaam: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qcgakseyaikigqco($moqewomugocaueis); break; } $ksoygooogqsikqmw = (new CreativeWorkSeries())->usuqmwksoeaayaig($meqocwsecsywiiqs)->nsqwikmawcqqyayk((new AggregateRating())->oyigwesguooeqkmo(5)->agumqmayuckgugae(0)->aqgscesisoeawose($qqyuqswckkcomeak[Constants::qiyqwyiiwykeccmo])->squsoiakemiuoouq($qqyuqswckkcomeak[Constants::yewgggaqoacewaai])); $this->yuaukuikuewwqumk($ksoygooogqsikqmw); } } } }
