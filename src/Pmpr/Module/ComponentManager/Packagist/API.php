<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bb4668f0b11             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Packagist; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class API extends BaseClass { public function gqaesauawkicekmw($wksoawcgagcgoask) : array { $aiieyweysaukqemc = $this->oyeiaogoouiwuoso($wksoawcgagcgoask); $quowyokcwswmuois = $this->sikkwymcwiscsokq($aiieyweysaukqemc); $koyiaasmkaiqokac = []; if (!(is_array($quowyokcwswmuois) && $quowyokcwswmuois)) { goto owuuuiekkaeoeacq; } $koyiaasmkaiqokac = reset($quowyokcwswmuois); owuuuiekkaeoeacq: $qwcmueausqgiwigy = $this->ysqksgcoyccgsuam($aiieyweysaukqemc); return ["\x75\x70\144\x61\x74\145" => ManipulateArray::get($koyiaasmkaiqokac, "\164\x69\155\145"), "\166\x65\162\163\x69\x6f\x6e" => ManipulateArray::get($koyiaasmkaiqokac, "\166\x65\162\163\151\x6f\x6e"), "\144\157\167\156\x6c\x6f\141\x64\163" => ManipulateArray::get($qwcmueausqgiwigy, "\144\157\167\156\x6c\x6f\141\x64\x73", 0)]; } private function ysqksgcoyccgsuam($aiieyweysaukqemc) : array { $ksiyqouuaoymsycg = []; $this->ksiyskmggywgsayu("\161", "\x5b{$aiieyweysaukqemc}\135", true); $keccaugmemegoimu = $this->get("\x68\x74\164\x70\163\x3a\x2f\57\160\141\143\x6b\x61\x67\151\163\x74\x2e\x6f\162\147\x2f\163\145\x61\162\143\150\56\152\x73\x6f\156"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto qwemkcoaseywkuuc; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuwmqqqiwksuaise = ManipulateArray::get($sogksuscggsicmac, "\164\x6f\164\141\154", 0); if (!($uuwmqqqiwksuaise == 1)) { goto saauykgakaeiyoua; } $ykmaagygyauiamou = ManipulateArray::get($sogksuscggsicmac, "\162\x65\x73\165\154\x74\163", []); $ksiyqouuaoymsycg = ManipulateArray::get($ykmaagygyauiamou, 0, []); saauykgakaeiyoua: qwemkcoaseywkuuc: return $ksiyqouuaoymsycg; } private function sikkwymcwiscsokq($aiieyweysaukqemc) : array { $quowyokcwswmuois = []; $keccaugmemegoimu = $this->get("\150\164\164\160\x73\72\x2f\57\162\x65\160\157\x2e\x70\x61\143\153\141\x67\x69\163\x74\x2e\x6f\162\x67\x2f\160\62\x2f{$aiieyweysaukqemc}\x2e\x6a\163\x6f\x6e"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto kwyimqumkuuyaiku; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuskcymsqowqgkyo = ManipulateArray::get($sogksuscggsicmac, "\x70\141\x63\x6b\x61\147\x65\163", []); if (!($uuskcymsqowqgkyo && isset($uuskcymsqowqgkyo[$aiieyweysaukqemc]))) { goto mqimkwickkgqqeoi; } $quowyokcwswmuois = $uuskcymsqowqgkyo[$aiieyweysaukqemc]; mqimkwickkgqqeoi: kwyimqumkuuyaiku: return $quowyokcwswmuois; } private function oyeiaogoouiwuoso($wksoawcgagcgoask) : string { $uomewyckeuqoqocu = explode("\55", $wksoawcgagcgoask); $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1)); return "\160\155\160\x72\x2d{$sqeykgyoooqysmca}\x2f{$wksoawcgagcgoask}"; } }
