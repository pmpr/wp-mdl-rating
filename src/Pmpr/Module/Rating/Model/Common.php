<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d10c1947c73             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating\Model; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass; abstract class Common extends BaseClass { public function ckgmycmaukqgkosk() { $quowyokcwswmuois = self::akuociswqmoigkas(); $this->oyeskqayoscwciem()->okgmqaeuaeymaocm($quowyokcwswmuois)->wiskakymeaywyeuw($quowyokcwswmuois); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->geqyygqiwiqusekc(self::mswoacegomcucaik)->jyumyyugiwwiqomk(10)->gswweykyogmsyawy(__("\x50\x6f\163\x74", PR__MDL__RATING)), $this->geqyygqiwiqusekc(self::iockmgiyoygcswog)->jyumyyugiwwiqomk(25)->gswweykyogmsyawy(__("\x4f\167\156\x65\162", PR__MDL__RATING)), $this->usqseiuaeauwuwus(self::ioksewgkgwwikiwo)->acceqyqygswoecwe(32)->gswweykyogmsyawy(__("\111\x50", PR__MDL__RATING))->jyumyyugiwwiqomk(50)]); parent::ewaqwooqoqmcoomi(); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::mswoacegomcucaik: $post = ManipulatePost::get($eqgoocgaqwqcimie); if (!$post) { goto ycakugokkqkuqyiu; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(DecoratorPost::yyykkcyiksewsoqy($post), ManipulatePost::qcgakseyaikigqco($post)); ycakugokkqkuqyiu: goto coywmiyqgsweuiic; case self::iockmgiyoygcswog: $mkucggyaiaukqoce = ManipulateUser::get($eqgoocgaqwqcimie); if (!$mkucggyaiaukqoce) { goto oouoqimaaqcmccay; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce), ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce)); oouoqimaaqcmccay: } siqagquguiemuoku: coywmiyqgsweuiic: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function mcaggmuyamgsomaa($ccowyogiqwikkkie = [], $aokagokqyuysuksm = null, $tsuauommsquiesmk = null, $igqsaukqcqscimok = null) : array { $post = ManipulatePost::get(ManipulateArray::get($igqsaukqcqscimok, self::mswoacegomcucaik), self::ckmqoekmugkggeym, true); if (!$post) { goto sycygoiaiqqageym; } $ccowyogiqwikkkie["\x73\x68\157\167\x5f\160\157\x73\164"] = ManipulateHTML::yuawgssgauywkiia(__("\x53\x68\x6f\x77\x20\120\157\163\x74", PR__MDL__RATING), ManipulatePost::ycqquoiyyuesegsy($post)); sycygoiaiqqageym: return parent::mcaggmuyamgsomaa($ccowyogiqwikkkie, $aokagokqyuysuksm, $tsuauommsquiesmk, $igqsaukqcqscimok); } public function jwskisguugiiqwsq($post, $miowmmgaiagcuyoo = null, $kucumcusyyckayas = null) : ?object { $post = ManipulateUser::mwikyscisascoeea($post); if ($miowmmgaiagcuyoo) { goto gygawoqywkukmqee; } $miowmmgaiagcuyoo = ManipulateUser::kuswmimkgmyuymiu(); gygawoqywkukmqee: if ($kucumcusyyckayas) { goto kciouyuaqkyqomam; } $kucumcusyyckayas = ManipulateUser::meymqemgekqiawec(); kciouyuaqkyqomam: $wiwomgcsgmawegaw = null; if (!$post) { goto umgaesggesswoaqe; } $yyqawuyyqgsymiqk = [self::iockmgiyoygcswog => $miowmmgaiagcuyoo]; if (DecoratorUser::ksgkoukcicwkkaum()) { goto wwkgkaecgiwggcck; } $yyqawuyyqgsymiqk[self::ioksewgkgwwikiwo] = [self::ciyoccqkiamemcmm => $kucumcusyyckayas, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim]; wwkgkaecgiwggcck: $uoomaookgsyciacm = [self::mswoacegomcucaik => $post, [self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::iowgsqgiaamyuswi => $yyqawuyyqgsymiqk]]; $wiwomgcsgmawegaw = $this->oqomcmyuuakigusk($uoomaookgsyciacm); umgaesggesswoaqe: return $wiwomgcsgmawegaw; } }
