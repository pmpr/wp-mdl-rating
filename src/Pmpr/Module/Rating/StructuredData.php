<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e5105e5aa35             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\StructuredData\AbstractStructuredData; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWorkSeries; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; class StructuredData extends AbstractStructuredData { public function cquokmemekqqywgi() { if (!($icwicymcioeyeyek = Frontend::symcgieuakksimmu()->uiqcwsowwswommka())) { goto sqiciiuwmykocycc; } $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $sqeykgyoooqysmca = $icwicymcioeyeyek[self::squoamkioomemiyi]; $moqewomugocaueis = $icwicymcioeyeyek[self::eggygikowgywcayq]; $qqyuqswckkcomeak = $mcieuoqmagekmouk->yumiigommgsksqsu($moqewomugocaueis, $sqeykgyoooqysmca); if (!isset($qqyuqswckkcomeak[self::qiyqwyiiwykeccmo], $qqyuqswckkcomeak[self::yewgggaqoacewaai])) { goto iomcaiwewsawiamu; } $meqocwsecsywiiqs = ''; switch ($sqeykgyoooqysmca) { case self::uouymeyqasaeckso: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($moqewomugocaueis); goto yowsmsiyimmimemc; case self::gmmygyiecgmggaam: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qcgakseyaikigqco($moqewomugocaueis); goto yowsmsiyimmimemc; } kiqogmwcgcamwiig: yowsmsiyimmimemc: $ksoygooogqsikqmw = (new CreativeWorkSeries())->usuqmwksoeaayaig($meqocwsecsywiiqs)->nsqwikmawcqqyayk((new AggregateRating())->oyigwesguooeqkmo(5)->agumqmayuckgugae(0)->aqgscesisoeawose($qqyuqswckkcomeak[self::qiyqwyiiwykeccmo])->squsoiakemiuoouq($qqyuqswckkcomeak[self::yewgggaqoacewaai])); $this->yuaukuikuewwqumk($ksoygooogqsikqmw); iomcaiwewsawiamu: sqiciiuwmykocycc: } }
