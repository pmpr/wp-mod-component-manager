<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c027bf5a625             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Woocommerce\MultiStepSingleProduct; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\ComponentManager\Model\Model; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\ComponentManager\Panel\Panel; use Pmpr\Package\ComponentManager\REST\REST; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use WC_Order_Item_Product; use WC_Product_Variation; class ComponentManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\167\x6f\x6f\x63\157\155\x6d\145\162\143\x65\137\166\x61\162\151\x61\164\x69\x6f\x6e\137\x69\156\144\151\x63\141\x74\x6f\162\x5f\146\151\145\154\x64\x5f\x6f\x70\x74\x69\x6f\x6e\x73"), [$this, "\171\x6d\x6f\x67\x6b\155\x63\x77\143\x6d\x67\141\x75\143\x61\x79"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x70\x6c\x75\147\x69\x6e\x5f\144\x6f\x77\156\154\x6f\x61\x64\137\x62\165\164\x74\x6f\x6e"), [$this, "\x65\163\145\161\157\157\x75\171\167\151\145\x67\155\x6f\165\141"], 10, 2); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\x5f\x6d\x65\x6e\x75", [$this, "\x65\165\161\x67\167\151\163\143\x77\x67\x71\153\161\x6b\x65\143"], 1)->qcsmikeggeemccuu("\x70\154\x75\147\x69\156\163\137\154\x6f\141\144\145\x64", [$this, "\161\x6d\155\x75\x6f\x65\x6b\161\145\153\x71\x71\x75\143\155\155"])->qcsmikeggeemccuu("\167\157\157\143\157\155\x6d\145\x72\143\x65\x5f\x61\x66\164\x65\x72\x5f\x6f\162\144\x65\162\137\144\145\164\141\x69\x6c\163\x5f\x69\164\145\155", [$this, "\x65\x6f\x75\161\x6b\171\x77\167\163\x71\x75\x79\x61\147\x67\x6d"], 10, 3); } public function iemaakgqgqosiecm() { if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto ykomgumacooyomsk; } Ajax::symcgieuakksimmu(); ykomgumacooyomsk: REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); } public function soaaswucwaeokauk() { if (!$this->omseesogaocascyo("\x50\141\156\x65\154")) { goto mqkmcysgoiaouiwm; } Panel::symcgieuakksimmu(); mqkmcysgoiaouiwm: if (!$this->omseesogaocascyo("\123\x61\154\x61\162\x79")) { goto kosaqwikueyksqmw; } Salary::symcgieuakksimmu(); kosaqwikueyksqmw: } public function ymogkmcwcmgaucay($qiouiwasaauyaaue) { $qiouiwasaauyaaue[Product::INDICATOR_REQUIRE_FOR_BUY] = __("\x52\x65\x71\165\151\162\x65\40\x66\x6f\x72\x20\x62\165\x79"); $qiouiwasaauyaaue[Product::INDICATOR_NOT_ADDABLE_BY_USER] = __("\x4e\157\164\x20\x61\144\144\141\x62\154\x65\40\142\171\x20\x75\x73\145\x72"); return $qiouiwasaauyaaue; } public function eouqkywwsquyaggm($product, $umwqusowiqmyseom, $cawesmkieccckaae) { if ($product instanceof WC_Product_Variation) { goto gicyayswqyuoekcq; } $eoioyuyammuoecgs = ManipulateWoocommerce::omwkqcuwceweymcc($product); goto iikiiioqiyegyaak; gicyayswqyuoekcq: $eoioyuyammuoecgs = $product->get_parent_id(); $product = ManipulateWoocommerce::aqasygcsqysmmyke($eoioyuyammuoecgs); iikiiioqiyegyaak: $icwicymcioeyeyek = []; $gukqamyquokaeeai = Product::symcgieuakksimmu(); if (!$cawesmkieccckaae instanceof WC_Order_Item_Product) { goto uiosisocuwokwkie; } $icwicymcioeyeyek = $cawesmkieccckaae->get_meta($gukqamyquokaeeai::MULTI_STEP_METADATA); uiosisocuwokwkie: $wiiucqsygckgwcia = $gukqamyquokaeeai->gugmsucsyeywucoe(ManipulateArray::get($icwicymcioeyeyek, self::weayyoewessosyko)); if (!($eoioyuyammuoecgs && $wiiucqsygckgwcia)) { goto csammceowmqwaamq; } $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->akkkoiiymmamsauc($eoioyuyammuoecgs, $gcswwqwyaccgyoee::oguseymmyyoyaako); if (!$wksoawcgagcgoask) { goto qmkaeeomgkwggoyo; } $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::DOMAIN_ID => ManipulateArray::get($wiiucqsygckgwcia, self::gouqcwikiiygyasc), $yakcyegsoqusmiak::COMPONENT_ID => $gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask)]); $mokawwccycoiqeka = $yakcyegsoqusmiak->iscemaoqqckmkago($yakcyegsoqusmiak::DOMAIN_ID, $gmywaegkmeaueiyo); $mkysicwccoeicumg = $this->eseqoouywiegmoua('', ["\x61\x73\55\142\165\x74\164\x6f\x6e" => false]); $esuksqieigiqcaie = ManipulateArray::get($mokawwccycoiqeka, Domain::API_KEY); $caicqiiuwsyaeeko = ManipulateArray::get($gmywaegkmeaueiyo, Purchase::LICENSE_KEY); $smqkocasociqsgai = ManipulateHTML::ciuuiyckmsygceis($product->get_title(), ["\143\x6c\141\163\163" => "\x70\x78\55\61"]); $oammesyieqmwuwyi = [sprintf(__("\x44\157\167\156\154\x6f\x61\144\40\x61\x6e\x64\40\111\x6e\x73\164\141\x6c\154\40\x25\163\40\157\156\x20\45\x73", PR__PKG__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($mkysicwccoeicumg), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm, ''))), sprintf(__("\101\x50\111\x20\113\x65\171\40\45\163\40\151\x6e\40\160\154\x75\147\x69\156\x20\x73\145\x74\x74\x69\x6e\x67", PR__PKG__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($esuksqieigiqcaie, ["\143\x6c\141\163\x73" => "\160\170\x2d\x31"])), sprintf(__("\x49\x6e\163\x74\141\154\154\40\x25\163\40\x66\x72\x6f\x6d\40\160\154\x75\147\151\156", PR__PKG__COMPONENT_MANAGER), $smqkocasociqsgai), sprintf(__("\x4c\151\x63\x65\156\x73\145\40\x4b\x65\171\40\45\x73\40\151\x6e\40\x73\145\164\164\151\x6e\x67\40\x6f\x66\40\45\163", PR__PKG__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($caicqiiuwsyaeeko, ["\x63\x6c\x61\x73\x73" => "\160\x78\x2d\x31"]), $smqkocasociqsgai)]; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $oammesyieqmwuwyi[$momcykaoccoymeig] = ManipulateHTML::uuccukgasskgimsq("\154\151", ["\143\x6c\x61\x73\x73" => "\x6c\x69\163\x74\55\x67\162\x6f\x75\160\x2d\x69\x74\x65\155\40\x62\x67\x2d\x74\162\x61\x6e\163\160\141\162\x65\156\x74\40\x70\x78\55\x30"], "{$this->msywmyaoqmaegsuy($momcykaoccoymeig + 1)}\x2e\40{$igqsaukqcqscimok}"); gcckqucukawcasgk: } cuumeogeomowqisc: echo ManipulateBootstrap::oockkqiqsssakuug(ManipulateHTML::uuccukgasskgimsq("\x6f\x6c", ["\x63\154\141\x73\x73" => "\x6c\x69\x73\x74\x2d\147\x72\157\165\160\x20\154\151\x73\164\55\147\x72\157\165\160\55\x66\154\165\163\150"], $oammesyieqmwuwyi), self::ecioqysekgaasegg, ["\143\x6c\141\x73\x73" => "\x6d\164\x2d\x33\x20\155\x62\55\60\40\x70\171\55\60"], false); qmkaeeomgkwggoyo: csammceowmqwaamq: } public function qmmuoekqekqqucmm() { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $mqkkuqaimswumeww = $gcswwqwyaccgyoee->kasiqqyyaswsgics(); foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $this->uygsiyawaaswimwa($wksoawcgagcgoask); eekcoeikaeaaeyii: } ocaguquugeamqckq: } public function uygsiyawaaswimwa($wksoawcgagcgoask) : ?Product { $aokagokqyuysuksm = ManipulateArray::get($wksoawcgagcgoask, Component::symcgieuakksimmu()->kumuygiiqswoyasy()); $product = ManipulateArray::get($wksoawcgagcgoask, Component::oguseymmyyoyaako); $qmoucmaugmeokuww = null; if (!$product) { goto gmwykkouysyaqwqm; } $qmoucmaugmeokuww = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\157\155\160\x6f\x6e\x65\156\x74\137\155\165\154\x74\151\137\x73\x74\x65\x70\137\160\162\x6f\x64\165\143\164\137\157\142\152\x65\x63\164"), null, $aokagokqyuysuksm, $product); if ($qmoucmaugmeokuww instanceof MultiStepSingleProduct) { goto cogywoqcqummsyus; } $qmoucmaugmeokuww = Product::ocmycskcuiawkecq($product, $aokagokqyuysuksm, $product); cogywoqcqummsyus: gmwykkouysyaqwqm: return $qmoucmaugmeokuww; } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\x70\x61\x67\145\x5f\x74\151\164\x6c\x65" => __("\x43\157\155\160\x6f\156\145\x6e\164\x20\x4d\x61\x6e\141\147\145\x72", PR__PKG__COMPONENT_MANAGER), "\x6d\x65\156\165\137\163\154\x75\147" => $this->akuociswqmoigkas(), "\160\x6f\163\x69\164\x69\x6f\156" => 1]); } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; $mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::PLUGIN_GUIDE_FILE); if (!$mkysicwccoeicumg) { goto ugqwuugsweqgmywk; } $iwywmkygwewiamwm = ManipulateFile::yucssysgmisaquki($mkysicwccoeicumg); ugqwuugsweqgmywk: return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\143\154\x61\x73\163" => "\164\x65\x78\x74\x2d\x64\x65\x63\x6f\x72\141\x74\x69\157\x6e\x2d\156\157\x6e\145", "\141\163\55\142\165\x74\164\157\x6e" => true, self::TEXT => '', self::waguuiqqgsysuukq => "\x73\155", self::qgqyauaqwqmqseim => IconBrandInterface::ICON_WORDPRESS, self::igssuqwuicwawgam => "\151\x6e\x66\157"]); $mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::PLUGIN_GUIDE_FILE . self::_ID); if (!$mkysicwccoeicumg) { goto uaqackioaiqwcocy; } $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, "\x63\x6c\x61\x73\163"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if (!ManipulateArray::get($ywmkwiwkosakssii, "\x61\x73\x2d\142\165\x74\x74\157\156")) { goto sockeswygwcskeuq; } $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, self::waguuiqqgsysuukq); $qoiwmokisgikggia = ManipulateArray::get($ywmkwiwkosakssii, self::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\x20\x62\x74\156\40\142\164\x6e\55{$qoiwmokisgikggia}\40\142\x74\x6e\55{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::qgqyauaqwqmqseim); if (!$wkaqekwwgqsqwcoi) { goto uaukmuiwskcemcsw; } $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\141\163\x73" => "\x69\143\157\156\55\x77\150\151\164\x65\40\x69\143\x6f\x6e\55{$oiegiwogmwmawkeo}"], true); uaukmuiwskcemcsw: sockeswygwcskeuq: $cmwygeyygwqaemaq = ManipulateArray::get($ywmkwiwkosakssii, self::TEXT); if ($cmwygeyygwqaemaq) { goto mkwkkmkgiqiamacc; } $cmwygeyygwqaemaq = $this->weysguygiseoukqw(Setting::PLUGIN_GUIDE_BUTTON, __("\x50\115\120\122\x20\120\x6c\165\147\151\156", PR__PKG__COMPONENT_MANAGER)); mkwkkmkgiqiamacc: $ewgwqamkygiqaawc[] = ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\x63\154\x61\x73\163" => $iyiskikeoeeysmiw ? "\x70\x6c\55\x32" : '']); $siquossayskcwkea = ManipulateAttachment::wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\x63\154\141\x73\163" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = ManipulateHTML::uuccukgasskgimsq("\141", $siquossayskcwkea, $ewgwqamkygiqaawc); uaqackioaiqwcocy: return $iwywmkygwewiamwm; } }
