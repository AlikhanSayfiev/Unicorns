if (self.CavalryLogger) { CavalryLogger.start_js(["tAc9U"]); }

__d("useCometTailLoadPageletTracker",["React","intersectionObserverEntryIsIntersecting","requireCond","cr:1632385","cr:1703077"],(function(a,b,c,d,e,f){"use strict";e.exports=a;var g=b("React");function a(a,c,d){var e=g.useRef(null),f=g.useRef(!1),h=g.useRef(!1),i=g.useRef(!1),j=g.useRef(null);g.useEffect(function(){return function(){j.current&&j.current(),j.current=null}},[a,c]);return g.useCallback(function(g){if((b("cr:1632385")||b("cr:1703077"))&&d===!0&&a!=null&&c!=null&&g&&e.current!==g){e.current=g;j.current&&(j.current(),j.current=null);var k=function(d){Array.prototype.forEach.call(d,function(d){var e=b("intersectionObserverEntryIsIntersecting")(d);e&&!h.current&&(i.current||(i.current=!0),b("cr:1632385")&&f.current&&b("cr:1632385").reportPaintDelayAfterScroll(d.time,a,c));b("cr:1703077")&&!f.current&&(b("cr:1703077").logPageletDisplay(a,c,d.time,e),f.current=!0);h.current=e})},l=new IntersectionObserver(k);l.observe(g);j.current=function(){l.disconnect()}}},[a,c,d])}}),null);