import{empty}from"../../modules/validator/validator-min.js";import{createElement,appendChild}from"../../modules/components/components-min.js";import{setText,clearContainers}from"../../modules/components/utils-min.js";import{getMessage}from"../../modules/validations/login-min.js";document.addEventListener("DOMContentLoaded",(()=>{const e=document.querySelector("#fLogin");e.addEventListener("submit",(t=>{t.preventDefault();const o=document.querySelector("#account").value,n=document.querySelector("#cA"),s=document.querySelector("#password").value,a=document.querySelector("#cP");if(empty(o)||empty(s))return clearContainers([n,a]),void[{container:n,message:getMessage("account")},{container:a,message:getMessage("password")}].forEach((e=>{const t=createElement("label",{class:"label"}),o=createElement("span",{class:"label-text-alt text-error"});setText(o,e.message),appendChild(t,o),appendChild(e.container,t)}));e.submit()}))}));