<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624e9ae87352a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Woocommerce\MultiStepSingleProduct; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Model; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Packagist\Packagist; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\REST\REST; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use WC_Order_Item_Product; use WC_Product_Variation; class ComponentManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto oyiuemaaykgkqqam; } parent::__construct(); $this->iemaakgqgqosiecm(); oyiuemaaykgkqqam: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x77\x6f\x6f\x63\x6f\155\155\x65\162\x63\145\x5f\166\x61\162\x69\x61\164\151\x6f\x6e\137\x69\156\x64\151\x63\x61\x74\x6f\162\137\146\151\x65\154\144\x5f\x6f\x70\164\x69\x6f\156\163"), [$this, "\171\155\x6f\x67\153\x6d\x63\167\x63\x6d\x67\x61\x75\143\x61\x79"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x70\x6c\165\147\x69\x6e\137\144\157\x77\x6e\154\157\141\144\x5f\x62\165\164\x74\x6f\156"), [$this, "\145\x73\x65\x71\157\157\165\x79\167\x69\x65\x67\155\x6f\165\x61"], 10, 2); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\x5f\x69\156\x69\x74", [$this, "\171\x65\x79\x69\147\165\x79\145\147\x6d\155\171\x75\163\145\141"])->qcsmikeggeemccuu("\x61\x64\155\151\x6e\x5f\x6d\x65\156\x75", [$this, "\x65\165\161\x67\x77\151\163\x63\x77\x67\161\x6b\x71\153\x65\x63"])->qcsmikeggeemccuu("\160\x6c\x75\147\151\x6e\x73\137\x6c\157\x61\144\145\144", [$this, "\x71\x6d\x6d\x75\x6f\x65\x6b\161\145\153\161\x71\x75\143\155\155"])->qcsmikeggeemccuu("\x77\157\157\x63\x6f\155\x6d\145\162\x63\145\x5f\141\x66\164\x65\162\x5f\157\x72\144\145\x72\137\144\145\164\x61\x69\154\163\137\151\164\145\x6d", [$this, "\145\157\x75\161\153\171\x77\x77\163\x71\x75\171\141\147\x67\155"], 10, 3); } public function yeyiguyegmmyusea() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($eygsasmqycagyayw && ManipulateQuery::euqowsuwmgokuqqo())) { goto gqmewagyagamokok; } $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\144\x6d\151\156", $eygsasmqycagyayw->get("\141\144\155\151\156\56\x6a\163"))->simswskycwagoeqy()); gqmewagyagamokok: } public function iemaakgqgqosiecm() { if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto sqmoqymckwsogsqg; } Ajax::symcgieuakksimmu(); sqmoqymckwsogsqg: REST::symcgieuakksimmu(); Packagist::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x64\x6f\x6d\141\151\156\x2d\x6d\x61\x6e\141\147\145\162")) { goto uycesqqkoeamocgm; } Model::symcgieuakksimmu(); uycesqqkoeamocgm: if (!$this->omseesogaocascyo("\120\141\156\x65\154")) { goto ceiwqkyquikcemmo; } Panel::symcgieuakksimmu(); ceiwqkyquikcemmo: if (!$this->omseesogaocascyo("\x53\x61\154\x61\162\x79")) { goto ukomuiwukymcoaso; } Salary::symcgieuakksimmu(); ukomuiwukymcoaso: } public function ymogkmcwcmgaucay($qiouiwasaauyaaue) { $qiouiwasaauyaaue[Product::keiqoyskgcaaiyuw] = __("\x52\x65\161\165\151\x72\x65\40\x66\x6f\x72\40\x62\x75\171", PR__MDL__COMPONENT_MANAGER); $qiouiwasaauyaaue[Product::smsioacowoikwikc] = __("\116\x6f\164\40\141\144\x64\141\x62\154\145\x20\x62\x79\x20\165\163\145\162", PR__MDL__COMPONENT_MANAGER); return $qiouiwasaauyaaue; } public function eouqkywwsquyaggm($product, $umwqusowiqmyseom, $cawesmkieccckaae) { if ($product instanceof WC_Product_Variation) { goto wkgskiuiukiuyque; } $eoioyuyammuoecgs = ManipulateWoocommerce::omwkqcuwceweymcc($product); goto oyiuyywyeoskckuw; wkgskiuiukiuyque: $eoioyuyammuoecgs = $product->get_parent_id(); $product = ManipulateWoocommerce::aqasygcsqysmmyke($eoioyuyammuoecgs); oyiuyywyeoskckuw: $icwicymcioeyeyek = []; $gukqamyquokaeeai = Product::symcgieuakksimmu(); if (!$cawesmkieccckaae instanceof WC_Order_Item_Product) { goto goqmywuiicciasyk; } $icwicymcioeyeyek = $cawesmkieccckaae->get_meta($gukqamyquokaeeai::gyeeyigiiewaqyyo); goqmywuiicciasyk: $wiiucqsygckgwcia = $gukqamyquokaeeai->gugmsucsyeywucoe(ManipulateArray::get($icwicymcioeyeyek, self::weayyoewessosyko)); if (!($eoioyuyammuoecgs && $wiiucqsygckgwcia)) { goto yuqgwwmqwqiuwmaw; } $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->akkkoiiymmamsauc($eoioyuyammuoecgs, $gcswwqwyaccgyoee::oguseymmyyoyaako); if (!$wksoawcgagcgoask) { goto easqmyamcmeesgya; } $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::qkmqmaeuyokqgemg => ManipulateArray::get($wiiucqsygckgwcia, self::gouqcwikiiygyasc), $yakcyegsoqusmiak::ogqcgemayqiaucag => $gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask)]); $mokawwccycoiqeka = $yakcyegsoqusmiak->iscemaoqqckmkago($yakcyegsoqusmiak::qkmqmaeuyokqgemg, $gmywaegkmeaueiyo); $mkysicwccoeicumg = $this->eseqoouywiegmoua('', ["\x61\163\x2d\x62\x75\164\164\x6f\156" => false]); $esuksqieigiqcaie = ManipulateArray::get($mokawwccycoiqeka, Domain::igswcauwsgmeougs); $caicqiiuwsyaeeko = ManipulateArray::get($gmywaegkmeaueiyo, Purchase::okkqqmwseqscceye); $smqkocasociqsgai = ManipulateHTML::ciuuiyckmsygceis($product->get_title(), ["\x63\x6c\x61\x73\163" => "\x70\170\55\x31"]); $oammesyieqmwuwyi = [sprintf(__("\104\x6f\x77\x6e\154\157\141\144\x20\x61\x6e\x64\x20\x49\156\x73\x74\x61\154\154\x20\x25\163\40\x6f\156\40\45\x73", PR__MDL__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($mkysicwccoeicumg), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm, ''))), sprintf(__("\101\x50\111\40\113\145\171\40\45\163\x20\151\156\x20\160\x6c\x75\x67\x69\x6e\x20\163\x65\x74\164\x69\156\x67", PR__MDL__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($esuksqieigiqcaie, ["\x63\154\x61\x73\x73" => "\160\170\x2d\x31"])), sprintf(__("\x49\156\x73\164\x61\x6c\154\x20\45\x73\x20\146\162\157\x6d\40\160\154\x75\x67\x69\156", PR__MDL__COMPONENT_MANAGER), $smqkocasociqsgai), sprintf(__("\x4c\151\143\145\156\x73\145\x20\113\145\171\40\45\x73\40\151\156\40\163\x65\164\164\x69\x6e\147\x20\157\x66\40\x25\x73", PR__MDL__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($caicqiiuwsyaeeko, ["\143\154\x61\163\x73" => "\x70\x78\55\61"]), $smqkocasociqsgai)]; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $oammesyieqmwuwyi[$momcykaoccoymeig] = ManipulateHTML::uuccukgasskgimsq("\154\x69", ["\143\154\x61\x73\163" => "\x6c\151\163\x74\x2d\x67\x72\157\x75\x70\55\x69\164\x65\155\x20\x62\147\x2d\x74\x72\141\156\x73\160\x61\x72\145\156\x74\x20\160\170\55\x30"], "{$this->msywmyaoqmaegsuy($momcykaoccoymeig + 1)}\x2e\x20{$igqsaukqcqscimok}"); qkuiwoqksgayqqmg: } siecswkggyikqkga: echo ManipulateBootstrap::oockkqiqsssakuug(ManipulateHTML::uuccukgasskgimsq("\x6f\154", ["\143\154\141\163\x73" => "\154\x69\x73\x74\55\147\x72\x6f\x75\x70\x20\154\x69\x73\164\55\147\x72\157\165\160\x2d\x66\154\165\x73\x68"], $oammesyieqmwuwyi), self::ecioqysekgaasegg, ["\x63\x6c\141\163\163" => "\x6d\x74\x2d\63\40\155\x62\55\60\x20\160\171\x2d\60"], false); easqmyamcmeesgya: yuqgwwmqwqiuwmaw: } public function qmmuoekqekqqucmm() { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!$gcswwqwyaccgyoee) { goto yamyagayiooyeekg; } $mqkkuqaimswumeww = $gcswwqwyaccgyoee->kasiqqyyaswsgics(); if (!is_array($mqkkuqaimswumeww)) { goto iksewmsaugayqaqq; } foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $this->uygsiyawaaswimwa($wksoawcgagcgoask); smiemmcqqukyguuu: } quaqmuusokiyqgqe: iksewmsaugayqaqq: yamyagayiooyeekg: } public function uygsiyawaaswimwa($wksoawcgagcgoask) : ?Product { $aokagokqyuysuksm = ManipulateArray::get($wksoawcgagcgoask, Component::symcgieuakksimmu()->kumuygiiqswoyasy()); $product = ManipulateArray::get($wksoawcgagcgoask, Component::oguseymmyyoyaako); $qmoucmaugmeokuww = null; if (!$product) { goto eckcqesiokgwkkiw; } $qmoucmaugmeokuww = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\155\160\x6f\x6e\x65\x6e\164\x5f\155\x75\x6c\x74\x69\137\x73\164\x65\160\137\160\x72\157\x64\165\143\164\x5f\x6f\142\152\x65\x63\164"), null, $aokagokqyuysuksm, $product); if ($qmoucmaugmeokuww instanceof MultiStepSingleProduct) { goto yoagcooekomeokwg; } $qmoucmaugmeokuww = Product::ocmycskcuiawkecq($product, $aokagokqyuysuksm, $product); yoagcooekomeokwg: eckcqesiokgwkkiw: return $qmoucmaugmeokuww; } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\x70\141\147\x65\137\x74\151\164\154\145" => __("\103\157\155\x70\157\x6e\x65\x6e\164\40\115\x61\156\x61\147\x65\162", PR__MDL__COMPONENT_MANAGER), "\x6d\x65\156\165\137\163\154\x75\x67" => $this->akuociswqmoigkas(), "\160\157\x73\151\x74\151\157\156" => 1]); } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; $mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::iwseqweooieakqwk); if (!$mkysicwccoeicumg) { goto ecouwqosmoyyqmkw; } $iwywmkygwewiamwm = ManipulateFile::yucssysgmisaquki($mkysicwccoeicumg); ecouwqosmoyyqmkw: return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\143\154\141\x73\163" => "\x74\x65\x78\164\x2d\x64\145\x63\157\162\141\x74\151\x6f\156\x2d\156\x6f\x6e\145", "\x61\163\55\x62\x75\164\164\x6f\156" => true, self::TEXT => '', self::waguuiqqgsysuukq => "\163\155", self::qgqyauaqwqmqseim => IconBrandInterface::eiiymsemgagwygeg, self::igssuqwuicwawgam => "\x69\156\146\157"]); $mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::iwseqweooieakqwk . self::mswocgcucqoaesaa); if (!$mkysicwccoeicumg) { goto skuqigsokaguscas; } $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, "\x63\154\x61\163\x73"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if (!ManipulateArray::get($ywmkwiwkosakssii, "\141\163\x2d\142\x75\164\x74\x6f\x6e")) { goto qmoocweoekqueuyy; } $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, self::waguuiqqgsysuukq); $qoiwmokisgikggia = ManipulateArray::get($ywmkwiwkosakssii, self::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\40\142\x74\156\x20\142\164\156\55{$qoiwmokisgikggia}\40\142\x74\x6e\x2d{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::qgqyauaqwqmqseim); if (!$wkaqekwwgqsqwcoi) { goto mqiiqkuaoekeuswo; } $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\141\x73\163" => "\151\143\157\x6e\55\167\x68\x69\x74\x65\40\151\x63\157\156\x2d{$oiegiwogmwmawkeo}"], ["\x6d\x61\162\x6b\165\x70" => true]); mqiiqkuaoekeuswo: qmoocweoekqueuyy: $cmwygeyygwqaemaq = ManipulateArray::get($ywmkwiwkosakssii, self::TEXT); if ($cmwygeyygwqaemaq) { goto sgiwoiscywusgmmm; } $cmwygeyygwqaemaq = $this->weysguygiseoukqw(Setting::wumiomcykccwmgei, __("\x50\115\x50\122\x20\120\x6c\x75\147\x69\156", PR__MDL__COMPONENT_MANAGER)); sgiwoiscywusgmmm: $ewgwqamkygiqaawc[] = ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\154\141\x73\x73" => $iyiskikeoeeysmiw ? "\160\x6c\x2d\x32" : '']); $siquossayskcwkea = ManipulateAttachment::wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\x63\x6c\141\163\163" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = ManipulateHTML::uuccukgasskgimsq("\141", $siquossayskcwkea, $ewgwqamkygiqaawc); skuqigsokaguscas: return $iwywmkygwewiamwm; } }
