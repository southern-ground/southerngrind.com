!function(t){if("object"==typeof exports)module.exports=t();else if("function"==typeof define&&define.amd)define(t);else{var e;"undefined"!=typeof window?e=window:"undefined"!=typeof global?e=global:"undefined"!=typeof self&&(e=self),e.Share=t()}}(function(){function t(t){return""+t.selector+"{width:92px;height:20px;-webkit-touch-callout:none;-khtml-user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}"+t.selector+" [class*=entypo-]:before{font-family:entypo,sans-serif}"+t.selector+" label{font-size:16px;cursor:pointer;margin:0;padding:5px 10px;border-radius:5px;background:#a29baa;color:#333;-webkit-transition:all .3s ease;transition:all .3s ease}"+t.selector+" label:hover{opacity:.8}"+t.selector+" label span{text-transform:uppercase;font-size:.9em;font-family:Lato,sans-serif;font-weight:700;-webkit-font-smoothing:antialiased;padding-left:6px}"+t.selector+" .social{opacity:0;-webkit-transition:all .4s ease;transition:all .4s ease;margin-left:-15px;visibility:hidden}"+t.selector+" .social.top{-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;margin-top:-80px}"+t.selector+" .social.bottom{-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;margin-top:5px}"+t.selector+" .social.middle{margin-top:-34px}"+t.selector+" .social.middle.right{-webkit-transform-origin:5% 50%;-ms-transform-origin:5% 50%;transform-origin:5% 50%;margin-left:105px}"+t.selector+" .social.middle.left{-webkit-transform-origin:5% 50%;-ms-transform-origin:5% 50%;transform-origin:5% 50%}"+t.selector+" .social.right{margin-left:14px}"+t.selector+" .social.load{-webkit-transition:none!important;transition:none!important}"+t.selector+" .social.networks-1{width:60px}"+t.selector+" .social.networks-1.center,"+t.selector+" .social.networks-1.left{margin-left:14px}"+t.selector+" .social.networks-1.middle.left{margin-left:-70px}"+t.selector+" .social.networks-1 ul{width:60px}"+t.selector+" .social.networks-2{width:120px}"+t.selector+" .social.networks-2.center{margin-left:-13px}"+t.selector+" .social.networks-2.left{margin-left:-44px}"+t.selector+" .social.networks-2.middle.left{margin-left:-130px}"+t.selector+" .social.networks-2 ul{width:120px}"+t.selector+" .social.networks-3{width:180px}"+t.selector+" .social.networks-3.center{margin-left:-45px}"+t.selector+" .social.networks-3.left{margin-left:-102px}"+t.selector+" .social.networks-3.middle.left{margin-left:-190px}"+t.selector+" .social.networks-3 ul{width:180px}"+t.selector+" .social.networks-4{width:240px}"+t.selector+" .social.networks-4.center{margin-left:-75px}"+t.selector+" .social.networks-4.left{margin-left:162px}"+t.selector+" .social.networks-4.middle.left{margin-left:-250px}"+t.selector+" .social.networks-4 ul{width:240px}"+t.selector+" .social.networks-5{width:300px}"+t.selector+" .social.networks-5.center{margin-left:-105px}"+t.selector+" .social.networks-5.left{margin-left:-225px}"+t.selector+" .social.networks-5.middle.left{margin-left:-320px}"+t.selector+" .social.networks-5 ul{width:300px}"+t.selector+" .social.active{opacity:1;-webkit-transition:all .4s ease;transition:all .4s ease;visibility:visible}"+t.selector+" .social.active.top{-webkit-transform:scale(1) translateY(-10px);-ms-transform:scale(1) translateY(-10px);transform:scale(1) translateY(-10px)}"+t.selector+" .social.active.bottom{-webkit-transform:scale(1) translateY(15px);-ms-transform:scale(1) translateY(15px);transform:scale(1) translateY(15px)}"+t.selector+" .social.active.middle.right{-webkit-transform:scale(1) translateX(10px);-ms-transform:scale(1) translateX(10px);transform:scale(1) translateX(10px)}"+t.selector+" .social.active.middle.left{-webkit-transform:scale(1) translateX(-10px);-ms-transform:scale(1) translateX(-10px);transform:scale(1) translateX(-10px)}"+t.selector+" .social ul{position:relative;left:0;right:0;height:46px;color:#fff;margin:auto;padding:0;list-style:none}"+t.selector+" .social ul li{font-size:20px;cursor:pointer;width:60px;margin:0;padding:12px 0;text-align:center;float:left;display:none;height:22px;position:relative;z-index:2;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-transition:all .3s ease;transition:all .3s ease}"+t.selector+" .social ul li:hover{color:rgba(0,0,0,.5)}"+t.selector+" .social li[class*=facebook]{background:#3b5998;display:"+t.networks.facebook.display+"}"+t.selector+" .social li[class*=twitter]{background:#6cdfea;display:"+t.networks.twitter.display+"}"+t.selector+" .social li[class*=gplus]{background:#e34429;display:"+t.networks.google_plus.display+"}"+t.selector+" .social li[class*=pinterest]{background:#c5282f;display:"+t.networks.pinterest.display+"}"+t.selector+" .social li[class*=paper-plane]{background:#42c5b0;display:"+t.networks.email.display+"}"}var e;"classList"in document.documentElement||!Object.defineProperty||"undefined"==typeof HTMLElement||Object.defineProperty(HTMLElement.prototype,"classList",{get:function(){var t,e,o;return o=function(t){return function(o){var n,i;n=e.className.split(/\s+/),i=n.indexOf(o),t(n,i,o),e.className=n.join(" ")}},e=this,t={add:o(function(t,e,o){~e||t.push(o)}),remove:o(function(t,e){~e&&t.splice(e,1)}),toggle:o(function(t,e,o){~e?t.splice(e,1):t.push(o)}),contains:function(t){return!!~e.className.split(/\s+/).indexOf(t)},item:function(t){return e.className.split(/\s+/)[t]||null}},Object.defineProperty(t,"length",{get:function(){return e.className.split(/\s+/).length}}),t}}),e=function(){function t(){}return t.prototype.extend=function(t,e,o){var n,i;for(i in e)n=void 0!==t[i],n&&"object"==typeof e[i]?this.extend(t[i],e[i],o):(o||!n)&&(t[i]=e[i])},t.prototype.hide=function(t){return t.style.display="none"},t.prototype.show=function(t){return t.style.display="block"},t.prototype.has_class=function(t,e){return t.classList.contains(e)},t.prototype.add_class=function(t,e){return t.classList.add(e)},t.prototype.remove_class=function(t,e){return t.classList.remove(e)},t.prototype.is_encoded=function(t){return decodeURIComponent(t)!==t},t.prototype.encode=function(t){return this.is_encoded(t)?t:encodeURIComponent(t)},t.prototype.popup=function(t,e){var o,n,i,s;return null==e&&(e={}),n={width:500,height:350},n.top=screen.height/2-n.height/2,n.left=screen.width/2-n.width/2,i=function(){var t;t=[];for(o in e)s=e[o],t.push(""+o+"="+this.encode(s));return t}.call(this).join("&"),i&&(i="?"+i),window.open(t+i,"targetWindow","toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,left="+n.left+",top="+n.top+",width="+n.width+",height="+n.height)},t}();var o,n={}.hasOwnProperty,i=function(t,e){function o(){this.constructor=t}for(var i in e)n.call(e,i)&&(t[i]=e[i]);return o.prototype=e.prototype,t.prototype=new o,t.__super__=e.prototype,t};return o=function(e){function o(t,e){var o;return this.element=t,this.el={head:document.getElementsByTagName("head")[0],body:document.getElementsByTagName("body")[0]},this.config={enabled_networks:0,protocol:-1===["http","https"].indexOf(window.location.href.split(":")[0])?"https://":"//",url:window.location.href,caption:null,title:(o=document.querySelector('meta[property="og:title"]')||document.querySelector('meta[name="twitter:title"]'))?o.getAttribute("content"):(o=document.querySelector("title"))?o.innerText:void 0,image:(o=document.querySelector('meta[property="og:image"]')||document.querySelector('meta[name="twitter:image"]'))?o.getAttribute("content"):void 0,description:(o=document.querySelector('meta[property="og:description"]')||document.querySelector('meta[name="twitter:description"]')||document.querySelector('meta[name="description"]'))?o.getAttribute("content"):"",ui:{flyout:"top center",button_text:"Share",button_font:!0,icon_font:!0},networks:{google_plus:{enabled:!0,url:null},twitter:{enabled:!0,url:null,description:null},facebook:{enabled:!0,load_sdk:!0,url:null,app_id:null,title:null,caption:null,description:null,image:null},pinterest:{enabled:!0,url:null,image:null,description:null},email:{enabled:!0,title:null,description:null}}},this.setup(t,e),this}return i(o,e),o.prototype.setup=function(t,e){var o,n,i,s,r;for(i=document.querySelectorAll(t),this.extend(this.config,e,!0),this.set_global_configuration(),this.normalize_network_configuration(),this.config.ui.icon_font&&this.inject_icons(),this.config.ui.button_font&&this.inject_fonts(),this.config.networks.facebook.enabled&&this.config.networks.facebook.load_sdk&&this.inject_facebook_sdk(),o=s=0,r=i.length;r>s;o=++s)n=i[o],this.setup_instance(t,o)},o.prototype.setup_instance=function(t,e){var o,n,i,s,r,l,a,c,p=this;for(n=document.querySelectorAll(t)[e],this.hide(n),this.add_class(n,"sharer-"+e),n=document.querySelectorAll(t)[e],this.inject_css(n),this.inject_html(n),this.show(n),i=n.getElementsByTagName("label")[0],o=n.getElementsByClassName("social")[0],r=n.getElementsByTagName("li"),this.add_class(o,"networks-"+this.config.enabled_networks),i.addEventListener("click",function(){return p.event_toggle(o)}),p=this,c=[],e=l=0,a=r.length;a>l;e=++l)s=r[e],c.push(s.addEventListener("click",function(){return p.event_network(n,this),p.event_close(o)}));return c},o.prototype.event_toggle=function(t){return this.has_class(t,"active")?this.event_close(t):this.event_open(t)},o.prototype.event_open=function(t){return this.has_class(t,"load")&&this.remove_class(t,"load"),this.add_class(t,"active")},o.prototype.event_close=function(t){return this.remove_class(t,"active")},o.prototype.event_network=function(t,e){var o;return o=e.getAttribute("data-network"),this.hook("before",o,t),this["network_"+o](),this.hook("after",o,t)},o.prototype.open=function(){return this["public"]("open")},o.prototype.close=function(){return this["public"]("close")},o.prototype.toggle=function(){return this["public"]("toggle")},o.prototype["public"]=function(t){var e,o,n,i,s,r,l;for(r=document.querySelectorAll(this.element),l=[],o=i=0,s=r.length;s>i;o=++i)n=r[o],e=n.getElementsByClassName("social")[0],l.push(this["event_"+t](e));return l},o.prototype.network_facebook=function(){return this.config.networks.facebook.load_sdk?window.FB?FB.ui({method:"share",href:this.config.networks.facebook.url}):console.error("The Facebook JS SDK hasn't loaded yet."):this.popup("https://www.facebook.com/sharer/sharer.php",{u:this.config.networks.facebook.url})},o.prototype.network_twitter=function(){return this.popup("https://twitter.com/intent/tweet",{text:this.config.networks.twitter.description,url:this.config.networks.twitter.url})},o.prototype.network_google_plus=function(){return this.popup("https://plus.google.com/share",{url:this.config.networks.google_plus.url})},o.prototype.network_pinterest=function(){return this.popup("https://www.pinterest.com/pin/create/button",{url:this.config.networks.pinterest.url,media:this.config.networks.pinterest.image,description:this.config.networks.pinterest.description})},o.prototype.network_email=function(){return this.popup("mailto:",{subject:this.config.networks.email.title,body:this.config.networks.email.description})},o.prototype.inject_icons=function(){return this.inject_stylesheet("https://www.sharebutton.co/fonts/v2/entypo.min.css")},o.prototype.inject_fonts=function(){return this.inject_stylesheet("http://fonts.googleapis.com/css?family=Lato:900&text="+this.config.ui.button_text)},o.prototype.inject_stylesheet=function(t){var e;return this.el.head.querySelector('link[href="'+t+'"]')?void 0:(e=document.createElement("link"),e.setAttribute("rel","stylesheet"),e.setAttribute("href",t),this.el.head.appendChild(e))},o.prototype.inject_css=function(e){var o,n,i,s;return i="."+e.getAttribute("class").split(" ").join("."),this.el.head.querySelector("meta[name='sharer"+i+"']")?void 0:(this.config.selector=i,o=t(this.config),s=document.createElement("style"),s.type="text/css",s.styleSheet?s.styleSheet.cssText=o:s.appendChild(document.createTextNode(o)),this.el.head.appendChild(s),delete this.config.selector,n=document.createElement("meta"),n.setAttribute("name","sharer"+i),this.el.head.appendChild(n))},o.prototype.inject_html=function(t){return t.innerHTML="<label class='entypo-export'><span>"+this.config.ui.button_text+"</span></label><div class='social load "+this.config.ui.flyout+"'><ul><li class='entypo-pinterest' data-network='pinterest'></li><li class='entypo-twitter' data-network='twitter'></li><li class='entypo-facebook' data-network='facebook'></li><li class='entypo-gplus' data-network='google_plus'></li><li class='entypo-paper-plane' data-network='email'></li></ul></div>"},o.prototype.inject_facebook_sdk=function(){var t,e;return window.FB||!this.config.networks.facebook.app_id||this.el.body.querySelector("#fb-root")?void 0:(e=document.createElement("script"),e.text="window.fbAsyncInit=function(){FB.init({appId:'"+this.config.networks.facebook.app_id+"',status:true,xfbml:true})};(function(e,t,n){var r,i=e.getElementsByTagName(t)[0];if(e.getElementById(n)){return}r=e.createElement(t);r.id=n;r.src='"+this.config.protocol+"connect.facebook.net/en_US/all.js';i.parentNode.insertBefore(r,i)})(document,'script','facebook-jssdk')",t=document.createElement("div"),t.id="fb-root",this.el.body.appendChild(t),this.el.body.appendChild(e))},o.prototype.hook=function(t,e,o){var n,i;n=this.config.networks[e][t],"function"==typeof n&&(i=n.call(this.config.networks[e],o),void 0!==i&&(i=this.normalize_filter_config_updates(i),this.extend(this.config.networks[e],i,!0),this.normalize_network_configuration()))},o.prototype.set_global_configuration=function(){var t,e,o,n,i,s;i=this.config.networks,s=[];for(e in i){n=i[e];for(o in n)null==this.config.networks[e][o]&&(this.config.networks[e][o]=this.config[o]);this.config.networks[e].enabled?(t="block",this.config.enabled_networks+=1):t="none",s.push(this.config.networks[e].display=t)}return s},o.prototype.normalize_network_configuration=function(){return this.config.networks.facebook.app_id||(this.config.networks.facebook.load_sdk=!1),this.is_encoded(this.config.networks.twitter.description)||(this.config.networks.twitter.description=encodeURIComponent(this.config.networks.twitter.description)),"integer"==typeof this.config.networks.facebook.app_id?this.config.networks.facebook.app_id=this.config.networks.facebook.app_id.toString():void 0},o.prototype.normalize_filter_config_updates=function(t){return this.config.networks.facebook.app_id!==t.app_id&&(console.warn("You are unable to change the Facebook app_id after the button has been initialized. Please update your Facebook filters accordingly."),delete t.app_id),this.config.networks.facebook.load_sdk!==t.load_sdk&&(console.warn("You are unable to change the Facebook load_sdk option after the button has been initialized. Please update your Facebook filters accordingly."),delete t.app_id),t},o}(e)});