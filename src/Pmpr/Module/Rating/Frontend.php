<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ecdc7387882             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Rating\Model\Rate; class Frontend extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\143\x6f\155\155\145\x6e\x74\137\x66\x6f\162\155\x5f\142\145\146\157\162\x65", [$this, "\162\145\x6e\144\145\x72"], 0)->qcsmikeggeemccuu($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\162\145\x6e\x64\x65\162"), [$this, "\162\145\156\144\145\x72"]); } public function render($post = null) { echo $this->sqkcuwewwecosise($post); } public function sqkcuwewwecosise($post = null, bool $egcgeqyisgamuamo = false) : string { $nsmgceoqaqogqmuw = ''; if (!$this->uiqcwsowwswommka($post)) { goto eiawsoasmscmqswa; } $qookweymeqawmcwo = ["\x72\x65\163\165\154\x74\x5f\155\x61\x73\153" => __("\122\141\x74\151\x6e\x67\x20\101\x76\145\x72\x61\x67\x65\40\45\163\x20\x6f\x66\x20\x25\x73\40\x7c\x20\x52\141\164\151\156\x67\x20\103\x6f\x75\x6e\x74\72\40\x25\x73", PR__MDL__RATING)]; if (!($mcieuoqmagekmouk = Rate::symcgieuakksimmu())) { goto goeoymmqqqeeoime; } $qqyuqswckkcomeak = $mcieuoqmagekmouk->qooeaookuemoqecm([], $post); $gaeqamemwmwsyukm = ManipulateArray::get($qqyuqswckkcomeak, "\143\x6f\165\156\x74"); $wiiqgewkwwkaukyo = ManipulateArray::get($qqyuqswckkcomeak, "\141\x76\145\162\141\147\145"); $qookweymeqawmcwo["\162\x61\164\151\x6e\147"] = $qqyuqswckkcomeak; if (!$egcgeqyisgamuamo) { goto qgegkeomwscwwiuw; } $eoiqickgueqaoioi = $mcieuoqmagekmouk->jwskisguugiiqwsq($post); if ($eoiqickgueqaoioi) { goto egasokooagakisiy; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ["\164\151\164\154\145" => __("\131\157\x75\162\40\157\160\x69\x6e\151\x6f\156\x20\x69\x73\40\x69\x6d\x70\x6f\x72\164\x61\156\164\x20\x74\157\x20\x75\x73", PR__MDL__RATING), "\147\x75\151\144\x65\137\164\145\170\x74" => sprintf(__("\122\141\164\x65\x20\164\x68\x69\163\x20\160\x6f\163\164\40\x25\163\x20\x74\x6f\40\x25\163", PR__MDL__RATING), 1, 5)]); egasokooagakisiy: $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\146\x6f\x72\155\137\x72\x65\156\x64\145\162\x5f\160\141\x72\141\155\145\x74\145\x72\x73"), $qookweymeqawmcwo, $post); if (!$eoiqickgueqaoioi) { goto kecwuwwcwokuksyq; } $qookweymeqawmcwo["\165\x73\x65\162\x5f\x72\x61\164\145"] = sprintf(__("\x59\157\165\x20\150\141\x76\145\40\x61\x6c\162\x65\x61\144\171\40\x72\x61\x74\x65\40\45\163\x20\x74\157\40\x74\150\151\163\x20\x70\157\163\164\x2e", PR__MDL__RATING), $this->msywmyaoqmaegsuy(ManipulateArray::get($eoiqickgueqaoioi, "\166\141\154\165\x65", 1))); kecwuwwcwokuksyq: qgegkeomwscwwiuw: if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto qmiwsequckckoaei; } $qookweymeqawmcwo[self::syomkiqgogwyuiyw] = $this->msywmyaoqmaegsuy(sprintf($qookweymeqawmcwo["\x72\x65\x73\x75\154\x74\137\155\x61\x73\x6b"], round($wiiqgewkwwkaukyo, 2), 5, (int) $gaeqamemwmwsyukm)); qmiwsequckckoaei: $qookweymeqawmcwo["\162\145\156\x64\145\162"] = $egcgeqyisgamuamo; $qookweymeqawmcwo[self::mswoacegomcucaik] = ManipulatePost::mwikyscisascoeea($post); $qookweymeqawmcwo["\x72\x61\x74\151\156\x67\x5f\146\x6f\x72\155"] = $this->imqoowygmmgysyyu(); $qookweymeqawmcwo["\x66\145\145\x64\x62\141\143\153\137\146\x6f\162\155"] = $this->ocoacoemoquqgqwm(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\146\157\162\x6d", $qookweymeqawmcwo); $nsmgceoqaqogqmuw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\x66\157\162\155\x5f\150\x74\x6d\x6c"), $nsmgceoqaqogqmuw, $qookweymeqawmcwo); goeoymmqqqeeoime: eiawsoasmscmqswa: return $nsmgceoqaqogqmuw; } public function imqoowygmmgysyyu() : ?string { return $this->iuygowkemiiwqmiw("\162\141\164\x69\156\x67", [self::NAME => "\162\x61\164\x69\156\x67"]); } public function ocoacoemoquqgqwm() : ?string { $ikgwqyuyckaewsow = [Form::uouyygwcgsmygaee("\x72\141\164\151\x6e\147\137\146\x65\145\x64\x62\x61\143\153", __("\122\141\x74\151\x6e\x67\40\x46\x65\x65\144\142\x61\x63\x6b", PR__MDL__RATING))->kyiucygqsgequoys(__("\124\145\x78\x74", PR__MDL__RATING)), Form::ucmasmuimegwqeuk("\162\x61\164\x69\x6e\147\x5f\163\x75\142\155\151\x74", __("\123\x75\x62\155\x69\x74", PR__MDL__RATING))->iswqmkousoeksaae()]; $qookweymeqawmcwo = ["\x71\x75\x65\163\164\x69\157\156" => $this->weysguygiseoukqw(Setting::yuauwoaimesgouey), self::ymckmcsiymwqucoq => $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\146\145\145\144\142\141\143\153\x5f\146\x6f\162\x6d\x5f\x66\x69\x65\154\144\x73"), $ikgwqyuyckaewsow)]; $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\146\145\145\x64\x62\141\143\x6b\137\x70\x61\x72\x61\x6d\x65\164\x65\162\x73"), $qookweymeqawmcwo); return $this->iuygowkemiiwqmiw("\146\x65\x65\x64\142\x61\x63\153", $qookweymeqawmcwo); } }
