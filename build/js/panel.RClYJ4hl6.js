(()=>{"use strict";var t=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("PanelDatatableCard",{attrs:{columns:t.columns,remote:t.remoteProps},scopedSlots:t._u([{key:"td",fn:function(t){var e=t.item,o=(t.column,t.column_key);t.id;return[n("PanelCellText",{attrs:{text:e[o]}})]}}])})};t._withStripped=!0;var e=function(t,e,n,o,r,s,a,i){var l,c="function"==typeof t?t.options:t;if(e&&(c.render=e,c.staticRenderFns=n,c._compiled=!0),o&&(c.functional=!0),s&&(c._scopeId="data-v-"+s),a?(l=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),r&&r.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(a)},c._ssrRegister=l):r&&(l=i?function(){r.call(this,(c.functional?this.parent:this).$root.$options.shadowRoot)}:r),l)if(c.functional){c._injectStyles=l;var d=c.render;c.render=function(t,e){return l.call(e),d(t,e)}}else{var p=c.beforeCreate;c.beforeCreate=p?[].concat(p,l):[l]}return{exports:t,options:c}}({name:"PanelStorePurchase",computed:{remoteProps:()=>({api:"/pmpr/v1/component-manager/get-purchases","query-params":{sort:"domain_id",sortBy:"orderBy"}}),columns(){return{domain_id:{title:this.translate("component.column.domain"),width:"20%"},component_id:{title:this.translate("component.column.component"),width:"20%"},component_type:{title:this.translate("column.type"),width:"20%"},license_key:{title:this.translate("component.column.license_key"),width:"20%"},created_at:{title:this.translate("component.column.created_at"),width:"20%"}}}}},t,[],!1,null,null,null);e.options.__file="asset/js/panel/view/Purchase.vue";const n=e.exports;window.PanelStorePurchase=n})();