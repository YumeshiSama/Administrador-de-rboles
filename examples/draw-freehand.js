"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[7839],{16449:function(e,n,t){var c,o=t(61038),r=t(41376),u=t(54354),a=t(79847),w=t(95783),s=t(42010),i=t(41372),f=new s.Z({source:new a.Z}),p=new w.Z({wrapX:!1}),Z=new i.Z({source:p}),l=new r.Z({layers:[f,Z],target:"map",view:new u.ZP({center:[-11e6,46e5],zoom:4})}),v=document.getElementById("type");function d(){"None"!==v.value&&(c=new o.ZP({source:p,type:v.value,freehand:!0}),l.addInteraction(c))}v.onchange=function(){l.removeInteraction(c),d()},d()}},function(e){var n=function(n){return e(e.s=n)};n(9877),n(16449)}]);
//# sourceMappingURL=draw-freehand.js.map