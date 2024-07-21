/*! For license information please see install_request_multistep.Oy8-iLqxQ.js.LICENSE.txt */
!function(){const e=PRHelper.getHook(),t=PRHelper.getHTML(),n=PRHelper.getType(),i=PRHelper.getTool(),s=PRHelper.getForm(),a=PRHelper.getRequest(),r=PRHelper.getSetting(),o=t.getElement(".pr-multistep-wrap"),c=t.getAttribute(o,"id"),l=window.PR_MULTISTEPS[c];t.hide(t.getParent(t.getElement(".submit-action",o)));let m=0,p="",_=!1;function g(){return t.is("#accept_terms_of_use",":checked")}function u(){return t.is("#confirmation",":checked")}l.stop(!1),e.on("focus",(()=>{_||t.setElementActivity("button#check_serial",!0)}),'.pr--field[name="serial"]'),e.on("click",(e=>{const s=t.getTarget(e,"button"),o=t.getParent(s,'[data-name="serial_check"]');if(t.isElement(o)){const e=t.serializeForm(o,(e=>e.trim()));if(n.isEmpty(e.serial)||7!==e.serial.length)l.showMessage(r.getOption("message.serial_not_valid",!1));else{const n=t.getElement(".serial-information",o),c=t.getElement(".pr-spinner",o);_=!0,l.stop(!1),l.showMessage(""),t.spinner(c,!0),a.ajax(r.getOption("ajax.check_serial")).onSuccess((i=>{p=e.serial,m=parseInt(i.installation),t.fadeIn(n,{start:()=>{t.replace(i.html,n,!1)}}),t.setValue('.pr--field[name="serial"]',""),t.setElementActivity(s,!1),l.resume()})).onError((e=>{l.showMessage(i.error2string(e)),t.empty(n),m=0,l.stop(!1)})).onFinally((()=>{_=!1,t.spinner(c,!1)})).addNonce().send(e)}}}),"button#check_serial"),e.on("change",(e=>{t.setElementActivity(t.getElement("#step_content_consent .next-action"),g(),!1)}),"#accept_terms_of_use"),e.on("change",(e=>{t.setElementActivity(t.getElement("#step_content_requirements .next-action"),u(),!1)}),"#confirmation"),e.addFilter(`multistep_${c}_can_goto_next_step`,(async(e,c)=>{if(!0===e){let l=!1;switch(c.getCurrentStepName()){case"serial_check":(m<0||n.isEmpty(m))&&(l="check_serial_first");break;case"requirements":t.is('[data-name="requirements"] #confirmation',":checked")||(l="check_confirmation");break;case"setup_information":const c=s.getInvalidFields('.pr-multistep-step-content[data-name="setup_information"]');n.isEmpty(c)||(n.each(c,(e=>{s.showFieldMessage(e.field,r.getOption(`field.invalid.${e.type}`,""),!0,!0)})),l="fill_required_fields");break;case"consent":if(g()){let n=t.serializeForm(o);n.serial=p,n.installation_id=m,await a.ajax(r.getOption("ajax.submit_installation")).addNonce().onError((t=>{e=i.error2string(t)})).send(n)}else l="accept_terms_of_use_first"}l&&(e=r.getOption(`message.${l}`,!1))}return e})),e.addAction(`multistep_${c}_step_changed`,(e=>{switch(e.getCurrentStepName()){case"requirements":t.setElementActivity(t.getElement("#step_content_requirements .next-action"),u(),!1);break;case"consent":t.setElementActivity(t.getElement("#step_content_consent .next-action"),g(),!1);break;case"thank_you":e.stop(!1)}}))}();