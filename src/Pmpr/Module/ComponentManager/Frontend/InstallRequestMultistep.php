<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8e4c033d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Frontend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Ajax; use Pmpr\Module\ComponentManager\ComponentManager; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Installation; use Pmpr\Module\ComponentManager\Model\Request; use Pmpr\Module\ComponentManager\Setting; abstract class InstallRequestMultistep extends Multistep { const kucekgcakwigcqiy = self::oksogsuoasasycco . "\163\145\162\151\141\154\x5f\143\x68\x65\x63\153"; const oaiiyoewkkgqawaa = self::oksogsuoasasycco . "\x72\x65\161\165\x69\162\x65\x6d\145\156\164\163"; const qgmeqwomcqikmcas = self::oksogsuoasasycco . "\163\145\x74\165\x70\x5f\x69\156\146\x6f\162\x6d\141\x74\151\157\x6e"; public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk($qqscaoyqikuyeoaw); $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $emssaqsyeiqeeiqa = "\143\x6f\155\x70\x6f\156\x65\156\164\137\x6d\x61\156\x61\147\145\x72\137\x69\x6e\x73\164\x61\154\x6c\x5f\162\145\161\x75\x65\x73\x74\x5f\x25\163\137\x66\x69\x65\x6c\144\x73"; switch ($qqscaoyqikuyeoaw) { case self::kucekgcakwigcqiy: $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->cwiuiiakukcsaakw(Constants::ocwsuwyiiasigqaa)->iygyugseyaqwywyg($this->iaueessccuucgisw()), $gusoaiguqeaommcc->ymuegqgyuagyucws(Installation::sukyayoieioyymka)->kyiucygqsgequoys(__("\123\x65\x74\x75\160\40\x53\x65\x72\x69\141\154", PR__MDL__COMPONENT_MANAGER))->qigsyyqgewgskemg("\164\x65\x78\x74\x2d\143\x65\156\x74\145\162")->jyumyyugiwwiqomk(0)->kqqqugemmqagucuq()->lgwgcswaocouiuik(7, 7), $gusoaiguqeaommcc->qoeiescseggagsqs("\143\x68\x65\143\x6b\137\x73\x65\162\x69\x61\154")->gswweykyogmsyawy(__("\103\150\x65\x63\x6b\x20\x53\145\162\x69\x61\x6c", PR__MDL__COMPONENT_MANAGER))->qigsyyqgewgskemg("\155\x61\151\x6e\55\141\x63\164\x69\157\156\x20\x62\x74\156\55\142\154\157\x63\153")->qiqckusosoksgaua()->jyumyyugiwwiqomk(999)]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou(sprintf($emssaqsyeiqeeiqa, "\x63\x68\145\143\153\137\163\x65\162\x69\x61\x6c"), $ikgwqyuyckaewsow); $qookweymeqawmcwo[Constants::ymckmcsiymwqucoq] = $gusoaiguqeaommcc->ywoasuyoaicwqqsu($ikgwqyuyckaewsow); goto wsesqmcqoiyyqkqi; case self::oaiiyoewkkgqawaa: $qookweymeqawmcwo[Constants::qwumqqyuasyskkkc] = Component::symcgieuakksimmu()->usesgqgqsgskkesi($this->iaueessccuucgisw()); $qookweymeqawmcwo["\147\165\151\144\x65\137\164\x65\170\x74"] = __("\x47\165\x69\x64\x65", PR__MDL__COMPONENT_MANAGER); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->wcwmusaouiqaqeww("\143\x6f\156\146\x69\x72\155\141\164\x69\157\156")->gswweykyogmsyawy(__("\x41\x6c\x6c\x20\x74\x68\145\x20\141\x62\x6f\x76\145\40\x69\x74\x65\155\x73\40\141\162\145\x20\x61\166\141\151\x6c\x61\142\x6c\x65\x20\141\156\x64\x20\111\40\141\155\40\x72\x65\x61\x64\x79\40\x66\157\162\x20\164\x68\x65\40\151\x6e\x73\164\141\x6c\x6c\141\164\151\157\156", PR__MDL__COMPONENT_MANAGER))]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou(sprintf($emssaqsyeiqeeiqa, "\162\145\161\165\151\162\145\x6d\145\x6e\x74\163"), $ikgwqyuyckaewsow); $qookweymeqawmcwo[Constants::ymckmcsiymwqucoq] = $gusoaiguqeaommcc->ywoasuyoaicwqqsu($ikgwqyuyckaewsow); goto wsesqmcqoiyyqkqi; case self::qgmeqwomcqikmcas: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__("\x53\x69\x74\x65\40\x54\x65\143\150\156\x69\x63\x61\x6c\40\x41\x73\x73\x69\x73\164\x61\x6e\164", PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Request::moyywwqyaokwoagk)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x46\x75\x6c\154\40\116\x61\x6d\x65", PR__MDL__COMPONENT_MANAGER))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(Request::samkssymmeowamew)->smigkcmumwkgamkk()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x4d\157\142\x69\x6c\145", PR__MDL__COMPONENT_MANAGER))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Request::scawmcmqeimiwoqw)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\101\x6e\163\167\145\162\151\156\x67\x20\x4d\x65\x74\x68\157\x64", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($kueeocmceokoouqa->uqeoyqiwywwmsiew(Request::scawmcmqeimiwoqw)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Request::yayssowawieuycme)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\101\x6e\163\x77\145\162\151\x6e\147\x20\104\141\x79\163", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($kueeocmceokoouqa->uqeoyqiwywwmsiew(Request::yayssowawieuycme)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Request::sauuqekecqkcamwg)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x41\x6e\163\167\x65\x72\151\156\x67\40\110\x6f\x75\x72\x73", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($kueeocmceokoouqa->uqeoyqiwywwmsiew(Request::sauuqekecqkcamwg)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)), $gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__("\114\157\147\151\156\40\164\157\x20\x57\157\x72\x64\160\x72\145\x73\163\x20\101\x64\x6d\x69\x6e\40\x50\x61\156\145\154", PR__MDL__COMPONENT_MANAGER))->cuomeiwckekemywm(__("\117\165\x72\x20\x65\170\x70\145\162\164\x73\40\156\145\145\144\x20\164\157\x20\154\x6f\x67\40\x69\156\40\x74\157\x20\x74\150\145\40\x57\157\162\144\x50\x72\145\163\163\40\155\x61\156\x61\x67\x65\155\x65\x6e\x74\x20\x70\141\x6e\x65\154\x20\x6f\x66\x20\171\x6f\165\x72\40\163\x69\x74\145\x20\164\157\40\x69\156\x73\x74\141\x6c\x6c\x20\141\156\x64\x20\141\144\x6a\165\x73\164\x20\x74\150\145\x20\163\x70\x65\145\144\x20\151\156\143\162\145\141\x73\145\x20\x6d\157\144\x75\154\x65\x2e\40\106\x6f\162\40\x74\x68\151\163\40\x70\165\162\x70\157\163\x65\x2c\40\143\x72\145\141\x74\145\x20\x61\40\x74\x65\155\160\157\x72\141\162\171\x20\x75\163\x65\x72\40\x77\x69\x74\150\40\x74\x68\145\40\141\x63\143\145\163\x73\x20\154\x65\166\145\154\40\x6f\x66\x20\x74\x68\x65\40\x67\145\156\x65\x72\x61\x6c\40\x6d\141\156\x61\147\145\x72\40\x61\156\144\40\x65\156\164\x65\x72\x20\151\x74\163\x20\x69\x6e\x66\157\162\x6d\x61\x74\x69\x6f\156\40\151\x6e\40\x74\150\145\x20\146\157\x72\x6d\40\x62\145\x6c\x6f\x77\56\40\x41\146\164\145\162\40\143\157\x6d\x70\x6c\145\164\x69\156\147\x20\x74\150\x65\x20\151\x6e\x73\164\141\x6c\154\x61\164\x69\157\x6e\40\x61\156\x64\40\x73\x65\x74\165\x70\x20\x70\x72\157\143\x65\163\x73\54\40\x79\x6f\x75\40\143\x61\156\x20\144\145\x6c\x65\164\x65\x20\164\150\x65\x20\x6d\x65\156\164\x69\157\156\145\144\x20\x75\163\x65\162\40\157\x72\40\x72\145\x64\x75\143\145\40\x69\x74\x73\40\141\x63\143\x65\163\x73\x20\x6c\145\166\x65\x6c\40\x74\157\40\x73\165\142\163\143\x72\x69\x62\145\x72\x2e", PR__MDL__COMPONENT_MANAGER), Constants::smkwuwawwaqyimcq, false, ["\x63\x6c\x61\x73\163\x65\x73" => "\x74\x65\170\164\55\152\x75\163\x74\x69\146\171"]), $gusoaiguqeaommcc->ymuegqgyuagyucws(Request::ayeakwcweywoyqyc)->eyygsasuqmommkua("\x77\x70\55\141\x64\x6d\151\x6e")->kqqqugemmqagucuq()->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\101\x64\x6d\151\156\x20\105\156\x64\160\157\151\x6e\x74", PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->kqqqugemmqagucuq()->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x55\x73\x65\x72\x6e\141\x6d\x65", PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->kqqqugemmqagucuq()->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\120\x61\x73\163\167\x6f\x72\x64", PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->uouyygwcgsmygaee(Constants::eqkeooqcsscoggia)->gswweykyogmsyawy(__("\116\145\143\x65\x73\163\141\162\x79\40\105\x78\160\154\x61\156\x61\164\x69\157\156\x73", PR__MDL__COMPONENT_MANAGER))->cuomeiwckekemywm(__("\x46\x6f\x72\x20\145\170\x61\x6d\x70\x6c\145\54\x20\164\150\x65\40\x61\143\x74\151\166\x61\x74\x69\157\x6e\x20\x6f\146\x20\x32\106\x41\40\157\162\40\x74\150\x65\40\x6e\x65\x65\144\x20\x74\x6f\x20\x65\156\164\145\x72\40\x77\x69\x74\150\x20\x61\x6e\x20\x49\162\x61\156\x69\x61\156\x20\x49\120\40\x6f\x72\x20\x61\x6e\171\x20\164\x79\160\x65\40\157\146\x20\x69\x6e\x66\157\x72\155\x61\x74\151\x6f\x6e\40\141\x6e\144\x20\162\145\161\165\151\162\x65\x6d\145\x6e\x74\x73\40\146\157\162\x20\x73\x75\143\x63\145\163\x73\x66\x75\x6c\x20\x65\x6e\164\162\x79\56", PR__MDL__COMPONENT_MANAGER), Constants::smkwuwawwaqyimcq, false, ["\x63\154\141\x73\x73\145\x73" => "\x74\145\x78\164\55\x6a\165\163\164\151\x66\171"])]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou(sprintf($emssaqsyeiqeeiqa, "\x73\145\x74\165\x70\x5f\151\x6e\x66\157\162\155\141\x74\x69\157\156"), $ikgwqyuyckaewsow); $qookweymeqawmcwo[Constants::ymckmcsiymwqucoq] = $gusoaiguqeaommcc->ywoasuyoaicwqqsu($ikgwqyuyckaewsow); goto wsesqmcqoiyyqkqi; case self::kgmkeaoiugsyyeys: $qookweymeqawmcwo[Constants::eoskkkieowogacws] = sprintf("\45\x73\74\x62\162\76\74\x62\162\x3e\45\x73\74\142\x72\x3e\74\142\162\x3e\45\163", __("\127\145\40\150\x61\x76\145\x20\162\145\x63\145\x69\x76\x65\x64\x20\x74\150\145\x20\162\145\161\165\145\x73\x74\40\x74\157\x20\151\156\x73\164\141\154\154\x20\x74\150\x65\x20\x73\x70\145\x65\144\40\151\156\x63\x72\x65\141\163\145\40\155\157\x64\165\x6c\145\40\146\157\162\40\x79\157\x75\162\x20\x57\x6f\x72\x64\120\x72\x65\163\x73\40\163\x69\x74\x65\x2e", PR__MDL__COMPONENT_MANAGER), __("\117\x75\x72\40\145\170\160\x65\x72\x74\163\x20\167\x69\x6c\x6c\x20\163\164\x61\x72\x74\x20\x74\x68\145\40\160\162\157\143\145\163\163\40\157\x66\x20\151\156\163\164\141\154\x6c\x69\156\x67\40\x61\156\144\40\141\x64\152\x75\x73\164\151\x6e\x67\40\x74\150\x65\40\x6d\157\x64\x75\x6c\145\40\x69\156\40\x74\x68\145\40\x6e\x65\x78\164\40\146\x65\167\40\x68\157\x75\x72\x73\40\141\x6e\x64\40\167\x69\154\x6c\40\142\x65\x20\151\x6e\40\143\x6f\156\164\141\x63\x74\x20\167\151\164\x68\x20\x79\157\x75\162\40\164\x65\143\150\156\151\143\141\154\40\x65\170\x70\145\162\164\x20\151\x66\x20\x6e\x65\x65\x64\x65\144\56", PR__MDL__COMPONENT_MANAGER), Setting::symcgieuakksimmu()->iwgmiyoaskssmosa()); goto wsesqmcqoiyyqkqi; } mogkoocsoeuyoqqa: wsesqmcqoiyyqkqi: return $qookweymeqawmcwo; } public function enqueue() { if (!($gaumukogkkgkiiuo = ComponentManager::symcgieuakksimmu()->miocmcoykayoyyau())) { goto wkwamkgkwykeqkec; } $gaumukogkkgkiiuo->ieayqiyiuuguowyq(Constants::eoskkkieowogacws, ["\145\155\x70\164\171\x5f\x73\x65\x72\151\x61\154" => __("\x54\150\145\40\x73\x65\162\x69\x61\x6c\40\156\165\x6d\x62\x65\x72\x20\x66\151\145\154\x64\x20\143\x61\x6e\x6e\157\x74\x20\x62\145\x20\145\x6d\x70\164\x79\x2e", PR__MDL__COMPONENT_MANAGER), "\163\145\x72\x69\x61\x6c\137\156\157\164\x5f\166\x61\x6c\151\x64" => __("\x54\x68\x65\40\x73\x65\x72\151\141\154\x20\x6e\165\x6d\142\x65\162\x20\145\x6e\164\145\x72\145\x64\x20\x69\x73\40\x6e\x6f\x74\x20\166\141\x6c\x69\x64\x2e\x20\x50\x6c\x65\141\163\145\x20\x65\156\x74\145\x72\40\x61\x20\166\141\154\x69\x64\40\163\x65\162\x69\x61\154\x20\x6e\x75\155\x62\145\162\x2e", PR__MDL__COMPONENT_MANAGER), "\143\x68\145\143\153\x5f\143\x6f\156\146\151\162\155\141\x74\151\x6f\x6e" => __("\x43\150\x65\143\x6b\x20\x72\145\x71\x75\151\162\145\x6d\145\x6e\x74\163\40\x63\157\x6e\146\151\162\155\141\x74\x69\x6f\156\x2e", PR__MDL__COMPONENT_MANAGER), "\x63\x68\145\143\153\x5f\x73\145\162\151\141\154\137\x66\151\x72\163\x74" => __("\x50\x6c\145\141\163\145\40\151\156\163\x65\x72\x74\40\163\x65\x72\151\x61\x6c\x20\164\x6f\40\143\150\145\x63\x6b\40\171\x6f\165\162\40\x72\145\x71\165\145\163\x74\56", PR__MDL__COMPONENT_MANAGER), "\146\x69\154\154\x5f\162\x65\161\x75\151\162\145\144\137\x66\151\x65\154\x64\x73" => __("\x50\x6c\x65\141\163\145\40\x66\x69\154\154\40\162\145\x71\x75\151\162\x65\x64\x20\146\x69\x65\x6c\x64\163\x2e", PR__MDL__COMPONENT_MANAGER), "\x61\x63\x63\x65\x70\x74\x5f\x74\145\x72\x6d\x73\x5f\x6f\x66\x5f\165\163\x65\137\146\x69\x72\x73\x74" => __("\x50\154\145\x61\x73\145\x20\141\143\143\x65\x70\164\x20\164\x65\162\x6d\163\40\157\x66\x20\x75\163\x65\x20\146\x69\162\163\x74\56", PR__MDL__COMPONENT_MANAGER)])->ieayqiyiuuguowyq(Constants::gueokgaoyascgeqe, [Constants::ckumcckgkuuygwkg => ["\162\145\x71\165\x69\x72\x65\x64" => __("\146\151\x65\154\144\40\143\x61\156\x20\x6e\157\164\40\142\x65\x20\x65\155\160\x74\171\56", PR__MDL__COMPONENT_MANAGER)]])->ieayqiyiuuguowyq(Constants::wyucqaeuuqkesque, Ajax::ugaesemqyyeiqaki); $gaumukogkkgkiiuo->oeoquuwkoywiuesy($gaumukogkkgkiiuo->owygwqwawqoiusis("\x69\x6e\163\x74\141\154\x6c\137\x72\145\161\165\145\x73\x74\x5f\155\165\154\164\151\163\164\x65\x70", $gaumukogkkgkiiuo->get("\x69\x6e\x73\x74\141\154\x6c\137\162\x65\161\x75\x65\163\x74\x5f\x6d\165\154\164\151\x73\x74\145\x70\x2e\x6a\163"))->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); wkwamkgkwykeqkec: parent::enqueue(); } public function oqcaaiewkewqgoww() : array { $asuggasaseaacmqu = parent::oqcaaiewkewqgoww(); return array_merge([self::kucekgcakwigcqiy => ["\x63\154\x61\x73\x73" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::qyceyememkgewwgc, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\103\x68\x65\143\153\x20\123\x65\164\x75\160\x20\x53\x65\x72\x69\x61\154", PR__MDL__COMPONENT_MANAGER), Constants::eqkeooqcsscoggia => __("\125\163\x65\x72\40\x73\x68\157\x75\x6c\x64\40\151\156\x73\145\x72\164\40\x68\151\163\57\150\145\162\40\x73\145\x74\x75\x70\40\163\x65\162\151\x61\x6c\x2e", PR__MDL__COMPONENT_MANAGER)], Constants::kekcgssiyagioocg => 10], self::oaiiyoewkkgqawaa => ["\x63\x6c\x61\163\163" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::imoykkmkkkaqgouo, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\x53\150\157\x77\40\x52\x65\161\x75\151\x72\x65\155\x65\156\164\163", PR__MDL__COMPONENT_MANAGER), Constants::eqkeooqcsscoggia => __("\x53\150\157\x77\40\163\x65\164\x75\x70\x20\162\145\x71\165\151\x72\x65\155\145\156\164\x73\x20\164\x6f\40\165\163\x65\162\x2e", PR__MDL__COMPONENT_MANAGER)], Constants::kekcgssiyagioocg => 20], self::qgmeqwomcqikmcas => ["\x63\154\x61\163\x73" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::mgkgqisegywmguem, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\x53\x65\164\165\x70\40\122\145\x71\165\x69\162\145\144\x20\151\156\x66\157\162\x6d\141\x74\x69\157\x6e", PR__MDL__COMPONENT_MANAGER), Constants::eqkeooqcsscoggia => __("\125\x73\x65\162\40\163\150\x6f\x75\154\144\x20\x67\151\x76\145\x20\150\151\x73\x2f\x68\x65\162\40\x73\151\x74\x65\x73\40\x72\x65\x71\x75\x69\162\145\155\x65\156\x74\x73\56", PR__MDL__COMPONENT_MANAGER)], Constants::kekcgssiyagioocg => 30]], $asuggasaseaacmqu); } }
