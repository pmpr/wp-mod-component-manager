<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a7f087afa             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Setting extends BaseClass { const GOTO_AFTER_ADD_TO_CART = "\x67\x6f\x74\x6f\137\141\x66\x74\x65\162\137\x61\x64\x64\x5f\164\x6f\137\143\141\x72\x74"; const BACKLINK_ = "\142\x61\143\153\154\151\x6e\x6b\137"; const BACKLINK_TITLE = self::BACKLINK_ . self::TITLE; const BACKLINK_IMAGE = self::BACKLINK_ . self::IMAGE; const BACKLINK_ALERT = self::BACKLINK_ . self::ALERT; const PLUGIN_GUIDE_ = "\160\154\165\147\x69\x6e\x5f\147\x75\151\144\x65\137"; const PLUGIN_GUIDE_LINK = self::PLUGIN_GUIDE_ . self::LINK; const PLUGIN_GUIDE_TITLE = self::PLUGIN_GUIDE_ . self::TITLE; const PLUGIN_GUIDE_BUTTON = self::PLUGIN_GUIDE_ . self::BUTTON; const PLUGIN_GUIDE_DESCRIPTION = self::PLUGIN_GUIDE_ . self::DESCRIPTION; const CART = "\x63\x61\162\x74"; const SINGLE = "\x73\151\x6e\147\154\145"; const CHECKOUT = "\x63\x68\145\x63\153\157\165\x74"; public function __construct() { goto qwiyicoywcekgyce; ocwouquuwsaqakae: parent::__construct(); goto gcaykgmmmqomsyis; qwiyicoywcekgyce: $wksoawcgagcgoask = self::akuociswqmoigkas(); goto tagquiiokseckkqs; swuggqyiaiqywgge: $this->hasLicense = false; goto ocwouquuwsaqakae; qoacckkkwsqkokye: $this->parentMenu = $wksoawcgagcgoask; goto swuggqyiaiqywgge; tagquiiokseckkqs: $this->name = $wksoawcgagcgoask; goto qoacckkkwsqkokye; gcaykgmmmqomsyis: } public function gogaagekwoisaqgu() { goto yccuomocgmewkeca; kmseiouukkqiumum: parent::gogaagekwoisaqgu(); goto syuywgysqyckcqay; suiywiakesiegcwu: $this->menuTitle = __("\x53\x65\164\x74\x69\x6e\147", PR__PKG__COMPONENT_MANAGER); goto kmseiouukkqiumum; yccuomocgmewkeca: $this->pageTitle = __("\x43\157\x6d\x70\157\x6e\x65\x6e\164\40\x4d\141\156\x61\x67\x65\162\40\123\145\x74\x74\151\156\147", PR__PKG__COMPONENT_MANAGER); goto suiywiakesiegcwu; syuywgysqyckcqay: } public function ecwgiiuacoaokqkw() { goto ggewkaiwwgkmkwgc; kkieqqwwascekcmo: $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\137\155\x75\x6c\164\x69\x5f\163\x74\145\160", __("\115\165\x6c\x74\151\40\x53\164\145\x70", PR__PKG__COMPONENT_MANAGER))->sikqggwmmykuiymy(self::cgygmuguceeosoey($ymqmyyeuycgmigyo . self::_GENERAL, __("\x47\x65\x6e\145\162\141\154", PR__PKG__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::GOTO_AFTER_ADD_TO_CART, __("\x47\x6f\40\x74\157\40\x41\146\164\x65\162\40\101\144\144\40\164\x6f\x20\103\141\x72\164", PR__PKG__COMPONENT_MANAGER), [self::SINGLE => __("\120\162\157\x64\x75\143\x74\40\x53\151\x6e\147\x6c\145", PR__PKG__COMPONENT_MANAGER), self::CART => __("\103\141\162\x74", PR__PKG__COMPONENT_MANAGER), self::CHECKOUT => __("\x43\150\145\143\x6b\157\x75\164", PR__PKG__COMPONENT_MANAGER)])->eumecwmqmukqgyea()->eyygsasuqmommkua(self::SINGLE))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->sikqggwmmykuiymy(self::cgygmuguceeosoey($ymqmyyeuycgmigyo . "\x5f\163\164\x65\160\163", __("\x53\164\x65\x70\x73\40\x64\x61\164\141", PR__PKG__COMPONENT_MANAGER))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\x6f\162\x64\x65\162\x5f\164\171\x70\x65", sprintf(__("\45\163\40\123\164\x65\x70", PR__PKG__COMPONENT_MANAGER), __("\117\x72\x64\x65\162\x20\124\171\x70\x65", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::PLUGIN_GUIDE_TITLE, __("\120\154\x75\147\151\x6e\x20\107\x75\x69\144\x65\40\124\x69\x74\154\x65", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::PLUGIN_GUIDE_LINK, __("\120\x6c\165\147\x69\x6e\40\x47\165\x69\144\x65\x20\x54\x69\x74\x6c\x65", PR__PKG__COMPONENT_MANAGER))->xkgcwkwsqysqamic())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::PLUGIN_GUIDE_BUTTON, __("\x50\154\x75\x67\151\x6e\40\107\165\151\144\x65\40\102\165\164\x74\157\x6e\x20\124\x65\x78\x74", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::PLUGIN_GUIDE_DESCRIPTION, __("\120\154\165\x67\x69\156\40\x47\x75\x69\x64\145\x20\104\x65\163\x63\162\x69\x70\x74\151\x6f\x6e", PR__PKG__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3))->saemoowcasogykak(IconFontawesomeInterface::ICON_SQUARE_1))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\x61\144\144\x5f\x74\x6f\137\x63\141\162\x74", sprintf(__("\45\x73\x20\123\164\x65\160", PR__PKG__COMPONENT_MANAGER), __("\x41\x64\144\x20\x74\157\x20\103\x61\x72\164", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::BACKLINK_TITLE, __("\x42\141\x63\153\x6c\151\x6e\153\x20\124\151\x74\154\145", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::BACKLINK_IMAGE, __("\102\x61\143\x6b\154\151\156\153\40\x49\x6d\141\147\145", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::BACKLINK_ALERT, __("\x42\x61\143\153\x6c\x69\x6e\153\x20\101\154\145\162\x74", PR__PKG__COMPONENT_MANAGER))->eyygsasuqmommkua(__("\x69\146\x20\162\145\x6d\x6f\166\x65\x20\151\x74\x20\x66\162\x6f\x6d\x20\171\x6f\165\162\40\x70\141\x67\145\54\40\x79\x6f\165\x72\40\x61\143\x63\157\165\x6e\164\x20\151\163\40\142\x61\156\156\145\144\x2e", PR__PKG__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3))->saemoowcasogykak(IconFontawesomeInterface::ICON_SQUARE_4))->saemoowcasogykak(IconFontawesomeInterface::ICON_FORWARD_STEP))->saemoowcasogykak(IconFontawesomeInterface::ICON_RECTANGLE_VERTICAL_HISTORY)); goto ycueoqkeakismiqw; ggewkaiwwgkmkwgc: $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); goto kkieqqwwascekcmo; ycueoqkeakismiqw: parent::ecwgiiuacoaokqkw(); goto awimwukcyiceackk; awimwukcyiceackk: } public static function gkiyamgwqciqwqwo() : ?string { return self::eiwcuqigayigimak(self::BACKLINK_IMAGE . self::_ID, 0); } }
