<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62828f0640562             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Packagist; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\ComponentManager\Container; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Setting; abstract class Common extends Container { public function qukmmaaeooggqcao(&$wksoawcgagcgoask) : bool { $meywaqqsugaoeyys = Component::symcgieuakksimmu(); if (is_object($wksoawcgagcgoask)) { goto myoicgcuugciueis; } $wksoawcgagcgoask = $meywaqqsugaoeyys->akkkoiiymmamsauc($wksoawcgagcgoask, $meywaqqsugaoeyys->kumuygiiqswoyasy()); myoicgcuugciueis: $aokagokqyuysuksm = $meywaqqsugaoeyys->keeuqgyooycqoygw($wksoawcgagcgoask); $ymqmyyeuycgmigyo = $meywaqqsugaoeyys->qogaqkcsogcqiaic($wksoawcgagcgoask, $meywaqqsugaoeyys::NAME); $suckquwcuiuyiogc = []; if (!($aokagokqyuysuksm && $ymqmyyeuycgmigyo)) { goto sciwggaeogcoesiu; } $icwicymcioeyeyek = API::symcgieuakksimmu()->gqaesauawkicekmw($ymqmyyeuycgmigyo); $mkyieiggiwcikuqw = ManipulateArray::get($icwicymcioeyeyek, "\x75\x70\x64\x61\164\145"); $wakagwuasqkaekky = ManipulateArray::get($icwicymcioeyeyek, "\166\145\x72\x73\x69\157\x6e"); if (!$wakagwuasqkaekky) { goto cuykwgmswkskqkyi; } $oceoeyaeucyymkao = $meywaqqsugaoeyys->qogaqkcsogcqiaic($wksoawcgagcgoask, $meywaqqsugaoeyys::auugqowqueaocgsu); if (!(!$oceoeyaeucyymkao || version_compare($oceoeyaeucyymkao, $wakagwuasqkaekky, "\x21\x3d"))) { goto asmecuqiyyswueqe; } $suckquwcuiuyiogc[$meywaqqsugaoeyys::auugqowqueaocgsu] = $wakagwuasqkaekky; asmecuqiyyswueqe: $ukoqeuomuyckauie = $meywaqqsugaoeyys->qogaqkcsogcqiaic($wksoawcgagcgoask, $meywaqqsugaoeyys::yegaaaygeimasokq); if (!($mkyieiggiwcikuqw && (!$ukoqeuomuyckauie || isset($suckquwcuiuyiogc[$meywaqqsugaoeyys::auugqowqueaocgsu])))) { goto csscmcacoikwsecs; } $suckquwcuiuyiogc[$meywaqqsugaoeyys::yegaaaygeimasokq] = $mkyieiggiwcikuqw; csscmcacoikwsecs: cuykwgmswkskqkyi: $aoqiksscgmooieem = ManipulateArray::get($icwicymcioeyeyek, "\144\157\x77\x6e\154\157\141\144\x73"); if (!($aoqiksscgmooieem > 0)) { goto kuicqywysciceggs; } $suckquwcuiuyiogc[$meywaqqsugaoeyys::keqoqmmgsiegwskg] = $aoqiksscgmooieem; kuicqywysciceggs: if (!$suckquwcuiuyiogc) { goto mkwskuycuyguqqok; } $wksoawcgagcgoask = (array) $wksoawcgagcgoask; $wksoawcgagcgoask = ManipulateArray::set($wksoawcgagcgoask, $suckquwcuiuyiogc); $meywaqqsugaoeyys->gscuuyuyauokoyuo($wksoawcgagcgoask, true); mkwskuycuyguqqok: sciwggaeogcoesiu: return !empty($suckquwcuiuyiogc); } public function cwkssacawosuyaou() : bool { return (bool) $this->weysguygiseoukqw(Setting::gyicmcewygamwoog, false); } public function aouggyimamegueko($cwwowqyuwccuykom = false) { if (!($cwwowqyuwccuykom || $this->cwkssacawosuyaou())) { goto sqiciiuwmykocycc; } if (!($meywaqqsugaoeyys = Component::symcgieuakksimmu())) { goto iomcaiwewsawiamu; } $akyegyesmqqqgmwg = $this->weysguygiseoukqw(Setting::kokgyiugagmkcyay, 10); if (!($mqkkuqaimswumeww = $meywaqqsugaoeyys->kasiqqyyaswsgics())) { goto kiqogmwcgcamwiig; } foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { if (!($akyegyesmqqqgmwg > 0 && $this->qukmmaaeooggqcao($wksoawcgagcgoask))) { goto yowsmsiyimmimemc; } sleep((int) $akyegyesmqqqgmwg); yowsmsiyimmimemc: kwagwqyusyiyoaqs: } eqkauqciwewmgeoi: kiqogmwcgcamwiig: iomcaiwewsawiamu: sqiciiuwmykocycc: } }
