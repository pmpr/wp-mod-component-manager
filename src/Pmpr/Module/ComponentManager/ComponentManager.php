<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678aa15347d4f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Module\ComponentManager\Model\Campaign; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Installation; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Model\Report; use Pmpr\Module\ComponentManager\Model\Request; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\ComponentManager\REST\REST; class ComponentManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\103\157\155\160\x6f\x6e\x65\x6e\164\40\115\141\x6e\141\147\145\x72", PR__MDL__COMPONENT_MANAGER); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\x65\x66\x6f\162\145\137\145\156\161\x75\x65\x75\145\137\142\141\143\153\145\156\x64\137\141\163\x73\x65\164\163", [$this, "\145\x6e\x71\x75\145\165\145"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x6c\157\x67\151\156\x5f\162\145\x64\x69\x72\145\x63\x74", "\x75\x72\154\x64\145\143\157\x64\x65"); $this->aqaqisyssqeomwom("\160\154\165\147\151\156\137\144\157\167\156\154\157\x61\144\137\142\165\164\x74\157\156", [$this, "\x65\x73\145\x71\157\157\165\171\x77\x69\145\147\x6d\x6f\x75\x61"], 10, 2)->aqaqisyssqeomwom("\147\x65\x74\x5f\143\157\155\160\157\156\x65\156\164\163\x5f\x62\171\137\x68\157\x73\x74", [$this, "\x61\143\x71\165\x63\153\x71\x65\x75\x69\x65\147\143\x71\155\x73"], 10, 2)->aqaqisyssqeomwom("\147\x65\x74\x5f\x63\x6f\155\x70\157\156\145\x6e\164\137\x69\x6e\163\164\x61\x6c\x6c\141\164\151\157\x6e\137\x67\165\151\144\x65", [$this, "\153\161\167\x6f\x6d\x6b\x77\x69\x73\141\x6d\x67\147\141\x77\167"], 10, 2)->aqaqisyssqeomwom("\147\145\x74\x5f\143\x6f\155\x70\157\x6e\x65\x6e\164\x5f\151\x6e\163\x74\x61\154\154\x61\x74\x69\x6f\156\137\x67\x75\151\144\145\137\x6d\157\144\x61\154", [$this, "\141\161\163\x75\x67\x73\x6d\x73\153\x63\x65\x69\x6b\141\145\x65"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::ieicsweaowmycywa)) { Ajax::symcgieuakksimmu(); } REST::symcgieuakksimmu(); PushUpdate::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x64\157\x6d\x61\x69\156\x2d\x6d\x61\156\x61\x67\x65\162") && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { Component::symcgieuakksimmu(); Purchase::symcgieuakksimmu(); Report::symcgieuakksimmu(); Campaign::symcgieuakksimmu(); Installation::symcgieuakksimmu(); Request::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x70\x61\x6e\145\x6c")) { Panel::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x73\145\143\165\x72\x69\164\x79")) { Security::symcgieuakksimmu(); } } public function acquckqeuiegcqms(array $mqkkuqaimswumeww, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::aqikuweekkucgqoy, Constants::ckiaowgkqoewoseo => '', Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $ksaameoqigiaoigg = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($ywmkwiwkosakssii[Constants::ckiaowgkqoewoseo], $uamcoiueqaamsqma, $ywmkwiwkosakssii[Constants::squoamkioomemiyi])) { $mqkkuqaimswumeww = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw); switch ($ywmkwiwkosakssii[Constants::aisguagukaewucii]) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $ksaameoqigiaoigg[$gcswwqwyaccgyoee->mwyqswsaeeewsosm($wksoawcgagcgoask)] = $gcswwqwyaccgyoee->waecsyqmwascmqoa($wksoawcgagcgoask, $gcswwqwyaccgyoee::wucysakokksokumi); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: $ksaameoqigiaoigg = $mqkkuqaimswumeww; break; } } return $ksaameoqigiaoigg; } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\141\144\155\151\156", "\x61\144\x6d\x69\x6e\56\x6a\163")->okawmmwsiuauwsiu())->wwmusmkkcwsiciou($this, "\x61\152\141\170", Ajax::mucicoimkyqqioke); } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; if ($mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::iwseqweooieakqwk)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->yucssysgmisaquki($mkysicwccoeicumg); } return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\x6c\141\x73\x73" => "\164\145\170\x74\x2d\144\145\143\157\x72\x61\164\x69\x6f\x6e\55\x6e\x6f\156\145", "\x61\163\x2d\142\165\x74\x74\157\156" => true, Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::ykecciymmukkwucu, Constants::qgqyauaqwqmqseim => IconBrandInterface::cowoiyummsokycaq, Constants::igssuqwuicwawgam => Constants::smkwuwawwaqyimcq]); if ($mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::iwseqweooieakqwk)) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\154\141\163\x73"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\141\x73\55\x62\x75\x74\164\x6f\x6e")) { $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::waguuiqqgsysuukq); $qoiwmokisgikggia = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\x20\x62\x74\x6e\40\142\x74\156\x2d{$qoiwmokisgikggia}\40\x62\x74\x6e\55{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qgqyauaqwqmqseim); if ($wkaqekwwgqsqwcoi) { $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\x61\x73\163" => "\x69\x63\x6f\156\55\167\150\x69\164\x65\x20\151\x63\157\156\x2d{$oiegiwogmwmawkeo}"], [Constants::kicoscymgmgqeqgy => true]); } } $cmwygeyygwqaemaq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::TEXT); if (!$cmwygeyygwqaemaq) { $cmwygeyygwqaemaq = $this->weysguygiseoukqw(Setting::wumiomcykccwmgei, __("\x50\115\120\122\40\120\154\165\147\x69\x6e", PR__MDL__COMPONENT_MANAGER)); } $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\154\x61\x73\x73" => $iyiskikeoeeysmiw ? "\160\x6c\55\x32" : '']); $siquossayskcwkea = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\143\154\141\163\x73" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($ewgwqamkygiqaawc, $siquossayskcwkea); } return $iwywmkygwewiamwm; } public function kqwomkwisamggaww($iwamiguusayooguq, $wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return sprintf(__("\131\x6f\x75\x20\143\141\x6e\40\147\x65\x74\40\150\x65\x6c\160\40\146\162\157\155\40\164\150\x65\40\x25\x73\40\164\157\x20\151\x6e\163\x74\x61\x6c\x6c\x20\x74\150\145\40\45\163\x2e", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($quisksguegkuygus), $this->kmuweyayaqoeqiyw()->aqsugsmskceikaee($wksoawcgagcgoask)); } }
