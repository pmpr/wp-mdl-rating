<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ecdc7387882             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\StructuredData\AbstractStructuredData; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWorkSeries; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; class StructuredData extends AbstractStructuredData { public function cquokmemekqqywgi() { $post = ManipulatePost::get(); $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $sqsckcmykaiamcak = Rating::symcgieuakksimmu(); if (!($post && $mcieuoqmagekmouk && $sqsckcmykaiamcak && $sqsckcmykaiamcak->uiqcwsowwswommka($post))) { goto qmeoaqmsuseueqiy; } $qqyuqswckkcomeak = $mcieuoqmagekmouk->ewmegmsaoeuyuuuq($post); if (!isset($qqyuqswckkcomeak[self::qiyqwyiiwykeccmo], $qqyuqswckkcomeak[self::yewgggaqoacewaai])) { goto ickcmqoiosquugwe; } $ksoygooogqsikqmw = (new CreativeWorkSeries())->usuqmwksoeaayaig(ManipulatePost::qcgakseyaikigqco($post))->nsqwikmawcqqyayk((new AggregateRating())->oyigwesguooeqkmo(5)->agumqmayuckgugae(0)->aqgscesisoeawose($qqyuqswckkcomeak[self::qiyqwyiiwykeccmo])->squsoiakemiuoouq($qqyuqswckkcomeak[self::yewgggaqoacewaai])); $this->yuaukuikuewwqumk($ksoygooogqsikqmw); ickcmqoiosquugwe: qmeoaqmsuseueqiy: } }
