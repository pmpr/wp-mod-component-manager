<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622fc954b54fa             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\Packagist; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class API extends BaseClass { public function gqaesauawkicekmw($wksoawcgagcgoask) : array { $aiieyweysaukqemc = $this->oyeiaogoouiwuoso($wksoawcgagcgoask); $quowyokcwswmuois = $this->sikkwymcwiscsokq($aiieyweysaukqemc); $koyiaasmkaiqokac = []; if (!(is_array($quowyokcwswmuois) && $quowyokcwswmuois)) { goto soaccwqimeksgwiw; } $koyiaasmkaiqokac = reset($quowyokcwswmuois); soaccwqimeksgwiw: $qwcmueausqgiwigy = $this->ysqksgcoyccgsuam($aiieyweysaukqemc); return ["\165\x70\144\x61\x74\x65" => ManipulateArray::get($koyiaasmkaiqokac, "\164\151\155\x65"), "\166\x65\162\163\x69\157\x6e" => ManipulateArray::get($koyiaasmkaiqokac, "\166\x65\x72\163\151\x6f\x6e"), "\144\x6f\x77\x6e\154\x6f\x61\144\163" => ManipulateArray::get($qwcmueausqgiwigy, "\144\x6f\167\x6e\x6c\x6f\141\144\x73", 0)]; } private function ysqksgcoyccgsuam($aiieyweysaukqemc) : array { $ksiyqouuaoymsycg = []; $this->ksiyskmggywgsayu("\x71", "\x5b{$aiieyweysaukqemc}\x5d", true); $keccaugmemegoimu = $this->get("\x68\164\x74\160\x73\x3a\x2f\57\160\x61\143\x6b\141\147\x69\x73\164\x2e\x6f\x72\x67\57\163\x65\141\x72\x63\150\56\x6a\163\157\x6e"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto skkamseieeusycye; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuwmqqqiwksuaise = ManipulateArray::get($sogksuscggsicmac, "\164\x6f\x74\x61\154", 0); if (!($uuwmqqqiwksuaise == 1)) { goto wiysogeqqwgioyka; } $ykmaagygyauiamou = ManipulateArray::get($sogksuscggsicmac, "\162\145\163\x75\x6c\x74\x73", []); $ksiyqouuaoymsycg = ManipulateArray::get($ykmaagygyauiamou, 0, []); wiysogeqqwgioyka: skkamseieeusycye: return $ksiyqouuaoymsycg; } private function sikkwymcwiscsokq($aiieyweysaukqemc) : array { $quowyokcwswmuois = []; $keccaugmemegoimu = $this->get("\150\164\164\x70\x73\x3a\57\x2f\x72\x65\x70\x6f\x2e\x70\141\143\x6b\141\x67\151\163\164\56\157\x72\x67\57\160\x32\x2f{$aiieyweysaukqemc}\56\x6a\163\157\x6e"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto syiqkaasoueowwui; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuskcymsqowqgkyo = ManipulateArray::get($sogksuscggsicmac, "\x70\141\143\x6b\x61\x67\145\163", []); if (!($uuskcymsqowqgkyo && isset($uuskcymsqowqgkyo[$aiieyweysaukqemc]))) { goto cgiscsqwwgqqaeqi; } $quowyokcwswmuois = $uuskcymsqowqgkyo[$aiieyweysaukqemc]; cgiscsqwwgqqaeqi: syiqkaasoueowwui: return $quowyokcwswmuois; } private function oyeiaogoouiwuoso($wksoawcgagcgoask) : string { $uomewyckeuqoqocu = explode("\55", $wksoawcgagcgoask); $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1)); return "\160\155\160\x72\55{$sqeykgyoooqysmca}\57{$wksoawcgagcgoask}"; } }
