<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a1dc2a6f4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Packagist; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\ComponentManager\Container; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Setting; abstract class Common extends Container { public function qukmmaaeooggqcao(&$wksoawcgagcgoask) : bool { $meywaqqsugaoeyys = Component::symcgieuakksimmu(); if (is_object($wksoawcgagcgoask)) { goto foeeqckqsyockkak; } $wksoawcgagcgoask = $meywaqqsugaoeyys->akkkoiiymmamsauc($wksoawcgagcgoask, $meywaqqsugaoeyys->kumuygiiqswoyasy()); foeeqckqsyockkak: $aokagokqyuysuksm = $meywaqqsugaoeyys->keeuqgyooycqoygw($wksoawcgagcgoask); $ymqmyyeuycgmigyo = $meywaqqsugaoeyys->qogaqkcsogcqiaic($wksoawcgagcgoask, $meywaqqsugaoeyys::NAME); $suckquwcuiuyiogc = []; if (!($aokagokqyuysuksm && $ymqmyyeuycgmigyo)) { goto uguigkcmukuouway; } $icwicymcioeyeyek = API::symcgieuakksimmu()->gqaesauawkicekmw($ymqmyyeuycgmigyo); $mkyieiggiwcikuqw = ManipulateArray::get($icwicymcioeyeyek, "\x75\160\144\x61\x74\145"); $wakagwuasqkaekky = ManipulateArray::get($icwicymcioeyeyek, "\x76\x65\162\x73\151\x6f\156"); if (!$wakagwuasqkaekky) { goto kymkucucyeoeikim; } $oceoeyaeucyymkao = $meywaqqsugaoeyys->qogaqkcsogcqiaic($wksoawcgagcgoask, $meywaqqsugaoeyys::auugqowqueaocgsu); if (!(!$oceoeyaeucyymkao || version_compare($oceoeyaeucyymkao, $wakagwuasqkaekky, "\x21\x3d"))) { goto iekumemscwieugqw; } $suckquwcuiuyiogc[$meywaqqsugaoeyys::auugqowqueaocgsu] = $wakagwuasqkaekky; iekumemscwieugqw: $ukoqeuomuyckauie = $meywaqqsugaoeyys->qogaqkcsogcqiaic($wksoawcgagcgoask, $meywaqqsugaoeyys::yegaaaygeimasokq); if (!($mkyieiggiwcikuqw && (!$ukoqeuomuyckauie || isset($suckquwcuiuyiogc[$meywaqqsugaoeyys::auugqowqueaocgsu])))) { goto hoeeyiowekaeemko; } $suckquwcuiuyiogc[$meywaqqsugaoeyys::yegaaaygeimasokq] = $mkyieiggiwcikuqw; hoeeyiowekaeemko: kymkucucyeoeikim: $aoqiksscgmooieem = ManipulateArray::get($icwicymcioeyeyek, "\x64\157\x77\x6e\x6c\x6f\x61\144\x73"); if (!($aoqiksscgmooieem > 0)) { goto usquiuuyiyqaeyiu; } $suckquwcuiuyiogc[$meywaqqsugaoeyys::keqoqmmgsiegwskg] = $aoqiksscgmooieem; usquiuuyiyqaeyiu: if (!$suckquwcuiuyiogc) { goto qicwaskssogcokgm; } $wksoawcgagcgoask = (array) $wksoawcgagcgoask; $wksoawcgagcgoask = ManipulateArray::set($wksoawcgagcgoask, $suckquwcuiuyiogc); $meywaqqsugaoeyys->gscuuyuyauokoyuo($wksoawcgagcgoask, true); qicwaskssogcokgm: uguigkcmukuouway: return !empty($suckquwcuiuyiogc); } public function aouggyimamegueko() { $meywaqqsugaoeyys = Component::symcgieuakksimmu(); $akyegyesmqqqgmwg = $this->weysguygiseoukqw(Setting::ueacouoammwicukq, 10); $mqkkuqaimswumeww = $meywaqqsugaoeyys->kasiqqyyaswsgics(); if (!$mqkkuqaimswumeww) { goto suqkuqygkkgwyaie; } foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { if (!$this->qukmmaaeooggqcao($wksoawcgagcgoask)) { goto aegysmeecgcgayyw; } if (!($akyegyesmqqqgmwg > 0)) { goto gaomwagkcciesyqy; } sleep(intval($akyegyesmqqqgmwg)); gaomwagkcciesyqy: aegysmeecgcgayyw: esuiysskoweawsue: } uqqaiagaeqgqgaiy: suqkuqygkkgwyaie: } }
