<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654bf1d3c6511             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Data\Meta; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Rating\Model\Rate; class Hook extends Container { public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\155\x65\164\x61\x64\x61\x74\x61\x5f\141\154\x6c\x5f\x69\164\x65\155\x73", [$this, "\171\x61\163\153\171\x77\x75\153\141\163\153\163\153\153\x63\x75"])->aqaqisyssqeomwom("\x6d\x65\164\141\x64\x61\164\x61\137\x73\x74\141\x74\137\x67\x65\164\x5f\141\154\x6c\137\x69\164\145\x6d\x73", [$this, "\171\141\x73\x6b\x79\167\x75\153\x61\x73\153\163\x6b\x6b\x63\165"], 20)->aqaqisyssqeomwom("\x6d\x65\x74\x61\144\x61\x74\141\137\x75\x70\144\141\164\x65\x5f\x72\141\164\x69\x6e\x67", [$this, "\147\163\x71\157\x73\147\x6d\x79\x6b\167\x67\143\x71\147\x79\143"], 10, 2)->aqaqisyssqeomwom("\x6d\x65\x74\141\x64\141\164\141\137\x73\x74\141\164\137\165\160\144\141\164\x65\x5f\x72\x61\164\151\156\147", [$this, "\163\x6b\165\157\143\171\171\x79\x6b\157\x69\x73\x77\163\x63\171"], 10, 2)->aqaqisyssqeomwom(self::aiucyqocowoqgciy . "\x67\145\164\x5f\x70\157\163\164\163\137\142\x79\x5f\x72\141\x74\x65", [$this, "\155\153\165\x6f\x75\x6f\x6f\x6f\141\143\147\171\147\x63\157\147"], 10, 2)->aqaqisyssqeomwom(self::aiucyqocowoqgciy . "\x67\x65\x74\x5f\x70\157\160\165\154\x61\x72\137\x70\157\163\x74\x73", [$this, "\155\x6b\165\157\165\x6f\x6f\x6f\141\143\x67\171\x67\x63\x6f\147"], 10, 2); } public function yaskywukaskskkcu($ooiewiwkegguusum = []) : array { $ooiewiwkegguusum["\x72\141\x74\151\x6e\147"] = __("\x52\141\x74\x69\156\x67", PR__MDL__RATING); return $ooiewiwkegguusum; } public function gsqosgmykwgcqgyc($ugugimquukqwogge, $post) { if (!$ugugimquukqwogge instanceof Metadata) { goto kiqogmwcgcamwiig; } $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qqyuqswckkcomeak = $mcieuoqmagekmouk->qooeaookuemoqecm([], $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::qiyqwyiiwykeccmo); $wiiqgewkwwkaukyo = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::yewgggaqoacewaai); if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto yowsmsiyimmimemc; } $qqyuqswckkcomeak = sprintf(__("\45\163\x20\x6f\x66\40\x25\x73\x20\x25\163", PR__MDL__RATING), $this->msywmyaoqmaegsuy($wiiqgewkwwkaukyo), $this->msywmyaoqmaegsuy(5), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei("\50{$this->msywmyaoqmaegsuy($gaeqamemwmwsyukm)}\x29", ["\143\x6c\141\x73\x73" => "\x6d\162\55\61"])); $ugugimquukqwogge->jyumyyugiwwiqomk(999)->iygyugseyaqwywyg($qqyuqswckkcomeak)->saemoowcasogykak(IconInterface::asaomwmaicuoeekg); yowsmsiyimmimemc: kiqogmwcgcamwiig: return $ugugimquukqwogge; } public function skuocyyykoiswscy($awmkgwkewqigsgsg, $useksmwkuswkwcqg = self::mswoacegomcucaik) { if (!$awmkgwkewqigsgsg instanceof Meta) { goto sqiciiuwmykocycc; } $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qqyuqswckkcomeak = $mcieuoqmagekmouk->wmuimigkswkqsgmi($useksmwkuswkwcqg); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::qiyqwyiiwykeccmo); $wiiqgewkwwkaukyo = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, self::yewgggaqoacewaai); if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto iomcaiwewsawiamu; } $awmkgwkewqigsgsg->saemoowcasogykak(IconInterface::wieeamqomamwgucs)->iygyugseyaqwywyg(round($wiiqgewkwwkaukyo, 1))->jyumyyugiwwiqomk(999); iomcaiwewsawiamu: sqiciiuwmykocycc: return $awmkgwkewqigsgsg; } public function mkuouoooacgygcog(array $wyoiwuqokyeeuguk = [], array $ywmkwiwkosakssii = []) : array { return Rate::symcgieuakksimmu()->syiwgwgkeyykggsy($ywmkwiwkosakssii); } }
