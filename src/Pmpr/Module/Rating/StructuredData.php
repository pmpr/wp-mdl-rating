<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ad5f26292f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\StructuredData\AbstractStructuredData; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWorkSeries; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; class StructuredData extends AbstractStructuredData { public function cquokmemekqqywgi() { $sqsckcmykaiamcak = Rating::symcgieuakksimmu(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); if (!($post && $sqsckcmykaiamcak->uiqcwsowwswommka($post))) { goto gygawoqywkukmqee; } $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $qqyuqswckkcomeak = $mcieuoqmagekmouk->ewmegmsaoeuyuuuq($post); if (!isset($qqyuqswckkcomeak[self::qiyqwyiiwykeccmo], $qqyuqswckkcomeak[self::yewgggaqoacewaai])) { goto sycygoiaiqqageym; } $ksoygooogqsikqmw = (new CreativeWorkSeries())->usuqmwksoeaayaig($seumokooiykcomco->qcgakseyaikigqco($post))->nsqwikmawcqqyayk((new AggregateRating())->oyigwesguooeqkmo(5)->agumqmayuckgugae(0)->aqgscesisoeawose($qqyuqswckkcomeak[self::qiyqwyiiwykeccmo])->squsoiakemiuoouq($qqyuqswckkcomeak[self::yewgggaqoacewaai])); $this->yuaukuikuewwqumk($ksoygooogqsikqmw); sycygoiaiqqageym: gygawoqywkukmqee: } }
