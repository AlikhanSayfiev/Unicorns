if (self.CavalryLogger) { CavalryLogger.start_js(["4tNDq"]); }

__d("MNCommerceLogger",["BanzaiLogger","BanzaiODS"],(function(a,b,c,d,e,f){"use strict";f.logClick=a;f.logAuthEvent=c;var g=b("BanzaiLogger").create({signal:!0});function h(a){switch(a){case"devx_upsell_learn_more_clicked":return"devx.upsell.learn_more.clicked";default:return a}}function a(a,c,d){b("BanzaiODS").bumpEntityKey(2966,"messenger_commerce",h(a)),g.log("MessengerCommerceLoggerConfig",{brand_app_id:c,user_fbid:d,event:a})}function c(a,c,d,e){g.log("MessengerCommerceLoggerConfig",{brand_app_id:a,page_id:c,user_fbid:d,event:e}),b("BanzaiODS").bumpEntityKey(2966,"messenger_commerce","auth."+e+".all")}}),null);
__d("PluginMessengerMessageUs",["Event","MNCommerceLogger"],(function(a,b,c,d,e,f){"use strict";f.setupMessageUsLogging=a;function a(a,c,d,e){b("Event").listen(a,"click",function(){b("MNCommerceLogger").logAuthEvent(c,d,e,"message_us_clicked")})}}),null);
__d("VisualCompletionGating",["requireCond","cr:729414"],(function(a,b,c,d,e,f){"use strict";a=b("cr:729414");e.exports=a}),null);
__d("NavigationMetricsEnumJS",[],(function(a,b,c,d,e,f){a=Object.freeze({NAVIGATION_START:"navigationStart",UNLOAD_EVENT_START:"unloadEventStart",UNLOAD_EVENT_END:"unloadEventEnd",REDIRECT_START:"redirectStart",REDIRECT_END:"redirectEnd",FETCH_START:"fetchStart",DOMAIN_LOOKUP_START:"domainLookupStart",DOMAIN_LOOKUP_END:"domainLookupEnd",CONNECT_START:"connectStart",CONNECT_END:"connectEnd",SECURE_CONNECTION_START:"secureConnectionStart",REQUEST_START:"requestStart",RESPONSE_START:"responseStart",RESPONSE_END:"responseEnd",DOM_LOADING:"domLoading",DOM_INTERACTIVE:"domInteractive",DOM_CONTENT_LOADED_EVENT_START:"domContentLoadedEventStart",DOM_CONTENT_LOADED_EVENT_END:"domContentLoadedEventEnd",DOM_COMPLETE:"domComplete",LOAD_EVENT_START:"loadEventStart",LOAD_EVENT_END:"loadEventEnd"});e.exports=a}),null);
__d("ResourceTimingMetricsEnumJS",[],(function(a,b,c,d,e,f){a=Object.freeze({START_TIME:"startTime",REDIRECT_START:"redirectStart",REDIRECT_END:"redirectEnd",FETCH_START:"fetchStart",DOMAIN_LOOKUP_START:"domainLookupStart",DOMAIN_LOOKUP_END:"domainLookupEnd",CONNECT_START:"connectStart",SECURE_CONNECTION_START:"secureConnectionStart",CONNECT_END:"connectEnd",REQUEST_START:"requestStart",RESPONSE_START:"responseStart",RESPONSE_END:"responseEnd"});e.exports=a}),null);
__d("ImageTimingHelper",["Arbiter","BigPipe","URI"],(function(a,b,c,d,e,f){var g,h={},i={};function j(a){var c=a.lid,d=a.pagelet,e=a.images,f=a.timeslice,j=a.ts,k=h[c];k||(k=h[c]=[]);e.forEach(function(a){try{var c=new(g||(g=b("URI")))(a);a=c.setFragment("").toString()}catch(a){return}if(i[a])return;i[a]=!0;k.push({pagelet:d,timeslice:f,ts:j,uri:a})})}b("Arbiter").subscribe(b("BigPipe").Events.init,function(a,b){b.lid&&b.lid!=="0"&&b.arbiter.subscribe("images_displayed",function(a,b){j(b)})});b("Arbiter").subscribe("MRenderingScheduler/images_displayed",function(a,b){j(b)});e.exports.getImageTimings=function(a){return h[a]||[]}}),null);
__d("NavigationTimingHelper",["NavigationMetricsEnumJS","forEachObject","performance"],(function(a,b,c,d,e,f){f.getAsyncRequestTimings=a;f.getPerformanceNavigationTiming=i;f.getNavTimings=c;var g;function h(a,c){var d={};b("forEachObject")(b("NavigationMetricsEnumJS"),function(b){var e=c[b];e&&(d[b]=e+a)});return d}function a(a){if(!a||!(g||(g=b("performance"))).timing||!(g||(g=b("performance"))).getEntriesByName)return void 0;a=(g||(g=b("performance"))).getEntriesByName(a);return a.length===0?void 0:h(g.timing.navigationStart,a[0])}function i(){if(!(g||(g=b("performance"))).timing||!(g||(g=b("performance"))).getEntriesByType)return{};var a=(g||(g=b("performance"))).getEntriesByType("navigation");return!a.length?{}:h(g.timing.navigationStart,a[0])}function c(){if(!(g||(g=b("performance"))).timing)return void 0;var a=babelHelpers["extends"]({},h(0,(g||(g=b("performance"))).timing),i());return h(0,a)}}),null);
__d("PageletEventsHelper",["Arbiter","PageletEventConstsJS"],(function(a,b,c,d,e,f){f.init=a;f.getMetrics=c;f.subscribeToPageletEvents=d;var g="BigPipe/init",h="MRenderingScheduler/init",i="pagelet_event",j="phase_begin",k={},l=[],m=!1;function n(){return{pagelets:{},categories:{},phase_start:{},display_resources:{},all_resources:{}}}function o(a,b,c,d){k[d]==void 0&&(k[d]=n()),k[d].pagelets[b]==void 0&&(k[d].pagelets[b]={}),k[d].pagelets[b][a]=c}function p(a){a.subscribe(i,function(a,c){var d=c.event,e=c.ts;a=c.id;var f=c.lid,g=c.phase,h=c.categories,i=c.allResources;c=c.displayResources;o(d,a,e,f);var j=k[f],m=j.pagelets[a];d===b("PageletEventConstsJS").ARRIVE_END&&(m.phase=g,j.all_resources[a]=i,j.display_resources[a]=c);(d===b("PageletEventConstsJS").ONLOAD_END||d===b("PageletEventConstsJS").DISPLAY_END)&&h&&h.forEach(function(a){j.categories[a]==void 0&&(j.categories[a]={}),j.categories[a][d]=e});for(var m=0,g=l.length;m<g;m++)l[m](a,d,e,f)}),a.subscribe(j,function(a,b){k[b.lid].phase_start[b.phase]=b.ts})}function a(){if(m)return;b("Arbiter").subscribe(g,function(a,b){a=b.lid;b=b.arbiter;k[a]=n();p(b)});b("Arbiter").subscribe(h,function(a,b){a=b.lid;b=b.arbiter;k[a]=n();p(b)});m=!0}function c(a){return k[a]?JSON.parse(JSON.stringify(k[a])):null}function d(a){l.push(a);return{remove:function(){l.splice(l.indexOf(a),1)}}}}),null);
__d("ResourceTimingBootloaderHelper",["Bootloader","ResourceTimingMetricsEnumJS","ResourceTimingsStore","ResourceTypes","URI","forEachObject","performance"],(function(a,b,c,d,e,f){var g,h,i=500,j=[],k={},l={},m=new Map(),n=[".mp4",".m4v",".mpd","m4a"],o=new Set(["bootload","js_exec","start_bootload","tag_bootload"]);function p(a){for(var b=0;b<n.length;b++){var c=n[b];if(a.endsWith(c))return!0}return!1}function q(a){var c=new Map();b("ResourceTimingsStore").getMapFor(a).forEach(function(a){if(a.requestSent!=null){var b=c.get(a.uri);b!=null?b.push(a):c.set(a.uri,[a])}});c.forEach(function(a){return a.sort(function(a,b){return a.requestSent-b.requestSent})});return c}function r(a,b,c,d){var e=a.get(b);if(e==null){var f=b.indexOf("?");if(f!==-1){b=b.substring(0,f);e=a.get(b)}}if(e!=null)for(var f=0;f<e.length;f++){a=e[f];b=a.requestSent;a=a.responseReceived;if((c==null||b!=null&&b<=c)&&(d==null||a!=null&&a>=d))return e.splice(f,1)[0]}return null}function s(a,c,d,e,f,h,i){if(!(g||(g=b("performance"))).timing||!(g||(g=b("performance"))).getEntriesByType)return null;var j=(g||(g=b("performance"))).timing.navigationStart;e=Array.from(g.getEntriesByType("resource"));e=e.filter(function(a){return a.duration>=0&&a.startTime!=null&&a.startTime+j>c&&(f==null||a.responseEnd==null||a.responseEnd+j<f)});e.sort(function(a,b){return a.startTime-b.startTime});var k=e.length,n=0,o=0,s=0,w=0,x=0,y=q(b("ResourceTypes").XHR),z=q(b("ResourceTypes").CSS),A=q(b("ResourceTypes").JS);for(var B=0;B<e.length;B++){var C=e[B],D="",E="",F=void 0,G=C.initiatorType;switch(G){case"css":case"link":case"script":G=b("ResourceTimingsStore").parseMakeHasteURL(C.name);if(!G)continue;var H=G[0];G=G[1];if(G==="css"||G==="js"){var I=G==="css"?z:A;F=r(I,C.name,C.startTime+j,C.responseEnd+j);if(F!=null&&i){E=G;D=F.uid;break}else{E=G;G=(I=m.get(C.name))!=null?I:s++;D=G+"_"+H}}else{I=v(C.name);G=I[0];E=I[1];D=o+++"_"+G}break;case"img":D=o+++"_"+t(C.name);E="img";break;case"iframe":D=w+++"_"+t(C.name)+u(C.name);E="iframe";break;case"xmlhttprequest":if(h){H=t(C.name);I=u(C.name);if(p(I)){D=x+++"_"+H+I;E="video";break}else{F=r(y,C.name,C.startTime+j,C.responseEnd+j);if(F!=null){E=b("ResourceTypes").XHR;D=F.uid;break}}}default:continue}G={};H=Object.keys(b("ResourceTimingMetricsEnumJS"));for(var I=0;I<H.length;I++){var J=b("ResourceTimingMetricsEnumJS")[H[I]],K=C[J];K&&(G[J]=K+(g||(g=b("performance"))).timing.navigationStart)}if(F!=null){J=F;K=J.requestSent;I=J.responseReceived;if(c!=null&&K!=null&&K<c||f!=null&&I!=null&&I>f)continue;G.requestSent=K;G.responseReceived=I}G.type=E;G.desc=D;if(F!=null&&(E===b("ResourceTypes").JS||E===b("ResourceTypes").CSS||E===b("ResourceTypes").XHR)){H=b("ResourceTimingsStore").getAnnotationsFor(E,F.uid);H!=null&&(G.annotations=H)}E=="img"&&Object.prototype.hasOwnProperty.call(d,C.name)&&(G.pagelet=d[C.name]);G.transferSize=C.transferSize;G.encodedBodySize=C.encodedBodySize;a[C.name]==void 0&&(a[C.name]=[]);n++;a[C.name].push(G)}return i?{numValidEntries:k,numSuccessfulMetrics:n}:null}function t(a){a=new(h||(h=b("URI")))(a).getDomain();return a}function u(a){a=new(h||(h=b("URI")))(a).getPath();return a}function v(a){return[t(a),"img"]}function w(a){var b=Object.keys(a).filter(function(a){return a.startsWith("start_bootload/")}).sort(function(b,c){return a[b]-a[c]}).map(function(a){return a.substring(a.indexOf("/")+1)});b.forEach(function(b){return o.forEach(function(c){c=c+"/"+b;a[c]!=null&&(k[c]=a[c])})});j=j.concat(b);if(j.length>i){b=j.splice(0,j.length-i);b.forEach(function(a){return o.forEach(function(b){k[b+"/"+a]&&delete k[b+"/"+a]})})}}a={addPastBootloaderMetricsToResourceTimings:function(c,d){c===void 0&&(c={});d===void 0&&(d={});var a=b("Bootloader").getURLToHashMap();b("forEachObject")(c,function(b,c){var e=a.get(c);if(!e)return;var f=new Map();f.set("bootloader_hash",e);o.forEach(function(a){var b=a+"/"+e;b=d[b]||k[b];b!=null&&f.set(a,b)});f.size>0&&b.forEach(function(a){if(a.requestSent||a.responseReceived)return;f.forEach(function(b,c){return a[c]=b})})})},mergeBootloaderMetricsAndResourceTimings:function(a,c,d){a===void 0&&(a={});c===void 0&&(c={});d===void 0&&(d=!0);m.size===0&&(m=b("Bootloader").getURLToHashMap());var e=new Map();for(var f=m,g=Array.isArray(f),h=0,f=g?f:f[typeof Symbol==="function"?Symbol.iterator:"@@iterator"]();;){var i;if(g){if(h>=f.length)break;i=f[h++]}else{h=f.next();if(h.done)break;i=h.value}i=i;var j=i[0];i=i[1];e.set(j,i)}var k=[];b("forEachObject")(c,function(b,c){var d=c.indexOf("/");if(d===-1)return;var f=c.substring(0,d);if(!o.has(f))return;k.push(c);var g=c.substring(d+1);c=e.get(g);if(!c){c=g;g=m.get(c);if(!g)return}c.startsWith("data:")&&(c="inlined resource: "+g);a[c]==null&&(a[c]=[{}]);a[c].forEach(function(a){a.bootloader_hash=g,a[f]=b})});d||(w(c),k.forEach(function(a){return delete c[a]}));return a},getLastTTIAndE2EImageResponseEnds:function(a,c,d){var e={TTI:a,E2E:c};if(!(g||(g=b("performance"))).timing)return e;var f=d.filter(function(b){return b.ts<=a}).map(function(a){return a.uri}).reduce(function(b,a){b[a]=!0;return b},{}),h=d.map(function(a){return a.uri}).reduce(function(b,a){b[a]=!0;return b},{});for(var i in l)l[i].forEach(function(a){a.type==="img"&&(f[i]&&(e.TTI=Math.max(e.TTI,a.responseEnd)),h[i]&&(e.E2E=Math.max(e.E2E,a.responseEnd)))});return e},getMetrics:function(a,c,d,e,f,g){c===void 0&&(c={});l={};m.size===0&&(m=b("Bootloader").getURLToHashMap());a=s(l,a,c,d,e,f,g);return{data:l,diagnostics:a}}};e.exports=a}),null);
__d("PerfXFlusher",["invariant","Banzai"],(function(a,b,c,d,e,f,g){var h="perfx_custom_logger_endpoint",i=["perfx_page","perfx_page_type","lid"];function j(a){i.forEach(function(b){return g(b in a,'PerfXFlusher: Field "%s" missing in the PerfX payload',b)})}a={flush:function(a){j(a),b("Banzai").post(h,a,{signal:!0})},registerToSendWithBeacon:function(a){b("Banzai").subscribe(b("Banzai").SHUTDOWN,function(){var c=a();c.length&&b("Banzai").post(h,c,{delay:b("Banzai").VITAL_WAIT})})}};c=a;e.exports=c}),null);
__d("QuicklingRefreshOverheadUtil",["QuicklingConfig","WebStorage","performanceAbsoluteNow"],(function(a,b,c,d,e,f){"use strict";var g,h,i=null,j=1e4;a={onQuicklingStart:function(){i=(g||(g=b("performanceAbsoluteNow")))()},onQuicklingVersionMatch:function(){i=null},onQuicklingRefreshStart:function(){if(!b("QuicklingConfig").logRefreshOverhead||i===null)return;var a=(h||(h=b("WebStorage"))).getSessionStorage();if(!a)return;a.setItem("quickling_refresh_overhead",((g||(g=b("performanceAbsoluteNow")))()-i).toString());a.setItem("quickling_refresh_start",Date.now().toString())},getOverhead:function(a){if(!b("QuicklingConfig").logRefreshOverhead)return null;var c=(h||(h=b("WebStorage"))).getSessionStorageForRead();if(!c)return null;var d=c.getItem("quickling_refresh_start");if(d==null)return null;if(a-parseInt(d,10)>j)return null;a=c.getItem("quickling_refresh_overhead");return a!=null?parseFloat(a):null}};e.exports=a}),null);
__d("pageLoadedViaSWCache",[],(function(a,b,c,d,e,f){e.exports=a;function a(){return self.__SW_CACHE__===1}}),null);
__d("PerfXLogger",["BanzaiODS","DataAttributeUtils","NavigationMetrics","NavigationTimingHelper","PerfXFlusher","PerfXSharedFields","QuicklingRefreshOverheadUtil","VisibilityListener","forEachObject","pageLoadedViaSWCache","performanceAbsoluteNow","setTimeoutAcrossTransitions"],(function(a,b,c,d,e,f){var g,h={},i={},j=65*1e3,k=["e2e","tti","all_pagelets_displayed","all_pagelets_loaded","artillery_disable_time"],l={},m={_listenersSetUp:!1,_uploadEarly:!1,_alreadyUploadedEarly:!1,_setupListeners:function(){var a=this;if(this._listenersSetUp)return;this._subscribeToNavigationMetrics();b("PerfXFlusher").registerToSendWithBeacon(function(){var c=[];b("forEachObject")(h,function(b,d){if(!h[d].sent){b=a.getPayload(d,"unload fired");b!=null&&c.push(b)}});h={};return c});this._listenersSetUp=!0},_init:function(a){var b=a.lid;if(b==null)return;this._alreadyUploadedEarly=!1;this._uploadEarly=!!a.upload_perfx_early;delete a.upload_perfx_early;var c=i[b]||[];delete i[b];if(a.sw_controlled_tags){if(navigator.serviceWorker&&navigator.serviceWorker.controller)for(var d=0;d<a.sw_controlled_tags.length;d++)c.push(a.sw_controlled_tags[d]);delete a.sw_controlled_tags}h[b]=babelHelpers["extends"]({tags:new Set(c),sent:!1},a);this._registerTimeoutSendback(b);this._setupListeners()},initWithNavigationMetricsLID:function(a,c){var d=b("NavigationMetrics").getFullPageLoadLid();if(!d)return;this._init(babelHelpers["extends"]({},c,{lid:d}));if(a&&a.always)for(var c=0;c<a.always.length;c++)m.addTag(d,a.always[c]);if(a&&a.swCache&&b("pageLoadedViaSWCache")())for(var c=0;c<a.swCache.length;c++)m.addTag(d,a.swCache[c])},init:function(a,b){b!=null&&a.lid!=null&&(l[a.lid]=b),this._init(a)},addTag:function(a,c){this._alreadyUploadedEarly&&b("BanzaiODS").bumpEntityKey(2966,"PerfXLateTag",c);var d=h[a];if(d){d.tags.add(c);return}i[a]||(i[a]=[]);i[a].push(c)},addTagWithNavigationMetricsLID:function(a){this._alreadyUploadedEarly&&b("BanzaiODS").bumpEntityKey(2966,"PerfXLateTag",a);var c=b("NavigationMetrics").getFullPageLoadLid();if(!c)return;m.addTag(c,a)},_registerTimeoutSendback:function(a){var c=this,d=this._getFetchStart(a),e=j;d!=null&&(e-=(g||(g=b("performanceAbsoluteNow")))()-d);b("setTimeoutAcrossTransitions")(function(){return c._uploadPayload(a,"sendback time out")},e)},_subscribeToNavigationMetrics:function(){var a=this,c;(c=b("NavigationMetrics")).addRetroactiveListener(c.Events.EVENT_OCCURRED,function(b,c){if(!(b in h))return;k.includes(c.event)&&Object.prototype.hasOwnProperty.call(c,"timestamp")&&c.timestamp!=null&&(h[b][c.event]=c.timestamp);c.event==="all_pagelets_displayed"&&a._uploadEarly&&(k.forEach(function(a){Object.prototype.hasOwnProperty.call(c,a)&&c[a]!=null&&(h[b][a]=c[a])}),a._uploadPayload(b),a._alreadyUploadedEarly=!0)});c.addRetroactiveListener(c.Events.NAVIGATION_DONE,function(b,c){var d=c.serverLID;if(!(d in h))return;k.forEach(function(a){Object.prototype.hasOwnProperty.call(c,a)&&c[a]!=null&&(h[d][a]=c[a])});a._uploadPayload(d)})},_getPayloadWithOffset:function(a,c,d){a=h[a];if(a==null)return null;var e=Object.assign({},a),f=document.querySelector('[id^="hyperfeed_story_id"]');if(f){f=JSON.parse(b("DataAttributeUtils").getDataFt(f));f&&(e.mf_query_id=f.qid)}e.tags=Array.from(a.tags);this._adjustValues(e,c);e.fetch_start=c;if(e.perfx_page_type==="normal"){f=b("NavigationTimingHelper").getNavTimings();f!=null&&f.navigationStart!=null&&(e.nav_to_fetch=c-f.navigationStart);a=b("QuicklingRefreshOverheadUtil").getOverhead(c);a!==null&&(e.quickling_refresh_overhead=a)}d!=null&&(e.sendback_reason=d);b("PerfXSharedFields").addCommonValues(e);b("VisibilityListener").supported()&&e.fetch_start&&e.all_pagelets_displayed&&e.tti&&e.e2e&&(e.tab_hidden_time_dd=b("VisibilityListener").getHiddenTime(e.fetch_start,e.fetch_start+e.all_pagelets_displayed),e.tab_hidden_time_tti=b("VisibilityListener").getHiddenTime(e.fetch_start,e.fetch_start+e.tti),e.tab_hidden_time_e2e=b("VisibilityListener").getHiddenTime(e.fetch_start,e.fetch_start+e.e2e));window&&window.location&&window.location.pathname&&(e.request_uri=window.location.pathname);delete e.sent;return e},_uploadPayload:function(a,c){if(h[a]!=null&&!h[a].sent){c=this.getPayload(a,c);c!=null&&(b("PerfXFlusher").flush(c),h[a].sent=!0)}},getPayload:function(a,b){return this._getPayloadWithOffset(a,this._getFetchStart(a),b)},_getFetchStart:function(a){if(!(a in h))return null;var c=h[a].perfx_page_type;if(c=="quickling")if(!(a in l))return null;else c=b("NavigationTimingHelper").getAsyncRequestTimings(l[a]);else c=b("NavigationTimingHelper").getNavTimings();return!c||!c.fetchStart?null:c.fetchStart},_adjustValues:function(a,b){k.forEach(function(c){Object.prototype.hasOwnProperty.call(a,c)&&(a[c]-=b)})}};e.exports=m}),null);