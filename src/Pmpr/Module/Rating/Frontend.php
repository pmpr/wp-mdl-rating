<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d8310b921ca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Rating\Model\Rate; class Frontend extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\x6f\155\155\x65\156\164\137\146\x6f\162\x6d\137\142\x65\x66\x6f\x72\x65", [$this, "\162\x65\x6e\144\x65\x72"], 0)->qcsmikeggeemccuu($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\162\145\x6e\144\x65\x72"), [$this, "\x72\145\156\x64\145\x72"]); } public function render($post = null) { echo $this->sqkcuwewwecosise($post); } public function sqkcuwewwecosise($post = null, bool $egcgeqyisgamuamo = false) : string { $nsmgceoqaqogqmuw = ''; if (!$this->uiqcwsowwswommka($post)) { goto eiawsoasmscmqswa; } $qookweymeqawmcwo = ["\162\x65\163\x75\x6c\x74\x5f\x6d\141\163\x6b" => __("\x52\141\164\151\x6e\147\40\101\166\x65\162\x61\x67\x65\40\45\x73\x20\157\146\x20\x25\163\x20\174\40\x52\x61\164\x69\x6e\147\40\103\157\x75\x6e\x74\72\40\x25\163", PR__MDL__RATING)]; if (!($mcieuoqmagekmouk = Rate::symcgieuakksimmu())) { goto goeoymmqqqeeoime; } $qqyuqswckkcomeak = $mcieuoqmagekmouk->qooeaookuemoqecm([], $post); $gaeqamemwmwsyukm = ManipulateArray::get($qqyuqswckkcomeak, "\x63\157\165\156\164"); $wiiqgewkwwkaukyo = ManipulateArray::get($qqyuqswckkcomeak, "\x61\x76\x65\162\141\147\145"); $qookweymeqawmcwo["\x72\141\164\x69\156\147"] = $qqyuqswckkcomeak; if (!$egcgeqyisgamuamo) { goto qgegkeomwscwwiuw; } $eoiqickgueqaoioi = $mcieuoqmagekmouk->jwskisguugiiqwsq($post); if ($eoiqickgueqaoioi) { goto egasokooagakisiy; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ["\x74\x69\x74\154\145" => __("\131\157\x75\162\x20\x6f\x70\151\156\151\x6f\x6e\x20\x69\163\x20\x69\x6d\160\x6f\162\164\x61\156\164\x20\164\x6f\x20\x75\163", PR__MDL__RATING), "\147\165\x69\144\x65\x5f\x74\145\x78\x74" => sprintf(__("\x52\141\x74\x65\x20\164\150\x69\163\x20\x70\x6f\x73\x74\x20\x25\x73\x20\x74\x6f\40\45\x73", PR__MDL__RATING), 1, 5)]); egasokooagakisiy: $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\x66\157\x72\x6d\x5f\162\145\x6e\x64\x65\x72\x5f\x70\x61\162\141\155\145\x74\145\x72\163"), $qookweymeqawmcwo, $post); if (!$eoiqickgueqaoioi) { goto kecwuwwcwokuksyq; } $qookweymeqawmcwo["\x75\163\x65\x72\137\x72\x61\164\x65"] = sprintf(__("\x59\x6f\165\x20\150\141\166\x65\40\141\154\x72\145\x61\x64\171\40\x72\x61\x74\x65\x20\45\163\x20\x74\157\x20\x74\x68\151\163\40\160\x6f\x73\x74\56", PR__MDL__RATING), $this->msywmyaoqmaegsuy(ManipulateArray::get($eoiqickgueqaoioi, "\166\x61\x6c\x75\x65", 1))); kecwuwwcwokuksyq: qgegkeomwscwwiuw: if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto qmiwsequckckoaei; } $qookweymeqawmcwo["\162\x65\163\165\154\x74"] = $this->msywmyaoqmaegsuy(sprintf($qookweymeqawmcwo["\162\x65\163\x75\154\164\x5f\x6d\x61\163\153"], round($wiiqgewkwwkaukyo, 2), 5, (int) $gaeqamemwmwsyukm)); qmiwsequckckoaei: $qookweymeqawmcwo["\x70\157\163\x74"] = ManipulatePost::mwikyscisascoeea($post); $qookweymeqawmcwo["\x72\x65\156\144\x65\162"] = $egcgeqyisgamuamo; $qookweymeqawmcwo["\x72\x61\164\151\x6e\x67\137\x66\157\x72\x6d"] = $this->imqoowygmmgysyyu(); $qookweymeqawmcwo["\x66\x65\145\144\142\x61\143\153\x5f\x66\x6f\x72\x6d"] = $this->ocoacoemoquqgqwm(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\146\157\x72\155", $qookweymeqawmcwo); $nsmgceoqaqogqmuw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\146\x6f\162\x6d\x5f\x68\164\x6d\154"), $nsmgceoqaqogqmuw, $qookweymeqawmcwo); goeoymmqqqeeoime: eiawsoasmscmqswa: return $nsmgceoqaqogqmuw; } public function imqoowygmmgysyyu() : ?string { return $this->iuygowkemiiwqmiw("\x72\141\x74\x69\x6e\x67", [self::NAME => "\162\141\164\151\x6e\147"]); } public function ocoacoemoquqgqwm() : ?string { $ikgwqyuyckaewsow = [Form::uouyygwcgsmygaee("\x72\x61\164\x69\x6e\x67\x5f\146\145\145\x64\142\x61\143\153", __("\122\141\x74\x69\156\x67\x20\106\145\x65\x64\142\x61\143\153", PR__MDL__RATING))->kyiucygqsgequoys(__("\124\x65\170\x74", PR__MDL__RATING)), Form::ucmasmuimegwqeuk("\x72\x61\x74\151\156\147\x5f\163\x75\x62\155\151\x74", __("\x53\x75\142\155\151\x74", PR__MDL__RATING))->iswqmkousoeksaae()]; $qookweymeqawmcwo = ["\x71\x75\145\x73\164\151\x6f\x6e" => $this->weysguygiseoukqw(Setting::yuauwoaimesgouey), self::ymckmcsiymwqucoq => $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\146\145\145\x64\x62\x61\x63\153\137\146\x6f\x72\x6d\x5f\146\151\145\154\x64\163"), $ikgwqyuyckaewsow)]; $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\146\145\x65\144\142\141\x63\x6b\x5f\x70\x61\162\141\x6d\145\164\145\x72\163"), $qookweymeqawmcwo); return $this->iuygowkemiiwqmiw("\x66\x65\145\x64\x62\x61\143\x6b", $qookweymeqawmcwo); } }
