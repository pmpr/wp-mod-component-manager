<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a7f087afa             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\REST; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { const COMPONENT = "\x63\x6f\x6d\160\157\156\145\x6e\x74"; const LICENSE_KEY = "\154\151\143\145\x6e\163\x65\137\x6b\x65\171"; public function __construct() { $this->rest_base = "\x63\157\x6d\x70\x6f\156\145\x6e\x74"; parent::__construct(); } public function register_routes() { goto mugeiwyysiemwaym; cquikgykuscqmigw: $this->register("\57\143\150\x65\143\153\x2d\154\151\x63\x65\156\x73\x65\x2d\x6b\x65\171", ["\141\162\x67\163" => [self::LICENSE_KEY => [self::TYPE => "\x73\x74\x72\151\156\x67", self::DESCRIPTION => __("\x4c\151\x63\145\156\163\x65\x20\x6b\x65\171\x20\x6f\146\x20\143\157\155\160\x6f\x6e\x65\x6e\x74", PR__PKG__COMPONENT_MANAGER)], self::COMPONENT => [self::TYPE => "\x73\x74\x72\x69\x6e\147", self::DESCRIPTION => __("\116\141\x6d\x65\40\x6b\x65\x79\x20\x6f\146\x20\143\157\155\160\x6f\156\145\156\164", PR__PKG__COMPONENT_MANAGER)]], "\x6d\x65\164\x68\157\x64\x73" => self::CREATABLE, "\143\x61\x6c\x6c\x62\141\143\x6b" => [$this, "\157\153\151\143\141\141\x75\147\x71\x6b\155\171\167\161\171\x6d"], "\160\x65\x72\155\151\x73\x73\151\x6f\156\x5f\143\x61\x6c\x6c\x62\x61\x63\153" => [$this, "\x61\143\153\165\141\151\x67\151\157\143\163\147\171\161\167\145"]]); goto cyymeyomuakqakwo; mugeiwyysiemwaym: $this->register("\57\x67\145\x74\x2d\x69\164\145\x6d", ["\x61\162\147\163" => ["\156\141\155\145" => ["\164\x79\160\x65" => "\163\x74\162\x69\156\147", "\x64\145\x73\143\162\x69\160\x74\151\157\156" => __("\116\141\x6d\145\x20\157\146\x20\x63\x6f\x6d\x70\x6f\x6e\145\156\x74", PR__PKG__COMPONENT_MANAGER)]], "\155\145\164\x68\157\144\x73" => self::READABLE, "\143\x61\x6c\x6c\x62\x61\x63\153" => [$this, "\x73\x71\157\151\165\x79\153\143\x6f\x75\145\151\165\x63\x67\143"], "\160\x65\162\x6d\x69\163\163\151\x6f\x6e\137\x63\141\154\154\142\x61\x63\153" => [$this, "\x61\x63\x6b\165\141\151\x67\151\157\143\163\x67\x79\x71\x77\x65"]]); goto euymeegkukskiowq; euymeegkukskiowq: $this->register("\57\x67\x65\x74\55\x69\164\145\x6d\163", ["\141\x72\147\163" => [self::TYPE => ["\x74\x79\160\145" => "\163\x74\x72\151\156\x67", "\x64\x65\x73\143\x72\151\x70\x74\x69\x6f\156" => __("\124\x79\x70\145\x20\157\146\40\143\157\155\x70\157\x6e\145\156\164", PR__PKG__COMPONENT_MANAGER)], self::PAGE => ["\164\x79\160\x65" => "\x69\156\164\145\147\x65\162"], self::SEARCH => ["\164\171\160\x65" => "\163\164\162\x69\156\x67"], self::CUSTOM => ["\x74\171\x70\145" => "\x62\x6f\x6f\x6c\x65\x61\x6e"], self::PER_PAGE => ["\164\171\x70\x65" => "\x69\156\x74\x65\147\145\x72"]], "\x6d\x65\164\150\157\144\x73" => self::READABLE, "\x63\x61\x6c\154\142\x61\x63\153" => [$this, "\x77\x61\x73\x67\167\163\x6f\x67\155\165\161\165\x71\x65\x61\x61"], "\x70\x65\x72\155\151\x73\163\x69\x6f\x6e\137\143\141\154\154\x62\x61\x63\153" => [$this, "\141\x63\x6b\x75\x61\x69\147\151\157\x63\163\x67\x79\161\167\145"]]); goto cquikgykuscqmigw; cyymeyomuakqakwo: } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { goto simkiasocoimioew; ksoawacwkgasqgmk: auaywaskqooasiuq: goto yqeqouqemksasmqc; omekuqkuugyocmoc: wgeueumgacuuuama: goto giuswooyckooaoms; cscskwugoamcmqyu: sieykcqauaygcais: goto emioyucskiowqumg; sguyyaygwyikaggk: goto gkwoqoeaecgkymeu; goto ayyyeiyaosoacoqm; iuaeeeeggkikuiig: $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::COMPONENT, ''); goto kmiqskugkmaiugae; uiqycwuommmmuowy: $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($uqigicauqkogsuuc); goto moqcomgmwiamuomq; iqamwyasyoqsugeu: $uqigicauqkogsuuc = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::COMPONENT_ID, 0); goto uiqycwuommmmuowy; oqsecqsucukywaee: ouaoyqugwsagkqaa: goto iqamwyasyoqsugeu; omgkuuyoiugcymmy: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\162\x72\x79\x2c\40\x59\157\x75\x20\156\157\x74\x20\x62\x75\x79\x20\x74\x68\x69\163\40\x63\x6f\x6d\x70\x6f\x6e\145\x6e\x74\x2c\x20\141\x72\x65\x20\171\x6f\165\40\164\x72\x79\151\156\x67\40\150\x61\x63\x6b\x3f", PR__PKG__COMPONENT_MANAGER)); goto kumuckkicykgwqqm; simkiasocoimioew: $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::LICENSE_KEY, ''); goto iuaeeeeggkikuiig; keewmqmgqegumiwa: goto auaywaskqooasiuq; goto oqsecqsucukywaee; moqcomgmwiamuomq: if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME == $wksoawcgagcgoask)) { goto uwscegkmmumymoaq; } goto omgkuuyoiugcymmy; eqemoayymokeqaqi: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x72\x72\171\x2c\40\131\157\165\x20\x6e\x6f\164\x20\x62\165\x79\40\x74\150\151\x73\x20\143\x6f\155\160\x6f\156\x65\156\164\56", PR__PKG__COMPONENT_MANAGER)); goto keewmqmgqegumiwa; aueiggyawkmkamum: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\157\x20\x64\157\155\141\x69\x6e\40\x66\157\165\x6e\144\40\146\x6f\x72\40\x79\x6f\165\56", PR__PKG__COMPONENT_MANAGER), 401); goto qswqmgiwiyyqwioa; wqieuwguumokgyqg: if ($keccaugmemegoimu) { goto wgeueumgacuuuama; } goto aueiggyawkmkamum; gkuwmiusoqwesqoo: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); goto wmsiqkyqsiysgcyy; ysggiwiksocomkek: $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\160\x69\x5f\x6b\145\x79"); goto wkqwywgikoyqkyeg; wcioaoeiiawwqqqq: goto sieykcqauaygcais; goto qaikeckkiwasykwk; qswqmgiwiyyqwioa: goto yukacyeckkwagusw; goto omekuqkuugyocmoc; emioyucskiowqumg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto jkaemsuwyyoamwim; ekmogkwmcqsykgsq: gkwoqoeaecgkymeu: goto ksoawacwkgasqgmk; ayyyeiyaosoacoqm: uwscegkmmumymoaq: goto aiwygewkmigcwusw; cykaikwsaskgeemo: if ($gmywaegkmeaueiyo) { goto ouaoyqugwsagkqaa; } goto eqemoayymokeqaqi; ieoiygycmseqmmgc: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); goto gkuwmiusoqwesqoo; yqeqouqemksasmqc: ewoqyogcaksucksk: goto wgaqkacekoyiwggi; giuswooyckooaoms: if (is_wp_error($keccaugmemegoimu)) { goto ewoqyogcaksucksk; } goto uogkcsaewswoaosw; cqemkecywkkwaaii: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\165\151\162\145\x20\x70\141\x72\141\x6d\x65\x74\145\162\x73\x20\x6e\157\164\40\x70\141\163\x73\x65\x64\56", PR__PKG__COMPONENT_MANAGER), 400); goto wcioaoeiiawwqqqq; wkqwywgikoyqkyeg: $keccaugmemegoimu = $swgwkyqkakceqeia->ogkgcwiskmoiweki($esuksqieigiqcaie, $iakkeikwceeomgyq); goto wqieuwguumokgyqg; wgaqkacekoyiwggi: yukacyeckkwagusw: goto cscskwugoamcmqyu; wmsiqkyqsiysgcyy: $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); goto ysggiwiksocomkek; qaikeckkiwasykwk: qgyaeoqgekocwkmw: goto ieoiygycmseqmmgc; kumuckkicykgwqqm: goto sguyyaygwyikaggk; miqmoasmioksggkm: $gmywaegkmeaueiyo = Purchase::symcgieuakksimmu()->oqomcmyuuakigusk([Purchase::LICENSE_KEY => $hsouuwoeemykcceu, Purchase::DOMAIN_ID => $akyiigeggqowmqqq]); goto cykaikwsaskgeemo; uogkcsaewswoaosw: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); goto miqmoasmioksggkm; aiwygewkmigcwusw: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\114\151\143\x65\x6e\x73\145\40\x4b\145\171\x20\151\163\40\166\x61\154\151\144\56", PR__PKG__COMPONENT_MANAGER), []); goto ekmogkwmcqsykgsq; kmiqskugkmaiugae: if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto qgyaeoqgekocwkmw; } goto cqemkecywkkwaaii; jkaemsuwyyoamwim: } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { goto qiqegseqwywcmwoe; akoweomooyuwamow: if ($wksoawcgagcgoask) { goto suwsiaeoumiwkiqg; } goto oaociaioauummsey; gcecamucuogcciig: suwsiaeoumiwkiqg: goto suscosoukqeyyqgs; iecqkqoiqimmisyw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto eogomkswkaqwyycm; qayiqaykkywcyisq: $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::TYPE, $gcswwqwyaccgyoee::IMAGE, $gcswwqwyaccgyoee::PRODUCT, $gcswwqwyaccgyoee::FA_TITLE, $gcswwqwyaccgyoee::EN_TITLE, $gcswwqwyaccgyoee::UPDATED_AT, $gcswwqwyaccgyoee::ACTIVE_INSTALL, $gcswwqwyaccgyoee::FA_DESCRIPTION, $gcswwqwyaccgyoee::EN_DESCRIPTION]); goto akoweomooyuwamow; aymoguycgmuggcik: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); goto qayiqaykkywcyisq; cueuscqkicwwicei: goto yoauoocuckogmsuw; goto gcecamucuogcciig; kikkkocywiyuyuqw: goto koiyaaokigmamqyc; goto aqeyqwuywqcmuoce; kwcscewawgicomok: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\x71\165\x69\162\145\40\x70\x61\162\141\x6d\145\x74\145\162\x73\x20\156\157\164\40\160\141\163\x73\x65\x64\x2e", PR__PKG__COMPONENT_MANAGER), 400); goto kikkkocywiyuyuqw; aqeyqwuywqcmuoce: amyaoueckysgmmas: goto aymoguycgmuggcik; qiqegseqwywcmwoe: $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); goto yosyyiksyyscacus; suscosoukqeyyqgs: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); goto kiewcwsykccgocuc; eysuawiooiswaseq: koiyaaokigmamqyc: goto iecqkqoiqimmisyw; kiewcwsykccgocuc: yoauoocuckogmsuw: goto eysuawiooiswaseq; oaociaioauummsey: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\162\145\161\x75\145\163\x74\x65\x64\x20\143\157\155\x70\x6f\156\145\156\x74\x20\x77\151\x74\x68\40\x6e\x61\x6d\x65\x20\x25\x73\40\156\x6f\x74\x20\146\x6f\x75\x6e\x64\x2e", PR__PKG__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 400); goto cueuscqkicwwicei; yosyyiksyyscacus: if ($ymqmyyeuycgmigyo) { goto amyaoueckysgmmas; } goto kwcscewawgicomok; eogomkswkaqwyycm: } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { goto msiuqseowuumiwuo; uwyeycaywowwiquu: $keccaugmemegoimu[self::ITEMS] = $oammesyieqmwuwyi; goto cwmuqmoeauqcewoy; gqycmyieayoegcsy: $uoomaookgsyciacm = []; goto sqiyuasgusgawuoi; guummoewucyeuiek: $uoomaookgsyciacm[$gcswwqwyaccgyoee::TYPE] = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::TYPE, "\x70\x61\x63\x6b\141\147\x65"); goto mqacqosyicuiqwia; akyiiioycmgqyuok: $uiewakwqscemywuo = ["\x62\x6f\x6f\x6c\x65\x61\156" => "\x6f\x72", "\157\160\145\162\141\164\x6f\162" => "\154\151\x6b\145", self::VALUE => "\45{$qwcmueausqgiwigy}\x25"]; goto ycomeuqeessamows; ieoeeyieoskuyiyw: euuekiyqwkowiees: goto ciiyqsiswkcwsocm; owiguescmqyqukui: egiauwuekseyeaeq: goto guummoewucyeuiek; soqkewsayowwcmco: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x65\162\166\x69\143\x65\x20\x69\x73\40\x75\x6e\141\x76\x61\151\154\x61\142\154\145\40\x72\x69\x67\x68\164\40\156\x6f\x77\x2e", PR__PKG__COMPONENT_MANAGER), 503); goto ukigmkeewuqomooc; ycomeuqeessamows: $uoomaookgsyciacm = [$gcswwqwyaccgyoee::NAME => $uiewakwqscemywuo, $gcswwqwyaccgyoee::FA_TITLE => $uiewakwqscemywuo, $gcswwqwyaccgyoee::EN_TITLE => $uiewakwqscemywuo]; goto owiguescmqyqukui; sqiyuasgusgawuoi: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); goto iayguaeseyaemwkk; kwowggaooiyqawyq: goto ieoeeyieoskuyiyw; mqacqosyicuiqwia: if (!$this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::CUSTOM, false)) { goto euuekiyqwkowiees; } goto mcuoyseuwoueyaie; ciiyqsiswkcwsocm: $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kqewyqqqiyiouaou($uoomaookgsyciacm); goto ugyawwukegyoqmsq; eiecgqokmuekaesc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto ggsugekocmsukuci; iayguaeseyaemwkk: if (!$qwcmueausqgiwigy) { goto egiauwuekseyeaeq; } goto akyiiioycmgqyuok; msiuqseowuumiwuo: $qwcmueausqgiwigy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::SEARCH, ''); goto gqycmyieayoegcsy; cwmuqmoeauqcewoy: esokkakkumskkmiu: goto eiecgqokmuekaesc; mcuoyseuwoueyaie: $uoomaookgsyciacm[$gcswwqwyaccgyoee::TYPE] = "\143\165\x73\x74\157\x6d"; goto kwowggaooiyqawyq; uugiuqkesegaamqw: $oammesyieqmwuwyi = $keccaugmemegoimu[self::ITEMS]; goto ykcmomsiayaymysm; qoaawmmcqyacokws: assoyoeukmqiucyq: goto uwyeycaywowwiquu; ykcmomsiayaymysm: foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $oammesyieqmwuwyi[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); kikkkoqiumqoeiyy: } goto qoaawmmcqyacokws; ukigmkeewuqomooc: goto esokkakkumskkmiu; goto wwgikwuigiiqsswq; ugyawwukegyoqmsq: if ($siykeiywomwwuoiw) { goto wyqueeskecameuks; } goto soqkewsayowwcmco; wwgikwuigiiqsswq: wyqueeskecameuks: goto seyygcwcaogkmaqe; seyygcwcaogkmaqe: $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, ["\146\151\x6c\x74\x65\162\x5f\166\x61\154\165\x65" => false, self::PAGE => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PAGE, 1), self::PER_PAGE => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PER_PAGE, 10)]); goto uugiuqkesegaamqw; ggsugekocmsukuci: } public function ieqymewceekuicei($igqsaukqcqscimok) { goto gcecieuocqawmgci; gscyiqmmegqmqcoe: kcwgiwimgqesukqu: goto mieoguuqiwqioeqa; maguoggkqamaiuag: wicuauokauykwoeu: goto icoiqskygugkgmkm; ikukqooiowqywyqo: $uwomkgseoiegeume = ["\162\x61\164\151\x6e\x67" => $product->get_average_rating(), "\x72\x61\164\x69\156\147\x5f\x63\157\165\156\164" => $product->get_rating_count(), self::PERMALINK => $product->get_permalink()]; goto cciakcwuweqmcose; uckusgwkoycmkeam: ceosmkqgqgwsowwg: goto gscyiqmmegqmqcoe; cciakcwuweqmcose: $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, $uwomkgseoiegeume); goto uckusgwkoycmkeam; swicauyqusmgeccu: $igqsaukqcqscimok[self::IMAGE] = ManipulateAttachment::mgaeeqsgeoukeokc($mcqieaigyeeyaksm); goto maguoggkqamaiuag; msmmiaumiasmsiog: $product = ManipulateArray::unset($igqsaukqcqscimok, self::PRODUCT); goto oksqsucimimsswcg; icoiqskygugkgmkm: return $igqsaukqcqscimok; goto kocaieyauyiqmyiy; kkckyqmcyussauma: if (!$product) { goto ceosmkqgqgwsowwg; } goto ikukqooiowqywyqo; mieoguuqiwqioeqa: $mcqieaigyeeyaksm = ManipulateArray::unset($igqsaukqcqscimok, self::IMAGE); goto qosswumywsaeyqus; qosswumywsaeyqus: if (!$mcqieaigyeeyaksm) { goto wicuauokauykwoeu; } goto swicauyqusmgeccu; gqeoaceyoiicoaec: $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto kkckyqmcyussauma; oksqsucimimsswcg: if (!$product) { goto kcwgiwimgqesukqu; } goto gqeoaceyoiicoaec; gcecieuocqawmgci: $igqsaukqcqscimok = (array) $igqsaukqcqscimok; goto msmmiaumiasmsiog; kocaieyauyiqmyiy: } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { goto gcqssckowmywoesw; eekkcooqswqouoei: $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\160\x69\x5f\x6b\x65\x79"); goto cuayqmasemsqsume; igmawmwssyskqqag: return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($gioggcykgoikcwiy); goto iomwkkieqcswkkaw; gcqssckowmywoesw: $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); goto eekkcooqswqouoei; cuayqmasemsqsume: $gioggcykgoikcwiy = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); goto igmawmwssyskqqag; iomwkkieqcswkkaw: } }
