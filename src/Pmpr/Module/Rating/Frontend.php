<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668719be85737             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Module\Rating\Model\Rate; class Frontend extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\157\x6d\x6d\145\x6e\164\137\x66\157\x72\155\137\142\x65\146\x6f\x72\145", [$this, "\x72\x65\156\x64\145\162"]); $this->waqewsckuayqguos(self::aiucyqocowoqgciy . "\x72\145\x6e\x64\x65\162", [$this, "\x72\145\x6e\x64\x65\x72"]); } public function render() { if (!($icwicymcioeyeyek = $this->uiqcwsowwswommka())) { goto cecuyayqoioasumi; } echo $this->wgqqgewcmcemoewo($icwicymcioeyeyek[self::eggygikowgywcayq], $icwicymcioeyeyek[self::squoamkioomemiyi]); cecuyayqoioasumi: } public function wgqqgewcmcemoewo($moqewomugocaueis = null, string $sqeykgyoooqysmca = self::uouymeyqasaeckso, bool $egcgeqyisgamuamo = false) : string { $qookweymeqawmcwo = ["\162\x65\x73\x75\x6c\x74\137\x6d\x61\x73\153" => __("\x52\141\x74\x69\x6e\147\x20\101\x76\x65\x72\141\x67\x65\40\45\x73\x20\157\x66\x20\x25\163\40\x7c\x20\122\x61\x74\x69\156\x67\x20\x43\157\165\x6e\x74\x3a\x20\x25\163", PR__MDL__RATING)]; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $qqyuqswckkcomeak = $mcieuoqmagekmouk->qooeaookuemoqecm([], $moqewomugocaueis, $sqeykgyoooqysmca); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::qiyqwyiiwykeccmo); $wiiqgewkwwkaukyo = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::yewgggaqoacewaai); $qookweymeqawmcwo["\x72\141\164\151\x6e\x67"] = $qqyuqswckkcomeak; if (!$egcgeqyisgamuamo) { goto qgoiooayqmqqsiok; } $eoiqickgueqaoioi = $mcieuoqmagekmouk->gmaiukcusaqugaii($moqewomugocaueis, $sqeykgyoooqysmca); if ($eoiqickgueqaoioi) { goto qiaqsassksqiuyae; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, [self::qescuiwgsyuikume => __("\131\x6f\165\x72\40\x6f\160\x69\x6e\151\157\x6e\x20\x69\x73\x20\151\x6d\160\157\x72\x74\141\x6e\164\x20\x74\x6f\40\x75\163", PR__MDL__RATING), "\x67\165\x69\x64\x65\137\164\145\170\164" => sprintf(__("\122\x61\164\x65\x20\164\x68\x69\x73\40\x70\x6f\x73\164\x20\x25\163\40\x74\157\40\45\163", PR__MDL__RATING), 1, 5)]); qiaqsassksqiuyae: $qookweymeqawmcwo = $this->ocksiywmkyaqseou(self::aiucyqocowoqgciy . "\146\157\162\155\x5f\162\145\156\144\x65\x72\137\160\141\x72\x61\x6d\x65\x74\145\x72\163", $qookweymeqawmcwo, $moqewomugocaueis, $sqeykgyoooqysmca); if (!$eoiqickgueqaoioi) { goto qogqewiwmwiwskgm; } $qookweymeqawmcwo["\x75\163\x65\162\x5f\x72\141\164\x65"] = sprintf(__("\131\157\x75\40\x68\141\x76\x65\40\x61\x6c\162\145\141\x64\x79\40\162\141\x74\x65\x20\x25\163\40\164\x6f\x20\164\150\x69\163\40\160\157\x73\164\x2e", PR__MDL__RATING), $this->msywmyaoqmaegsuy($gkyciwoiiisgywcs->get($eoiqickgueqaoioi, self::ciyoccqkiamemcmm, 1))); qogqewiwmwiwskgm: qgoiooayqmqqsiok: if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto qwigomakwmyiwkgo; } $qookweymeqawmcwo[self::syomkiqgogwyuiyw] = $this->msywmyaoqmaegsuy(sprintf($qookweymeqawmcwo["\x72\145\x73\x75\x6c\164\x5f\155\141\163\153"], round($wiiqgewkwwkaukyo, 2), 5, (int) $gaeqamemwmwsyukm)); qwigomakwmyiwkgo: $qookweymeqawmcwo["\162\x65\156\x64\x65\x72"] = $egcgeqyisgamuamo; $qookweymeqawmcwo[self::squoamkioomemiyi] = $sqeykgyoooqysmca; $qookweymeqawmcwo[self::eggygikowgywcayq] = $moqewomugocaueis; $qookweymeqawmcwo["\162\141\164\151\x6e\147\x5f\146\157\162\x6d"] = $this->eyguqsskwskmcgsg(); $qookweymeqawmcwo["\146\145\145\144\142\141\143\153\137\146\x6f\162\x6d"] = $this->sskogmsgywqwocqa(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x66\x6f\162\155", $qookweymeqawmcwo); return $this->ocksiywmkyaqseou(self::aiucyqocowoqgciy . "\x66\157\162\155\137\150\164\155\154", $nsmgceoqaqogqmuw, $qookweymeqawmcwo); } public function eyguqsskwskmcgsg() : ?string { return $this->iuygowkemiiwqmiw("\162\x61\x74\151\x6e\x67", [self::NAME => "\162\x61\164\x69\x6e\147", "\163\150\157\x77\x5f\156\x75\155\x62\x65\162" => $this->weysguygiseoukqw(Setting::saygqyuqecqmgykw)]); } public function sskogmsgywqwocqa() : ?string { $nsmgceoqaqogqmuw = ''; if (!$this->weysguygiseoukqw(Setting::qyusiikocoewiyks)) { goto myoicgcuugciueis; } $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->uouyygwcgsmygaee("\x72\x61\x74\x69\x6e\x67\137\x66\x65\145\144\142\x61\x63\153")->gswweykyogmsyawy(__("\122\141\164\151\x6e\147\40\106\x65\145\x64\x62\141\x63\153", PR__MDL__RATING))->kyiucygqsgequoys(__("\x54\x65\170\164", PR__MDL__RATING)), $gusoaiguqeaommcc->qoeiescseggagsqs("\162\x61\164\x69\156\147\x5f\163\165\142\155\x69\164")->gswweykyogmsyawy(__("\123\165\142\x6d\x69\164", PR__MDL__RATING))->ooqqgmyocscgmyae()]; $qookweymeqawmcwo = ["\161\x75\x65\x73\164\x69\157\156" => $this->weysguygiseoukqw(Setting::yuauwoaimesgouey), self::ymckmcsiymwqucoq => $this->ocksiywmkyaqseou(self::aiucyqocowoqgciy . "\x66\145\x65\144\x62\141\x63\153\x5f\x66\x6f\x72\155\137\x66\151\x65\154\144\163", $ikgwqyuyckaewsow)]; $qookweymeqawmcwo = $this->ocksiywmkyaqseou(self::aiucyqocowoqgciy . "\x66\145\145\x64\x62\141\x63\x6b\x5f\160\x61\x72\141\155\145\164\x65\162\163", $qookweymeqawmcwo); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x66\x65\x65\x64\142\141\x63\153", $qookweymeqawmcwo); myoicgcuugciueis: return $nsmgceoqaqogqmuw; } }
