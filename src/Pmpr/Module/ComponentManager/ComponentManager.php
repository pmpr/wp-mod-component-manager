<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669d713e7af9a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Model; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\ComponentManager\REST\REST; class ComponentManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\103\x6f\x6d\160\x6f\156\x65\x6e\164\40\115\x61\156\x61\147\145\162", PR__MDL__COMPONENT_MANAGER); }]); } public function mameiwsayuyquoeq() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto csammceowmqwaamq; } Ajax::symcgieuakksimmu(); csammceowmqwaamq: REST::symcgieuakksimmu(); Setting::symcgieuakksimmu(); PushUpdate::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\156\x5f\x69\x6e\x69\x74", [$this, "\x79\145\171\x69\147\x75\171\145\x67\155\x6d\x79\x75\163\145\x61"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\154\157\x67\151\x6e\137\x72\145\144\x69\162\145\143\164", "\x75\162\154\144\145\x63\x6f\144\145"); $this->aqaqisyssqeomwom("\160\154\x75\x67\151\x6e\137\x64\157\167\x6e\x6c\157\141\144\x5f\x62\x75\x74\164\157\156", [$this, "\145\x73\x65\x71\157\157\x75\171\167\151\x65\x67\155\157\165\x61"], 10, 2)->aqaqisyssqeomwom("\147\145\x74\137\x63\157\x6d\x70\157\156\145\156\164\x73\x5f\x62\171\x5f\x68\157\x73\164", [$this, "\x61\x63\161\x75\x63\x6b\x71\x65\165\151\145\147\143\161\x6d\x73"], 10, 2); } public function acquckqeuiegcqms(array $mqkkuqaimswumeww, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::squoamkioomemiyi => self::aqikuweekkucgqoy, self::ckiaowgkqoewoseo => '', self::aisguagukaewucii => self::ckmqoekmugkggeym]); $ksaameoqigiaoigg = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!($siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($ywmkwiwkosakssii[self::ckiaowgkqoewoseo], $uamcoiueqaamsqma, $ywmkwiwkosakssii[self::squoamkioomemiyi]))) { goto ugqwuugsweqgmywk; } $mqkkuqaimswumeww = $gcswwqwyaccgyoee->iiqauwkoiguyeawu($siykeiywomwwuoiw); switch ($ywmkwiwkosakssii[self::aisguagukaewucii]) { case self::uissasisiuymwsmu: case self::eoaiagsgqsmskugs: foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $ksaameoqigiaoigg[$gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask)] = $gcswwqwyaccgyoee->qogaqkcsogcqiaic($wksoawcgagcgoask, $gcswwqwyaccgyoee::wucysakokksokumi); gmwykkouysyaqwqm: } cogywoqcqummsyus: goto ocaguquugeamqckq; case self::kgmecoswscqqsymg: case self::ckmqoekmugkggeym: $ksaameoqigiaoigg = $mqkkuqaimswumeww; goto ocaguquugeamqckq; } eekcoeikaeaaeyii: ocaguquugeamqckq: ugqwuugsweqgmywk: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto uaukmuiwskcemcsw; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\x64\x6d\x69\x6e", $eygsasmqycagyayw->get("\x61\x64\x6d\151\x6e\56\152\x73"))->simswskycwagoeqy()); uaukmuiwskcemcsw: } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x64\157\155\141\151\156\x2d\155\141\x6e\141\x67\145\162")) { goto sockeswygwcskeuq; } Model::symcgieuakksimmu(); sockeswygwcskeuq: if (!$this->omseesogaocascyo("\160\x61\156\145\154")) { goto mkwkkmkgiqiamacc; } Panel::symcgieuakksimmu(); mkwkkmkgiqiamacc: if (!$this->omseesogaocascyo("\x73\x65\x63\165\x72\x69\164\x79")) { goto uaqackioaiqwcocy; } Security::symcgieuakksimmu(); uaqackioaiqwcocy: } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; if (!($mkysicwccoeicumg = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk))) { goto cscusseysqygsoiy; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->iuekyyeesukysksy()->wsoewyimgeueicci($mkysicwccoeicumg); cscusseysqygsoiy: return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\x6c\141\163\163" => "\164\145\x78\164\x2d\144\145\143\157\x72\x61\x74\151\x6f\156\55\156\157\x6e\x65", "\141\163\x2d\x62\165\164\164\157\x6e" => true, self::TEXT => '', self::waguuiqqgsysuukq => "\163\155", self::qgqyauaqwqmqseim => IconBrandInterface::cowoiyummsokycaq, self::igssuqwuicwawgam => "\151\x6e\x66\157"]); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if (!($mkysicwccoeicumg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk))) { goto cgyakcqgugqgkqiw; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x63\x6c\x61\x73\x73"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if (!$gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x61\163\x2d\x62\165\164\164\157\156")) { goto mggeqkcksyaymcsa; } $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::waguuiqqgsysuukq); $qoiwmokisgikggia = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\40\142\x74\156\x20\x62\x74\x6e\55{$qoiwmokisgikggia}\40\x62\164\x6e\55{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::qgqyauaqwqmqseim); if (!$wkaqekwwgqsqwcoi) { goto isgwkwacoyimiauk; } $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\141\x73\x73" => "\151\143\157\x6e\x2d\167\150\151\x74\x65\x20\151\143\x6f\x6e\x2d{$oiegiwogmwmawkeo}"], [self::kicoscymgmgqeqgy => true]); isgwkwacoyimiauk: mggeqkcksyaymcsa: $cmwygeyygwqaemaq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::TEXT); if ($cmwygeyygwqaemaq) { goto uegouoiuyoqkcscg; } $cmwygeyygwqaemaq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::wumiomcykccwmgei, __("\120\115\x50\x52\x20\120\x6c\165\x67\151\x6e", PR__MDL__COMPONENT_MANAGER)); uegouoiuyoqkcscg: $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\x63\154\141\163\163" => $iyiskikeoeeysmiw ? "\x70\154\55\62" : '']); $siquossayskcwkea = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\143\154\x61\x73\x73" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($ewgwqamkygiqaawc, $siquossayskcwkea); cgyakcqgugqgkqiw: return $iwywmkygwewiamwm; } }
