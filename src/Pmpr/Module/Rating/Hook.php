<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e4235aff1b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Data\Meta; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Rating\Model\Rate; class Hook extends Container { public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\155\x65\164\x61\144\x61\x74\x61\137\x61\154\x6c\137\151\x74\x65\x6d\x73", [$this, "\171\x61\x73\153\x79\x77\x75\153\x61\x73\153\x73\153\x6b\143\x75"])->aqaqisyssqeomwom("\x6d\145\x74\x61\x64\x61\164\141\x5f\x73\164\141\x74\137\147\145\164\x5f\141\154\154\137\x69\164\x65\155\x73", [$this, "\171\141\x73\153\x79\167\x75\153\x61\163\153\163\x6b\153\143\165"], 20)->aqaqisyssqeomwom("\155\145\164\x61\x64\141\x74\x61\x5f\165\160\144\x61\x74\x65\x5f\162\x61\x74\x69\x6e\x67", [$this, "\x67\163\161\157\163\147\155\171\x6b\167\147\x63\161\x67\171\x63"], 10, 2)->aqaqisyssqeomwom("\x6d\x65\164\141\x64\x61\164\141\137\x73\164\141\164\x5f\165\x70\144\x61\164\x65\137\162\x61\164\x69\x6e\x67", [$this, "\x73\x6b\165\x6f\143\x79\x79\x79\153\x6f\x69\x73\x77\163\x63\x79"], 10, 2)->aqaqisyssqeomwom(self::aiucyqocowoqgciy . "\x67\x65\x74\137\x70\157\x73\164\x73\x5f\142\171\x5f\x72\x61\164\x65", [$this, "\x6d\x6b\165\x6f\x75\x6f\x6f\157\141\x63\x67\171\x67\143\x6f\x67"], 10, 2)->aqaqisyssqeomwom(self::aiucyqocowoqgciy . "\147\x65\164\137\x70\x6f\x70\165\x6c\x61\x72\137\160\157\x73\x74\x73", [$this, "\155\x6b\x75\x6f\x75\x6f\x6f\157\x61\x63\x67\171\147\x63\157\x67"], 10, 2); } public function yaskywukaskskkcu($ooiewiwkegguusum = []) : array { $ooiewiwkegguusum["\162\141\x74\151\x6e\147"] = __("\x52\x61\164\151\x6e\147", PR__MDL__RATING); return $ooiewiwkegguusum; } public function gsqosgmykwgcqgyc($ugugimquukqwogge, $post) { if (!$ugugimquukqwogge instanceof Metadata) { goto kecwuwwcwokuksyq; } $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qqyuqswckkcomeak = $mcieuoqmagekmouk->qooeaookuemoqecm([], $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::qiyqwyiiwykeccmo); $wiiqgewkwwkaukyo = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::yewgggaqoacewaai); if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto egasokooagakisiy; } $qqyuqswckkcomeak = sprintf(__("\45\x73\x20\x6f\146\40\45\x73\x20\45\163", PR__MDL__RATING), $this->msywmyaoqmaegsuy($wiiqgewkwwkaukyo), $this->msywmyaoqmaegsuy(5), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei("\50{$this->msywmyaoqmaegsuy($gaeqamemwmwsyukm)}\x29", ["\x63\154\x61\163\163" => "\x6d\x72\x2d\61"])); $ugugimquukqwogge->jyumyyugiwwiqomk(999)->iygyugseyaqwywyg($qqyuqswckkcomeak)->saemoowcasogykak(IconInterface::asaomwmaicuoeekg); egasokooagakisiy: kecwuwwcwokuksyq: return $ugugimquukqwogge; } public function skuocyyykoiswscy($awmkgwkewqigsgsg, $useksmwkuswkwcqg = self::mswoacegomcucaik) { if (!$awmkgwkewqigsgsg instanceof Meta) { goto qmiwsequckckoaei; } $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qqyuqswckkcomeak = $mcieuoqmagekmouk->wmuimigkswkqsgmi($useksmwkuswkwcqg); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::qiyqwyiiwykeccmo); $wiiqgewkwwkaukyo = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::yewgggaqoacewaai); if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto qgegkeomwscwwiuw; } $awmkgwkewqigsgsg->saemoowcasogykak(IconInterface::wieeamqomamwgucs)->iygyugseyaqwywyg(round($wiiqgewkwwkaukyo, 1))->jyumyyugiwwiqomk(999); qgegkeomwscwwiuw: qmiwsequckckoaei: return $awmkgwkewqigsgsg; } public function mkuouoooacgygcog(array $wyoiwuqokyeeuguk = [], array $ywmkwiwkosakssii = []) : array { return Rate::symcgieuakksimmu()->syiwgwgkeyykggsy($ywmkwiwkosakssii); } }
