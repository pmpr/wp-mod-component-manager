<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678aa15347d4f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Frontend\Component\Multistep; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Data\Compare; use Pmpr\Module\ComponentManager\Model\Component; class Setting extends BaseClass { const qwqkccuwkqeoucqu = "\x67\x6f\164\157\137\141\x66\164\145\x72\137\x61\144\x64\137\x74\x6f\137\x63\x61\x72\x74"; const okcgiwmueoyocegm = "\x72\x65\161\x75\x69\x72\x65\x6d\145\156\164\163"; const msuwykmiggyawwok = "\143\x6f\x6e\164\141\x63\164\x5f\x75\163\137\x70\x61\x67\x65"; const mamyakyiqcsmiyae = "\143\157\155\x70\x6f\x6e\145\x6e\x74\137\151\156\x73\164\141\x6c\x6c\141\x74\151\157\156\137\147\165\x69\x64\x65\163"; const yicqiccsyqwigaqa = "\142\141\143\x6b\154\x69\156\153\137"; const oycqkmeykiouqcqo = self::yicqiccsyqwigaqa . Constants::qescuiwgsyuikume; const aaasmysammcocwcu = self::yicqiccsyqwigaqa . Constants::mkousmkiawwousws; const awqewimmscsokykc = self::yicqiccsyqwigaqa . Constants::muocgwgqigscmqow; const aakugisgkoscaeys = self::yicqiccsyqwigaqa . Constants::eqkeooqcsscoggia; const kqykggkcgquswkea = "\160\154\165\147\x69\x6e\137\x67\x75\x69\x64\x65\x5f"; const iwseqweooieakqwk = self::kqykggkcgquswkea . "\146\151\x6c\x65"; const aqusgmmakasqamgq = self::kqykggkcgquswkea . Constants::qescuiwgsyuikume; const wumiomcykccwmgei = self::kqykggkcgquswkea . Constants::gqmuoaykeqeuoukm; const ggswmwomsiccuqwg = self::kqykggkcgquswkea . Constants::eqkeooqcsscoggia; const eyiukesukwwsmyya = "\x70\154\x75\x67\151\x6e\x5f\x74\141\142\x5f"; const agskamgmowaiywus = self::eyiukesukwwsmyya . Constants::qescuiwgsyuikume; const ywgmisckaekgmagi = self::eyiukesukwwsmyya . "\143\x6f\x6d\160\x61\162\x65\x73"; const uckmggyuwgmmskyc = self::eyiukesukwwsmyya . Constants::eqkeooqcsscoggia; const umoycqkiaiqoqaau = "\160\x6c\x75\x67\x69\156\x5f\142\x61\143\x6b\154\151\x6e\x6b\x5f\x6d\157\144\141\154"; const ayygmosqcwyeaagw = "\160\x6d\160\x72\x5f\166\141\x6c\x75\x65"; const eisiyawomcsouiwe = "\167\x6f\x72\144\x70\162\x65\x73\163\137\x76\141\154\x75\145"; const gmquuqmomuaqueyi = "\x63\141\162\164"; const cwswygwykwgsqiwu = "\163\x69\156\x67\154\145"; const qseekcawwuumgacy = "\x63\x68\145\143\153\157\165\x74"; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->hasLicense = false; $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea()); } public function wyyuauosmqoeucmg() { $this->title = __("\103\x6f\x6d\160\x6f\x6e\x65\x6e\164\x20\x4d\x61\156\x61\x67\x65\162\x20\x53\x65\164\164\151\x6e\147", PR__MDL__COMPONENT_MANAGER); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __("\123\145\164\164\151\x6e\147", PR__MDL__COMPONENT_MANAGER)); } public function ykwqaukkycogooii() { $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\143\157\x6d\160\x6f\x6e\x65\156\164\163")->saemoowcasogykak(IconInterface::oweoqccsyyusoqei)->gswweykyogmsyawy(__("\103\157\155\x70\157\x6e\145\x6e\164\163", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\x52\145\x71\165\x69\x72\145\155\145\x6e\164\163\x2c\40\x55\x70\144\x61\x74\145\163\54\x20\56\x2e\56", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\107\145\x6e\145\162\141\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::mamyakyiqcsmiyae)->gswweykyogmsyawy(__("\111\156\x73\164\x61\154\154\x61\x74\151\x6f\156\x20\x47\x75\151\144\145\40\x53\x74\x65\x70\163", PR__MDL__COMPONENT_MANAGER))->omsoosuoikgueyke()->yoouesigykyekkag()->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\x69\164\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\143\157\x6e", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->gsomueooycksswcy()->qsecygiycssgacqs(4)->gswweykyogmsyawy(__("\x44\x65\x73\143\162\151\x70\x74\x69\157\156", PR__MDL__COMPONENT_MANAGER))->uokyeqicycwwikwi(Constants::ocwsuwyiiasigqaa, __("\x43\157\155\160\157\156\145\x6e\164\x20\116\x61\x6d\x65", PR__MDL__COMPONENT_MANAGER))))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::msuwykmiggyawwok)->gswweykyogmsyawy(__("\103\157\156\164\141\x63\x74\40\125\x53\x20\x50\141\147\x65", PR__MDL__COMPONENT_MANAGER))->ukqywcsoogkyoaoa(Constants::imywcsggckkcywgk))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::ucoiewcoucauqwko)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x54\x65\x72\x6d\163\40\157\x66\40\125\x73\145", PR__MDL__COMPONENT_MANAGER))))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\162\145\x71\x75\151\x72\145\155\x65\156\164\163")->saemoowcasogykak(IconInterface::imoykkmkkkaqgouo)->gswweykyogmsyawy(__("\122\x65\x71\x75\151\162\145\x6d\145\156\164\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->qqmgmgasauucoago(Constants::miucsckaeckegceq)->omsoosuoikgueyke()->yoouesigykyekkag()->gswweykyogmsyawy(__("\122\145\161\x75\151\x72\145\155\x65\x6e\164\40\x47\x75\151\144\145\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x41\x64\x6d\x69\x6e\x20\x41\x72\145\141\40\x54\x69\164\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qoawsacmmgmimqaw)->gswweykyogmsyawy(__("\106\x72\x6f\156\164\40\x41\x72\145\141\x20\x54\151\x74\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->gsomueooycksswcy()->gswweykyogmsyawy(__("\104\x65\163\x63\162\x69\x70\x74\x69\157\156", PR__MDL__COMPONENT_MANAGER))))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::okcgiwmueoyocegm)->omsoosuoikgueyke()->yoouesigykyekkag()->gswweykyogmsyawy(__("\x52\145\x71\x75\151\x72\145\x6d\x65\x6e\164\x20\111\x74\x65\155\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::NAME)->gswweykyogmsyawy(__("\116\x61\x6d\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\x49\x63\157\156", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::wikgqsqysyuoykse)->gswweykyogmsyawy(__("\104\145\x66\141\x75\154\x74\40\x56\x61\154\x75\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::miucsckaeckegceq)->oikgogcweiiaocka()->gswweykyogmsyawy(__("\x47\x75\151\x64\145\x73", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($this->giiuwsmyumqwwiyq(Constants::miucsckaeckegceq, [], [Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\x70\155\160\162\x5f\160\154\x75\x67\x69\156")->saemoowcasogykak(IconInterface::csoyqymugwqiggki)->gswweykyogmsyawy(__("\x50\115\120\122\40\120\154\x75\x67\151\x6e", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\120\154\165\147\151\156\x20\x43\157\x6e\x66\151\x67\165\162\x61\x74\x69\x6f\156", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x70\154\x75\x67\x69\x6e" . Constants::iusoecsswgekecks)->gswweykyogmsyawy(__("\x47\x65\156\x65\x72\141\154", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::umoycqkiaiqoqaau)->omsoosuoikgueyke()->gswweykyogmsyawy(__("\102\141\x63\x6b\154\151\156\x6b\x20\115\x6f\144\141\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\x69\x74\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::TEXT)->gswweykyogmsyawy(__("\x54\x65\170\x74", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(3)->gsomueooycksswcy())))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x70\154\165\147\x69\x6e\137\x74\x61\142\x5f\155\141\x69\x6e")->gswweykyogmsyawy(__("\124\141\x62\x27\163\x20\x4d\x61\x69\x6e\x20\x43\x6f\x6e\164\145\156\x74", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::moyqoqmkkkaoeses)->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::agskamgmowaiywus)->gswweykyogmsyawy(__("\124\x61\x62\x20\x54\151\x74\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::uckmggyuwgmmskyc)->gswweykyogmsyawy(__("\115\141\151\x6e\x20\x44\145\x73\143\162\x69\x70\164\151\157\156", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(4)->gsomueooycksswcy())->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::ywgmisckaekgmagi)->omsoosuoikgueyke()->gswweykyogmsyawy(__("\x43\157\155\x70\x61\x72\x65\x73", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\151\x74\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->eumecwmqmukqgyea()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x54\x79\160\145", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::aqikuweekkucgqoy, __("\115\157\x64\x75\x6c\145", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::ykywsqyeckcgqyik, __("\103\157\x76\145\162", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::eisiyawomcsouiwe)->gswweykyogmsyawy(__("\127\x6f\162\x64\160\x72\x65\163\x73", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::ayygmosqcwyeaagw)->gswweykyogmsyawy(__("\x50\115\x50\x52", PR__MDL__COMPONENT_MANAGER))))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\155\x75\x6c\164\151\x73\164\x65\x70")->saemoowcasogykak(IconInterface::miecumwmuocmymoa)->gswweykyogmsyawy(__("\x4d\x75\154\164\x69\163\x74\145\160", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\x4d\165\x6c\x74\151\163\x74\145\160\40\x43\157\x6e\146\151\x67\x75\x72\x61\164\151\157\x6e", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\107\145\x6e\x65\162\141\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::qwqkccuwkqeoucqu)->gswweykyogmsyawy(__("\107\157\x20\x74\157\40\101\x66\164\x65\162\x20\x41\x64\144\40\x74\157\x20\103\x61\162\x74", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::cwswygwykwgsqiwu, __("\x50\x72\157\144\x75\143\x74\x20\x53\151\156\x67\x6c\145", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::gmquuqmomuaqueyi, __("\x43\141\162\x74", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::qseekcawwuumgacy, __("\103\x68\145\x63\x6b\x6f\x75\x74", PR__MDL__COMPONENT_MANAGER))->eumecwmqmukqgyea()->eyygsasuqmommkua(self::cwswygwykwgsqiwu)))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\163\x74\x65\160\x73")->saemoowcasogykak(IconInterface::gwuqaauiiiqquecg)->gswweykyogmsyawy(__("\123\x74\x65\x70\x73\x20\144\141\x74\141", PR__MDL__COMPONENT_MANAGER))->aucimgwswmgaocae($this->doeuiogekyiwgsgw("\x6f\162\144\x65\x72\137\164\171\x70\x65")->saemoowcasogykak(IconInterface::qkqucweqeuyemamq)->gswweykyogmsyawy(sprintf(__("\x25\x73\x20\123\164\145\x70", PR__MDL__COMPONENT_MANAGER), __("\117\x72\144\x65\x72\40\124\x79\160\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::aqusgmmakasqamgq)->gswweykyogmsyawy(__("\120\x6c\165\147\x69\156\x20\x47\x75\151\x64\145\x20\x54\151\x74\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::iwseqweooieakqwk)->gswweykyogmsyawy(__("\x50\x6c\165\x67\x69\x6e\40\x47\x75\x69\x64\x65\40\x46\x69\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::wumiomcykccwmgei)->gswweykyogmsyawy(__("\x50\x6c\x75\x67\x69\156\x20\107\x75\x69\x64\145\x20\x42\165\x74\x74\157\x6e\40\x54\x65\170\x74", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::ggswmwomsiccuqwg)->gswweykyogmsyawy(__("\120\154\165\x67\x69\x6e\40\x47\x75\x69\x64\x65\40\x44\x65\x73\143\x72\151\x70\164\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3)))->aucimgwswmgaocae($this->doeuiogekyiwgsgw("\x62\x61\143\153\154\151\x6e\153")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\x42\141\x63\x6b\154\x69\x6e\x6b", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::oycqkmeykiouqcqo)->gswweykyogmsyawy(__("\x42\141\143\x6b\154\x69\x6e\x6b\40\x54\x69\x74\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::aakugisgkoscaeys)->gsomueooycksswcy()->gswweykyogmsyawy(__("\102\141\x63\153\154\151\156\153\x20\104\x65\x73\x63\x72\x69\x70\x74\x69\157\156", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::aaasmysammcocwcu)->gswweykyogmsyawy(__("\x42\x61\143\x6b\154\x69\156\153\x20\x49\155\141\x67\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::awqewimmscsokykc)->gsomueooycksswcy()->gswweykyogmsyawy(__("\102\141\x63\x6b\154\151\156\x6b\x20\x41\154\145\162\164", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3)->eyygsasuqmommkua(__("\151\146\x20\162\145\x6d\x6f\166\145\40\x69\164\x20\x66\162\x6f\155\40\x79\x6f\x75\162\40\x70\141\x67\x65\x2c\x20\x79\x6f\x75\x72\x20\141\x63\x63\157\165\156\x74\x20\x69\163\x20\142\x61\156\156\145\144\56", PR__MDL__COMPONENT_MANAGER)))))); parent::ykwqaukkycogooii(); } public function gkiyamgwqciqwqwo() : ?string { return $this->giiuwsmyumqwwiyq(self::aaasmysammcocwcu, 0); } public function icioieqkoswsyouk(array $ywmkwiwkosakssii = []) : array { return $this->giiuwsmyumqwwiyq(self::umoycqkiaiqoqaau, [], $ywmkwiwkosakssii); } public function ksgygymiyeiukqoy() : array { $egsqwmeeeowomomi = (new Compare(Constants::ykywsqyeckcgqyik))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\x57\157\162\144\160\x72\x65\163\x73\x20\124\150\145\x6d\145", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\127\x6f\x72\x64\160\162\x65\x73\163\x20\x43\x6f\x76\x65\x72", PR__MDL__COMPONENT_MANAGER)); $smqkocasociqsgai = (new Compare(Constants::aqikuweekkucgqoy))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\127\x6f\162\144\160\x72\x65\x73\x73\x20\120\x6c\x75\147\x69\156", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\x57\157\162\x64\x70\x72\x65\163\x73\x20\115\157\144\165\154\145", PR__MDL__COMPONENT_MANAGER)); $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq(self::ywgmisckaekgmagi, []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [Constants::qescuiwgsyuikume, Constants::squoamkioomemiyi])) { $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::squoamkioomemiyi); $ccamueccusigaaio = $smqkocasociqsgai; if ($sqeykgyoooqysmca === Constants::ykywsqyeckcgqyik) { $ccamueccusigaaio = $egsqwmeeeowomomi; } $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::qescuiwgsyuikume); $ccamueccusigaaio->kywqieosgkokaiue($meqocwsecsywiiqs, [self::ayygmosqcwyeaagw => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::ayygmosqcwyeaagw, true), self::eisiyawomcsouiwe => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::eisiyawomcsouiwe, false)]); } } return [Constants::ykywsqyeckcgqyik => $egsqwmeeeowomomi->sacmkccceuywoqsq(), Constants::aqikuweekkucgqoy => $smqkocasociqsgai->sacmkccceuywoqsq()]; } public function iwgmiyoaskssmosa() : string { $cokwmmimiaeayiwi = $this->giiuwsmyumqwwiyq(self::msuwykmiggyawwok, 0); return $cokwmmimiaeayiwi > 0 ? sprintf(__("\x49\x66\40\x6e\145\x65\x64\x65\x64\54\40\x79\x6f\165\x20\143\x61\156\x20\x63\157\x6e\164\141\x63\x74\x20\165\x73\x20\x74\x68\x72\x6f\165\x67\150\x20\x74\x68\145\x20\45\163\56", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(sprintf(__("\120\x61\x67\x65\x20\x25\x73", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($cokwmmimiaeayiwi)), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($cokwmmimiaeayiwi), ["\x63\154\141\163\x73" => "\141\154\x65\162\x74\55\x6c\x69\156\153"])) : ''; } public function wkcqmkyoskmemqek($syqougokmmgaoaee) : string { $haigguwksscaksqc = $this->giiuwsmyumqwwiyq(self::mamyakyiqcsmiyae, [], [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::wkweqssoakmmmguq => [Constants::qgqyauaqwqmqseim, Constants::qescuiwgsyuikume, Constants::eqkeooqcsscoggia]]); $nsmgceoqaqogqmuw = ''; if (is_array($haigguwksscaksqc)) { $aokagokqyuysuksm = "{$syqougokmmgaoaee}\x5f\151\156\x73\x74\x61\x6c\154\141\164\151\x6f\156\137\x67\165\x69\144\145"; $ycsgmysgoaqikiui = new Multistep($aokagokqyuysuksm); $ycsgmysgoaqikiui->qigsyyqgewgskemg("\x69\156\x73\164\141\154\x6c\x61\x74\151\157\156\55\x67\165\x69\x64\x65\x2d\155\x75\x6c\164\151\x73\x74\x65\x70"); $okguqgiiewywyoaq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $gaeqamemwmwsyukm = count($haigguwksscaksqc); $momcykaoccoymeig = 0; foreach ($haigguwksscaksqc as $uusmaiomayssaecw => $wysowamoceeqmiae) { $momcykaoccoymeig++; $wyeyeaaekyoyimqu = $ycsgmysgoaqikiui->yieymusoukkkmsww("{$aokagokqyuysuksm}\137\163\164\x65\x70\x5f{$uusmaiomayssaecw}")->saemoowcasogykak($wysowamoceeqmiae[Constants::qgqyauaqwqmqseim])->gswweykyogmsyawy($wysowamoceeqmiae[Constants::qescuiwgsyuikume])->oguessuismosauuu($okguqgiiewywyoaq->aqiqkkuauegomyoi($wysowamoceeqmiae[Constants::eqkeooqcsscoggia])); if ($momcykaoccoymeig === $gaeqamemwmwsyukm) { $wyeyeaaekyoyimqu->gwwmcykumqueaosa(__("\103\x6c\x6f\163\145", PR__MDL__COMPONENT_MANAGER)); } $ycsgmysgoaqikiui->mgqggiyywoageqmo($wyeyeaaekyoyimqu); } $nsmgceoqaqogqmuw = $ycsgmysgoaqikiui->render(); } return $nsmgceoqaqogqmuw; } public function aqsugsmskceikaee($wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $syqougokmmgaoaee = $gcswwqwyaccgyoee->mwyqswsaeeewsosm($wksoawcgagcgoask); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return $this->caokeucsksukesyo()->kugiyqykwaskawsc()->icqkogwskuwscskk([Constants::gouqcwikiiygyasc => "\x69\x6e\163\164\x61\154\x6c\141\x74\x69\x6f\156\137\147\165\x69\x64\x65\x5f{$syqougokmmgaoaee}", Constants::waguuiqqgsysuukq => Constants::esgegasyoiyogwqc, Constants::qescuiwgsyuikume => sprintf(__("\x25\163\x20\111\x6e\x73\x74\x61\x6c\154\x61\164\x69\157\156\x20\107\165\151\144\x65", PR__MDL__COMPONENT_MANAGER), $quisksguegkuygus), Constants::ssmskyqgcmeiayco => $this->wkcqmkyoskmemqek($syqougokmmgaoaee), Constants::qaioykeumkssukis => true, Constants::uqgcmmosieyimiku => [Constants::TEXT => __("\x47\165\151\x64\x65", PR__MDL__COMPONENT_MANAGER), Constants::ysskgssgwuwmqwym => ["\x63\x6c\141\163\163" => "\x61\x6c\145\162\x74\55\x6c\x69\156\x6b\x20\151\156\163\x74\x61\154\154\x61\x74\151\x6f\156\x2d\x67\165\x69\x64\145\x2d\x74\x6f\x67\147\x6c\x65"], Constants::gqmuoaykeqeuoukm => false, Constants::ELEMENT => "\x61"]]); } }
