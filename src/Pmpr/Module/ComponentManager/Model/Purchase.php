<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ac6505cb23             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\Domain; class Purchase extends Common { const qkmqmaeuyokqgemg = "\144\157\155\141\151\156" . self::mswocgcucqoaesaa; const okkqqmwseqscceye = "\x6c\x69\x63\x65\156\163\x65\x5f\153\145\171"; const ogqcgemayqiaucag = self::ocwsuwyiiasigqaa . self::mswocgcucqoaesaa; const iokaqiawqysgywok = 16; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconInterface::uammswcqyiyquigw)->ckaeqgiaiqwsccke(10)->guiaswksukmgageq(__("\120\x75\162\x63\x68\141\x73\145", PR__MDL__COMPONENT_MANAGER))->muuwuqssqkaieqge(__("\120\x75\x72\x63\150\x61\x73\x65\x73", PR__MDL__COMPONENT_MANAGER))->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->eoaomaokwkwqyqiq(self::qkmqmaeuyokqgemg)->uwmyqckcyamwaiww(Domain::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\104\x6f\155\141\x69\156", PR__MDL__COMPONENT_MANAGER)), $this->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->uwmyqckcyamwaiww(Component::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\x43\x6f\x6d\160\157\156\145\156\x74", PR__MDL__COMPONENT_MANAGER)), $this->geqyygqiwiqusekc(self::yuqaqwkmmeuawswk)->gswweykyogmsyawy(__("\x4f\x72\x64\x65\x72\40\111\x74\x65\155", PR__MDL__COMPONENT_MANAGER)), $this->usqseiuaeauwuwus(self::okkqqmwseqscceye)->acceqyqygswoecwe(self::iokaqiawqysgywok)->gswweykyogmsyawy(__("\x4c\151\x63\x65\156\x73\x65\40\x4b\145\x79", PR__MDL__COMPONENT_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::qkmqmaeuyokqgemg => ["\143\x6f\154" => "\x6d\144\x2d\66"], self::ogqcgemayqiaucag => ["\x63\x6f\x6c" => "\x6d\144\x2d\x36"]]; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { if (ManipulateQuery::aqwquwewocyewasw()) { goto emqswoaawgeyosmi; } switch ($qgoqiacsiccwoawi) { case self::ogqcgemayqiaucag: if (!($gcswwqwyaccgyoee = Component::symcgieuakksimmu())) { goto yuimwyoywaiiqacs; } $eqgoocgaqwqcimie = $gcswwqwyaccgyoee->acouumccocekeswu($this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig)); yuimwyoywaiiqacs: goto yoqakewookqoqacm; case self::yuqaqwkmmeuawswk: if (!$eqgoocgaqwqcimie) { goto ocywegekakimmwcq; } $eqgoocgaqwqcimie = $this->cqumckukywgkacyo(ManipulateWoocommerce::qusqcuegmmsiguym($eqgoocgaqwqcimie)); ocywegekakimmwcq: goto yoqakewookqoqacm; } gswcoeiisamakwii: yoqakewookqoqacm: goto iwsmmkqaoksmocok; emqswoaawgeyosmi: switch ($qgoqiacsiccwoawi) { case self::qkmqmaeuyokqgemg: if (!($swgwkyqkakceqeia = Domain::symcgieuakksimmu())) { goto uckewycoogsogwiy; } $mokawwccycoiqeka = $this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig, self::NAME); $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); $eqgoocgaqwqcimie = ManipulateHTML::yuawgssgauywkiia($swgwkyqkakceqeia->qogaqkcsogcqiaic($mokawwccycoiqeka, self::NAME), ManipulateServer::oiucukewkckkwiqc("\57\x64\157\x6d\x61\x69\x6e\x2f{$akyiigeggqowmqqq}", self::ismwwqmwgmqqocke)); uckewycoogsogwiy: goto yykqaowwsqgqysmq; case self::ogqcgemayqiaucag: if (!($gcswwqwyaccgyoee = Component::symcgieuakksimmu())) { goto ikuuiauwouuqawuw; } $wksoawcgagcgoask = $gcswwqwyaccgyoee->scqakcemaqsqkema($this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig)); $eqgoocgaqwqcimie = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, ["\x63\x6f\155\x70\x6f\156\145\156\x74\137\164\171\x70\145" => $gcswwqwyaccgyoee->ogegcqqcukiaqscy(self::squoamkioomemiyi, $wksoawcgagcgoask)]); ikuuiauwouuqawuw: } kwiggogcgciwuwqk: yykqaowwsqgqysmq: iwsmmkqaoksmocok: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig = null, bool $suckquwcuiuyiogc = false) : bool { if (!($sogksuscggsicmac = parent::gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig, $suckquwcuiuyiogc))) { goto ikqeeaysmqgcgawq; } if ($suckquwcuiuyiogc) { goto esaqcqqwuussiiwo; } $wqykqusigegasqeg = ManipulateArray::get($icwicymcioeyeyek, self::qkmqmaeuyokqgemg); $syqougokmmgaoaee = ManipulateArray::get($icwicymcioeyeyek, self::ogqcgemayqiaucag); if (!$syqougokmmgaoaee || !$wqykqusigegasqeg) { goto okkmcocqokkskasy; } if ($this->qumqowkwyaceeqwu([self::qkmqmaeuyokqgemg => $wqykqusigegasqeg, self::ogqcgemayqiaucag => $syqougokmmgaoaee])) { goto qiiigwkqeoewsuwm; } goto esikeyqyuikmaiek; okkmcocqokkskasy: $sogksuscggsicmac = false; $this->kmsyisgakgwscyey(__("\104\157\155\x61\151\156\x20\x6f\x72\40\103\x6f\x6d\x70\157\156\145\156\x74\x20\156\157\164\x20\163\x70\x65\143\x69\x66\x69\145\144\x2e", PR__MDL__COMPONENT_MANAGER)); goto esikeyqyuikmaiek; qiiigwkqeoewsuwm: $this->kmsyisgakgwscyey(__("\x50\165\x72\143\150\x61\163\x65\40\167\x69\x74\x68\40\163\145\154\145\x63\164\145\144\x20\144\141\164\141\x20\141\x6c\x72\x65\141\144\x79\40\145\x78\151\x73\x74\x73\x2e", PR__MDL__COMPONENT_MANAGER)); $sogksuscggsicmac = false; esikeyqyuikmaiek: esaqcqqwuussiiwo: ikqeeaysmqgcgawq: return $sogksuscggsicmac; } public function qmqogusoaqeygewm($mksyucucyswaukig) { $hsouuwoeemykcceu = ManipulateArray::get($mksyucucyswaukig, self::okkqqmwseqscceye); if ($hsouuwoeemykcceu) { goto mscgewkcqcoowweg; } ManipulateArray::set($mksyucucyswaukig, [self::okkqqmwseqscceye => $this->cewwsggkmycyiuiu()]); mscgewkcqcoowweg: return parent::qmqogusoaqeygewm($mksyucucyswaukig); } private function cewwsggkmycyiuiu() : string { return ManipulateString::uniqid(self::iokaqiawqysgywok); } }
