<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ac6505cb23             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateCron; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Data\Compare; class Setting extends BaseClass { const qwqkccuwkqeoucqu = "\147\x6f\164\157\x5f\141\x66\164\145\x72\x5f\141\144\x64\x5f\164\157\137\x63\x61\x72\164"; const qsciwuokgmaaqcuq = "\165\160\x64\141\164\145\137\143\157\x6d\160\x6f\x6e\x65\x6e\x74\163\x5f"; const kokgyiugagmkcyay = self::qsciwuokgmaaqcuq . "\163\154\x65\145\x70"; const gyicmcewygamwoog = self::qsciwuokgmaaqcuq . self::iccwcygaeqmomooo; const qkcusmuuciksieoy = self::qsciwuokgmaaqcuq . "\x74\151\x6d\145\163\x74\141\x6d\x70"; const gomeigayyekgimuo = self::qsciwuokgmaaqcuq . "\x72\x65\x63\165\162\x72\145\156\x63\145"; const yicqiccsyqwigaqa = "\142\141\143\153\154\x69\x6e\153\137"; const oycqkmeykiouqcqo = self::yicqiccsyqwigaqa . self::qescuiwgsyuikume; const aaasmysammcocwcu = self::yicqiccsyqwigaqa . self::mkousmkiawwousws; const awqewimmscsokykc = self::yicqiccsyqwigaqa . self::muocgwgqigscmqow; const aakugisgkoscaeys = self::yicqiccsyqwigaqa . self::eqkeooqcsscoggia; const kqykggkcgquswkea = "\x70\x6c\165\x67\151\x6e\x5f\x67\165\151\x64\x65\137"; const iwseqweooieakqwk = self::kqykggkcgquswkea . "\146\x69\x6c\145"; const aqusgmmakasqamgq = self::kqykggkcgquswkea . self::qescuiwgsyuikume; const wumiomcykccwmgei = self::kqykggkcgquswkea . self::gqmuoaykeqeuoukm; const ggswmwomsiccuqwg = self::kqykggkcgquswkea . self::eqkeooqcsscoggia; const eyiukesukwwsmyya = "\160\x6c\165\x67\x69\x6e\x5f\x74\141\x62\137"; const agskamgmowaiywus = self::eyiukesukwwsmyya . self::qescuiwgsyuikume; const ywgmisckaekgmagi = self::eyiukesukwwsmyya . "\143\x6f\155\160\141\162\145\x73"; const uckmggyuwgmmskyc = self::eyiukesukwwsmyya . self::eqkeooqcsscoggia; const umoycqkiaiqoqaau = "\160\154\x75\x67\x69\x6e\x5f\x62\x61\x63\153\x6c\151\x6e\x6b\x5f\155\x6f\144\141\154"; const ayygmosqcwyeaagw = "\160\x6d\x70\x72\137\166\141\x6c\x75\x65"; const eisiyawomcsouiwe = "\167\157\x72\144\160\x72\x65\x73\163\137\166\x61\x6c\x75\145"; const gmquuqmomuaqueyi = "\x63\x61\162\x74"; const cwswygwykwgsqiwu = "\163\x69\x6e\x67\x6c\145"; const qseekcawwuumgacy = "\143\x68\x65\x63\x6b\157\x75\x74"; public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->name = $wksoawcgagcgoask; $this->parentMenu = $wksoawcgagcgoask; $this->hasLicense = false; parent::__construct(); } public function gogaagekwoisaqgu() { $this->pageTitle = __("\103\157\155\x70\x6f\156\x65\x6e\x74\x20\x4d\141\x6e\141\147\x65\162\x20\123\145\x74\x74\151\x6e\147", PR__MDL__COMPONENT_MANAGER); $this->menuTitle = __("\123\x65\x74\164\x69\x6e\147", PR__MDL__COMPONENT_MANAGER); parent::gogaagekwoisaqgu(); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa(self::ioomakeyqiqowgmk, __("\x47\145\x6e\x65\x72\x61\154", PR__MDL__COMPONENT_MANAGER))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\x75\160\x64\x61\x74\x65\x5f\143\157\155\x70\157\156\x65\x6e\x74\x73", __("\125\x70\x64\141\164\145\40\x43\x6f\155\x70\x6f\156\145\156\164\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::gyicmcewygamwoog, __("\105\x6e\x61\142\x6c\x65\40\x41\165\164\x6f\x6d\x61\x74\x69\x63\40\125\160\144\141\x74\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::gomeigayyekgimuo, __("\x53\x63\150\145\144\165\x6c\x65\40\122\145\x63\165\x72\162\x65\x6e\x63\145", PR__MDL__COMPONENT_MANAGER), ManipulateCron::ecwaeokygwoiqmkk()))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qkcusmuuciksieoy, __("\123\143\150\145\x64\x75\154\145\x20\124\x69\155\x65\x73\164\x61\155\x70", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua("\61\67\x3a\x32\65\72\62\60")->sousgskgsoaaukcs("\43\x23\72\x23\43\x3a\43\x23")->yskkmqiusguummwa())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::kokgyiugagmkcyay, __("\105\x61\x63\150\x20\x49\164\x65\155\40\123\154\145\x65\x70\40\124\151\155\x65", PR__MDL__COMPONENT_MANAGER))->escqqisecooswqgo()->eyygsasuqmommkua(10))->saemoowcasogykak(IconInterface::qywgekagciyucegy))->uwymwiymwwekwuwe(self::cgygmuguceeosoey("\141\x63\x74\x69\157\156\x73", __("\101\143\164\x69\x6f\156\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::qoeiescseggagsqs("\165\160\144\x61\164\x65\x5f\x64\x61\x74\141", __("\125\160\x64\x61\164\145\40\103\x6f\x6d\160\157\156\x65\x6e\x74\163", PR__MDL__COMPONENT_MANAGER), __("\x59\157\x75\40\143\141\156\x20\x75\160\x64\141\x74\145\40\143\x6f\155\160\x6f\156\145\156\164\x73\x20\x64\x61\x74\x61\x20\50\x76\145\x72\x73\x69\x6f\156\x2c\40\154\x61\163\164\x20\x75\160\144\x61\164\145\x2c\x20\144\x6f\x77\x6e\154\x6f\x61\144\40\143\x6f\x75\x6e\x74\51\x20\155\141\156\x75\141\x6c\154\171\x20\x62\171\40\x70\x72\x65\163\x73\x20\164\x68\151\x73\40\142\x75\x74\x74\157\156", PR__MDL__COMPONENT_MANAGER))->ygagwkucacyassau()->gmscmskmuissgywk()->qigsyyqgewgskemg("\x75\x70\144\141\x74\145\x2d\x63\157\155\x70\x6f\x6e\x65\156\164\x73\x2d\x61\143\164\x69\157\x6e"))->saemoowcasogykak(IconInterface::imoykkmkkkaqgouo))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\160\x6d\x70\162\x5f\x70\x6c\x75\x67\151\156", __("\120\115\x50\122\40\x50\x6c\165\x67\x69\x6e", PR__MDL__COMPONENT_MANAGER))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\160\x6c\x75\x67\x69\156" . self::iusoecsswgekecks, __("\107\x65\156\x65\x72\x61\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::iseogkiymousogom(self::umoycqkiaiqoqaau, __("\102\x61\143\153\154\151\x6e\x6b\x20\x4d\157\x64\x61\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\x69\164\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::TEXT, __("\x54\x65\x78\164", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(5)->gsomueooycksswcy())->mkksewyosgeumwsa(self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->omsoosuoikgueyke())->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\x70\154\x75\x67\151\x6e\x5f\164\141\x62\137\x6d\x61\151\156", __("\x54\141\142\47\x73\x20\x4d\141\151\156\x20\103\157\156\x74\145\156\x74", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::agskamgmowaiywus, __("\x54\141\142\40\124\x69\164\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::uckmggyuwgmmskyc, __("\115\x61\151\x6e\x20\x44\145\x73\x63\x72\x69\160\x74\x69\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(4)->gsomueooycksswcy())->mkksewyosgeumwsa(self::iseogkiymousogom(self::ywgmisckaekgmagi, __("\103\x6f\x6d\x70\141\x72\145\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\x69\164\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::squoamkioomemiyi, __("\x54\171\160\x65", PR__MDL__COMPONENT_MANAGER), [self::ykywsqyeckcgqyik => __("\103\157\166\145\162", PR__MDL__COMPONENT_MANAGER), self::aqikuweekkucgqoy => __("\115\x6f\144\x75\154\x65", PR__MDL__COMPONENT_MANAGER)]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::eisiyawomcsouiwe, __("\x57\x6f\x72\x64\x70\x72\145\x73\x73", PR__MDL__COMPONENT_MANAGER))->gwmyoiemwyqeceqg()->yoimakcqmoqokkcu())->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ayygmosqcwyeaagw, __("\x50\x4d\120\x52", PR__MDL__COMPONENT_MANAGER))->gwmyoiemwyqeceqg()->yoimakcqmoqokkcu())->wygoskowywcuyaiq())->saemoowcasogykak(IconInterface::moyqoqmkkkaoeses))->saemoowcasogykak(IconInterface::csoyqymugwqiggki))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\155\165\x6c\164\x69\137\163\164\145\x70", __("\115\165\x6c\x74\x69\x20\x53\x74\145\160", PR__MDL__COMPONENT_MANAGER))->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::ioomakeyqiqowgmk, __("\107\145\156\x65\162\141\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::qwqkccuwkqeoucqu, __("\x47\157\40\164\157\40\x41\x66\x74\x65\x72\x20\x41\144\144\x20\x74\157\40\x43\x61\x72\x74", PR__MDL__COMPONENT_MANAGER), [self::cwswygwykwgsqiwu => __("\x50\x72\x6f\x64\165\x63\164\x20\123\151\x6e\147\154\x65", PR__MDL__COMPONENT_MANAGER), self::gmquuqmomuaqueyi => __("\x43\141\x72\x74", PR__MDL__COMPONENT_MANAGER), self::qseekcawwuumgacy => __("\x43\x68\145\143\153\157\x75\x74", PR__MDL__COMPONENT_MANAGER)])->eumecwmqmukqgyea()->eyygsasuqmommkua(self::cwswygwykwgsqiwu))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\x73\164\145\160\163", __("\x53\x74\145\160\163\40\x64\141\164\x61", PR__MDL__COMPONENT_MANAGER))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\x6f\x72\x64\145\162\x5f\164\171\160\145", sprintf(__("\x25\x73\40\123\x74\145\160", PR__MDL__COMPONENT_MANAGER), __("\x4f\x72\x64\x65\x72\x20\x54\171\160\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::aqusgmmakasqamgq, __("\x50\x6c\x75\x67\x69\x6e\x20\107\x75\x69\144\x65\40\x54\x69\164\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::iwseqweooieakqwk, __("\120\154\x75\x67\151\x6e\x20\107\x75\x69\144\x65\x20\106\x69\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::wumiomcykccwmgei, __("\x50\154\165\x67\x69\x6e\x20\107\165\151\x64\x65\40\x42\x75\x74\x74\157\x6e\40\x54\x65\170\x74", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::ggswmwomsiccuqwg, __("\x50\x6c\165\x67\x69\156\x20\107\x75\151\x64\x65\40\x44\x65\x73\x63\x72\x69\x70\164\x69\157\156", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3))->saemoowcasogykak(IconInterface::qkqucweqeuyemamq))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\142\141\x63\153\154\x69\x6e\153", __("\102\x61\x63\x6b\x6c\x69\x6e\153", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::oycqkmeykiouqcqo, __("\102\x61\143\x6b\x6c\151\156\x6b\40\x54\151\x74\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::aakugisgkoscaeys, __("\x42\x61\x63\153\x6c\x69\x6e\153\x20\x44\145\x73\143\x72\151\x70\164\x69\x6f\156", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::aaasmysammcocwcu, __("\102\141\143\153\154\151\156\153\40\111\155\x61\x67\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::awqewimmscsokykc, __("\x42\141\143\153\x6c\151\x6e\153\40\x41\x6c\x65\162\x74", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(__("\x69\146\x20\x72\x65\x6d\x6f\166\145\40\151\164\40\x66\x72\x6f\x6d\x20\171\157\x75\162\x20\x70\141\147\x65\54\40\x79\x6f\x75\x72\x20\x61\x63\x63\x6f\165\156\164\40\151\x73\40\142\x61\156\x6e\x65\144\56", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3))->saemoowcasogykak(IconInterface::emuwacasoaaageiq))->saemoowcasogykak(IconInterface::gwuqaauiiiqquecg))->saemoowcasogykak(IconInterface::miecumwmuocmymoa)); parent::ecwgiiuacoaokqkw(); } public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak) { $eqgoocgaqwqcimie = self::wcoqgwyekgsmiueo($eqgoocgaqwqcimie, self::umoycqkiaiqoqaau, 1, "\x69\x6e\x64\145\170"); return parent::iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak); } public static function gkiyamgwqciqwqwo() : ?string { return self::eiwcuqigayigimak(self::aaasmysammcocwcu . self::mswocgcucqoaesaa, 0); } public static function icioieqkoswsyouk(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[self::wkweqssoakmmmguq] = [self::ascagqcquwgmygkm]; return self::qkckuwowccaqygke(self::umoycqkiaiqoqaau, $ywmkwiwkosakssii); } public function ksgygymiyeiukqoy() : array { $egsqwmeeeowomomi = (new Compare(self::ykywsqyeckcgqyik))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\127\157\162\x64\160\x72\145\163\x73\40\124\150\145\155\145", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\127\157\162\x64\160\162\x65\x73\x73\x20\103\x6f\166\145\x72", PR__MDL__COMPONENT_MANAGER)); $smqkocasociqsgai = (new Compare(self::aqikuweekkucgqoy))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\127\157\x72\144\160\162\x65\163\163\40\120\x6c\165\x67\151\156", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\127\157\162\144\160\162\x65\163\x73\40\115\157\144\x75\154\x65", PR__MDL__COMPONENT_MANAGER)); $oammesyieqmwuwyi = self::eiwcuqigayigimak(self::ywgmisckaekgmagi, []); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::qescuiwgsyuikume, self::squoamkioomemiyi])) { goto egesuwkqkmaigaoe; } $sqeykgyoooqysmca = ManipulateArray::get($igqsaukqcqscimok, self::squoamkioomemiyi); $ccamueccusigaaio = $smqkocasociqsgai; if (!($sqeykgyoooqysmca === self::ykywsqyeckcgqyik)) { goto ugogoekeckgcmuaw; } $ccamueccusigaaio = $egsqwmeeeowomomi; ugogoekeckgcmuaw: $meqocwsecsywiiqs = ManipulateArray::get($igqsaukqcqscimok, self::qescuiwgsyuikume); $ccamueccusigaaio->kywqieosgkokaiue($meqocwsecsywiiqs, [self::ayygmosqcwyeaagw => ManipulateArray::get($igqsaukqcqscimok, self::ayygmosqcwyeaagw, true), self::eisiyawomcsouiwe => ManipulateArray::get($igqsaukqcqscimok, self::eisiyawomcsouiwe, false)]); egesuwkqkmaigaoe: ykqsuiyyosyeyscc: } uscokkmquayiukag: return [self::ykywsqyeckcgqyik => $egsqwmeeeowomomi->sacmkccceuywoqsq(), self::aqikuweekkucgqoy => $smqkocasociqsgai->sacmkccceuywoqsq()]; } }
