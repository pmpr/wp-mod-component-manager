<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45ee53117c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\REST; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { use LogTrait; const ocwsuwyiiasigqaa = "\143\x6f\155\160\x6f\156\x65\156\x74"; const okkqqmwseqscceye = "\154\151\x63\145\x6e\x73\x65\137\x6b\x65\171"; public function __construct() { $this->rest_base = "\x63\157\x6d\x70\157\156\145\156\x74"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\145\x74\55\x69\x74\145\x6d", ["\141\x72\147\163" => ["\156\x61\155\145" => ["\164\x79\160\x65" => "\163\164\x72\x69\156\x67", "\144\x65\163\143\162\151\x70\x74\151\x6f\x6e" => __("\116\141\x6d\x65\40\x6f\x66\40\x63\x6f\x6d\x70\157\x6e\x65\x6e\164", PR__PKG__COMPONENT_MANAGER)]], "\155\x65\x74\150\x6f\x64\163" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\142\x61\x63\153" => [$this, "\x73\x71\157\151\165\171\153\x63\x6f\x75\x65\151\165\x63\147\x63"]]); $this->register("\x2f\147\x65\164\x2d\x69\164\x65\x6d\163", ["\x61\x72\x67\x73" => [self::squoamkioomemiyi => ["\x74\x79\160\x65" => "\163\164\x72\151\x6e\147", "\144\145\x73\143\162\151\x70\x74\151\x6f\156" => __("\124\171\x70\145\x20\157\146\x20\143\157\155\160\x6f\156\x65\x6e\164", PR__PKG__COMPONENT_MANAGER)], self::imywcsggckkcywgk => ["\x74\171\160\x65" => "\151\156\x74\145\x67\x65\162"], self::yayciqueeakqwese => ["\164\x79\x70\x65" => "\163\x74\x72\151\156\147"], self::kqeokggqcsesmqco => ["\x74\x79\x70\145" => "\x62\x6f\157\154\x65\x61\156"], self::ausqeuugegoygouq => ["\x74\x79\160\x65" => "\x69\156\164\145\147\x65\162"]], "\155\x65\x74\x68\157\144\x73" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\142\x61\x63\153" => [$this, "\x77\141\163\147\167\163\157\147\x6d\x75\x71\x75\x71\145\x61\141"]]); $this->register("\57\x63\x68\x65\143\x6b\55\154\151\143\145\x6e\x73\145\55\x6b\145\x79", ["\141\162\x67\163" => [self::okkqqmwseqscceye => [self::squoamkioomemiyi => "\x73\164\x72\151\156\147", self::eqkeooqcsscoggia => __("\114\x69\x63\145\x6e\x73\145\40\x6b\145\x79\x20\157\x66\40\143\x6f\155\160\157\156\x65\x6e\x74", PR__PKG__COMPONENT_MANAGER)], self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\163\x74\162\x69\156\147", self::eqkeooqcsscoggia => __("\116\x61\x6d\x65\40\x6b\145\171\x20\x6f\x66\x20\143\157\x6d\x70\157\x6e\145\x6e\x74", PR__PKG__COMPONENT_MANAGER)]], "\155\x65\x74\150\x6f\x64\x73" => self::qucyckeykeuuaquw, "\143\141\x6c\x6c\x62\141\x63\153" => [$this, "\157\153\151\x63\141\x61\x75\x67\161\x6b\x6d\171\167\161\171\x6d"]]); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::okkqqmwseqscceye, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto csscmcacoikwsecs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\161\165\x69\x72\x65\40\160\x61\162\x61\155\x65\x74\145\162\163\40\x6e\157\164\x20\160\141\x73\x73\x65\144\x2e", PR__PKG__COMPONENT_MANAGER), 400); goto cuykwgmswkskqkyi; csscmcacoikwsecs: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $keccaugmemegoimu = $swgwkyqkakceqeia->ogkgcwiskmoiweki($esuksqieigiqcaie, $iakkeikwceeomgyq); if ($keccaugmemegoimu) { goto myoicgcuugciueis; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\x6f\x20\144\157\x6d\141\151\x6e\40\x66\x6f\x75\156\x64\x20\x66\x6f\x72\x20\x79\x6f\x75\56", PR__PKG__COMPONENT_MANAGER), 401); goto asmecuqiyyswueqe; myoicgcuugciueis: if (is_wp_error($keccaugmemegoimu)) { goto qwigomakwmyiwkgo; } $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); $gmywaegkmeaueiyo = Purchase::symcgieuakksimmu()->oqomcmyuuakigusk([Purchase::okkqqmwseqscceye => $hsouuwoeemykcceu, Purchase::qkmqmaeuyokqgemg => $akyiigeggqowmqqq]); if ($gmywaegkmeaueiyo) { goto qogqewiwmwiwskgm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x72\x72\171\x2c\40\x59\x6f\x75\x20\x6e\157\164\40\142\x75\x79\40\164\150\151\x73\40\143\x6f\x6d\160\x6f\x6e\x65\156\164\x2e", PR__PKG__COMPONENT_MANAGER)); goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $uqigicauqkogsuuc = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($uqigicauqkogsuuc); if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME) == $wksoawcgagcgoask) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x72\x72\x79\x2c\40\131\157\x75\40\156\157\x74\x20\142\165\x79\x20\x74\150\x69\163\40\x63\x6f\155\x70\x6f\156\145\156\x74\x2c\x20\x61\x72\145\x20\171\157\x75\x20\x74\162\x79\x69\x6e\147\x20\x68\141\x63\153\x3f", PR__PKG__COMPONENT_MANAGER)); goto qiaqsassksqiuyae; cecuyayqoioasumi: $icwicymcioeyeyek = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6c\151\143\145\x6e\x73\145\x5f\143\x68\x65\143\153\x5f\166\x61\x6c\x69\x64\x61\x74\151\x6f\156\x5f\162\145\x73\x70\x6f\156\x73\145\137\x64\x61\x74\141"), [], $akyiigeggqowmqqq, $uqigicauqkogsuuc, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\114\151\143\145\156\163\x65\x20\113\145\171\x20\151\x73\40\x76\x61\154\151\144\x2e", PR__PKG__COMPONENT_MANAGER), $icwicymcioeyeyek); qiaqsassksqiuyae: qgoiooayqmqqsiok: qwigomakwmyiwkgo: asmecuqiyyswueqe: cuykwgmswkskqkyi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); if ($ymqmyyeuycgmigyo) { goto sciwggaeogcoesiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\x71\165\x69\162\145\40\x70\141\x72\x61\x6d\x65\x74\x65\x72\x73\40\x6e\x6f\164\40\160\x61\163\163\x65\x64\56", PR__PKG__COMPONENT_MANAGER), 400); goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::squoamkioomemiyi, $gcswwqwyaccgyoee::mkousmkiawwousws, $gcswwqwyaccgyoee::oguseymmyyoyaako, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::mawokyacsmmqmsoo, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi]); if ($wksoawcgagcgoask) { goto kuicqywysciceggs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x72\145\x71\x75\x65\163\x74\145\x64\x20\x63\157\x6d\x70\157\x6e\145\156\164\40\x77\151\164\x68\x20\x6e\141\155\x65\x20\x25\163\40\156\157\164\40\x66\x6f\x75\156\144\56", PR__PKG__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 400); goto mkwskuycuyguqqok; kuicqywysciceggs: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); mkwskuycuyguqqok: eqkauqciwewmgeoi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { $qwcmueausqgiwigy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yayciqueeakqwese, ''); $uoomaookgsyciacm = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!$qwcmueausqgiwigy) { goto kwagwqyusyiyoaqs; } $uiewakwqscemywuo = [self::ciyoccqkiamemcmm => "\45{$qwcmueausqgiwigy}\45", self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::eugyciakiowwcuwm => self::augocsiaqqukkuui]; $uoomaookgsyciacm = [$gcswwqwyaccgyoee::NAME => $uiewakwqscemywuo, $gcswwqwyaccgyoee::wucysakokksokumi => $uiewakwqscemywuo, $gcswwqwyaccgyoee::ouwcgiuiymgwouec => $uiewakwqscemywuo]; kwagwqyusyiyoaqs: $uoomaookgsyciacm[$gcswwqwyaccgyoee::squoamkioomemiyi] = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::squoamkioomemiyi, "\160\x61\143\x6b\x61\x67\x65"); if (!$this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::kqeokggqcsesmqco, false)) { goto yowsmsiyimmimemc; } $uoomaookgsyciacm[$gcswwqwyaccgyoee::squoamkioomemiyi] = "\143\x75\x73\164\157\155"; yowsmsiyimmimemc: $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kqewyqqqiyiouaou($uoomaookgsyciacm); if ($siykeiywomwwuoiw) { goto sqiciiuwmykocycc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\145\162\166\151\143\145\x20\x69\163\40\165\x6e\x61\x76\x61\x69\154\141\142\154\145\40\x72\151\147\150\x74\40\156\157\x77\x2e", PR__PKG__COMPONENT_MANAGER), 503); goto eequksumcoogyoem; sqiciiuwmykocycc: $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::imywcsggckkcywgk => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk, 1), self::ausqeuugegoygouq => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq, 10), self::wosqwewmqmyweqea => false]); $oammesyieqmwuwyi = $keccaugmemegoimu[self::qwumqqyuasyskkkc]; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $oammesyieqmwuwyi[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); iomcaiwewsawiamu: } kiqogmwcgcamwiig: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; eequksumcoogyoem: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $product = ManipulateArray::unset($igqsaukqcqscimok, self::oguseymmyyoyaako); if (!$product) { goto cggowoquuiwqkyew; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto uukumskkeggaowck; } $uwomkgseoiegeume = ["\x72\x61\164\x69\x6e\147" => $product->get_average_rating(), "\x72\x61\x74\x69\x6e\147\x5f\143\157\165\156\x74" => $product->get_rating_count(), self::sauwwsocmukoaayu => $product->get_permalink()]; $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, $uwomkgseoiegeume); uukumskkeggaowck: cggowoquuiwqkyew: $mcqieaigyeeyaksm = ManipulateArray::get($igqsaukqcqscimok, self::mkousmkiawwousws); if (!$mcqieaigyeeyaksm) { goto ocokwuuquaokmasc; } $igqsaukqcqscimok[self::mkousmkiawwousws] = ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm); ocokwuuquaokmasc: return $igqsaukqcqscimok; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $gioggcykgoikcwiy = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($gioggcykgoikcwiy); } }
