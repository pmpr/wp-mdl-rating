<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf3b51eed1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Data\Meta; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Rating\Model\Feedback; use Pmpr\Module\Rating\Model\Model; use Pmpr\Module\Rating\Model\Rate; class Rating extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\122\x61\164\x69\156\147", PR__MDL__RATING); }]); if (!$this->gmiyqqaekqcsoime()) { goto cecuyayqoioasumi; } $this->iemaakgqgqosiecm(); parent::__construct(); cecuyayqoioasumi: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\x65\x74\141\x64\x61\164\x61\x5f\x61\154\x6c\137\x69\x74\145\x6d\163"), [$this, "\x79\141\x73\153\171\x77\x75\153\x61\x73\153\x73\x6b\x6b\x63\x75"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\145\x74\x61\144\x61\x74\x61\137\163\164\141\x74\x5f\147\145\164\137\x61\x6c\x6c\137\x69\164\145\155\x73"), [$this, "\171\141\163\153\171\x77\x75\153\x61\163\153\163\x6b\153\x63\165"], 20)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6d\x65\x74\x61\144\x61\164\141\x5f\x75\x70\144\141\x74\x65\x5f\x72\x61\164\151\156\147"), [$this, "\147\163\161\157\163\147\155\x79\153\x77\147\143\x71\147\171\x63"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6d\x65\164\141\x64\141\164\141\137\x73\164\141\164\137\165\x70\x64\141\x74\x65\137\x72\x61\x74\151\x6e\147"), [$this, "\163\x6b\165\x6f\x63\171\171\171\153\x6f\151\163\167\163\x63\171"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\147\145\x74\137\x70\157\163\x74\163\137\x62\x79\x5f\162\x61\164\x65"), [$this, "\155\x6b\165\157\165\x6f\157\157\141\143\147\x79\147\x63\157\147"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw(self::aiucyqocowoqgciy . "\x67\x65\x74\x5f\x70\x6f\160\165\x6c\141\162\x5f\160\x6f\163\x74\163"), [$this, "\155\153\165\x6f\165\x6f\x6f\x6f\141\x63\x67\x79\x67\x63\x6f\147"], 10, 2); } public function iemaakgqgqosiecm() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto qgoiooayqmqqsiok; } if (ManipulateQuery::eewqyocggsagyuis()) { goto qiaqsassksqiuyae; } Model::symcgieuakksimmu(); Setting::symcgieuakksimmu(); goto qogqewiwmwiwskgm; qiaqsassksqiuyae: Asset::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); qogqewiwmwiwskgm: goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: Ajax::symcgieuakksimmu(); qwigomakwmyiwkgo: } public function yaskywukaskskkcu($ooiewiwkegguusum = []) : array { $ooiewiwkegguusum["\162\141\x74\x69\x6e\x67"] = __("\122\141\164\x69\156\147", PR__MDL__RATING); return $ooiewiwkegguusum; } public function gsqosgmykwgcqgyc($ugugimquukqwogge, $post) { if (!($ugugimquukqwogge instanceof Metadata && ($mcieuoqmagekmouk = Rate::symcgieuakksimmu()))) { goto asmecuqiyyswueqe; } $qqyuqswckkcomeak = $mcieuoqmagekmouk->qooeaookuemoqecm([], $post); $gaeqamemwmwsyukm = ManipulateArray::get($qqyuqswckkcomeak, self::qiyqwyiiwykeccmo); $wiiqgewkwwkaukyo = ManipulateArray::get($qqyuqswckkcomeak, self::yewgggaqoacewaai); if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto myoicgcuugciueis; } $qqyuqswckkcomeak = sprintf(__("\45\x73\x20\x6f\146\40\45\x73\x20\x25\163", PR__MDL__RATING), $this->msywmyaoqmaegsuy($wiiqgewkwwkaukyo), $this->msywmyaoqmaegsuy(5), ManipulateHTML::gmqyuaqwgiayskei("\x28{$this->msywmyaoqmaegsuy($gaeqamemwmwsyukm)}\x29", ["\x63\x6c\x61\163\x73" => "\155\x72\55\x31"])); $ugugimquukqwogge->jyumyyugiwwiqomk(999)->iygyugseyaqwywyg($qqyuqswckkcomeak)->saemoowcasogykak(IconInterface::asaomwmaicuoeekg); myoicgcuugciueis: asmecuqiyyswueqe: return $ugugimquukqwogge; } public function skuocyyykoiswscy($awmkgwkewqigsgsg, $useksmwkuswkwcqg = self::mswoacegomcucaik) { if (!($awmkgwkewqigsgsg instanceof Meta && ($mcieuoqmagekmouk = Rate::symcgieuakksimmu()))) { goto cuykwgmswkskqkyi; } $qqyuqswckkcomeak = $mcieuoqmagekmouk->wmuimigkswkqsgmi($useksmwkuswkwcqg); $gaeqamemwmwsyukm = ManipulateArray::get($qqyuqswckkcomeak, self::qiyqwyiiwykeccmo); $wiiqgewkwwkaukyo = ManipulateArray::get($qqyuqswckkcomeak, "\141\x76\x65\x72\141\147\145"); if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto csscmcacoikwsecs; } $awmkgwkewqigsgsg->saemoowcasogykak(IconInterface::wieeamqomamwgucs)->iygyugseyaqwywyg(round($wiiqgewkwwkaukyo, 1))->jyumyyugiwwiqomk(999); csscmcacoikwsecs: cuykwgmswkskqkyi: return $awmkgwkewqigsgsg; } public function mkuouoooacgygcog(array $wyoiwuqokyeeuguk = [], array $ywmkwiwkosakssii = []) : array { if (!($mcieuoqmagekmouk = Rate::symcgieuakksimmu())) { goto kuicqywysciceggs; } $wyoiwuqokyeeuguk = $mcieuoqmagekmouk->syiwgwgkeyykggsy($ywmkwiwkosakssii); kuicqywysciceggs: return $wyoiwuqokyeeuguk; } }
