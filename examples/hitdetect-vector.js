(self.webpackChunk=self.webpackChunk||[]).push([[5198],{9214:function(n,e,o){"use strict";var t,r=o(3919),i=o(1625),f=o(710),c=o(1940),l=o(640),s=o(6363),w=o(5659),a=o(5367),u=o(6806),m=new s.ZP({fill:new w.Z({color:"rgba(255, 255, 255, 0.6)"}),stroke:new a.Z({color:"#319FD3",width:1}),text:new u.Z({font:"12px Calibri,sans-serif",fill:new w.Z({color:"#000"}),stroke:new a.Z({color:"#fff",width:3})})}),d=new f.Z({source:new c.Z({url:"data/geojson/countries.geojson",format:new r.Z}),style:function(n){return m.getText().setText(n.get("name")),m}}),v=new i.Z({layers:[d],target:"map",view:new l.ZP({center:[0,0],zoom:1})}),p=new s.ZP({stroke:new a.Z({color:"#f00",width:1}),fill:new w.Z({color:"rgba(255,0,0,0.1)"}),text:new u.Z({font:"12px Calibri,sans-serif",fill:new w.Z({color:"#000"}),stroke:new a.Z({color:"#f00",width:3})})}),b=new f.Z({source:new c.Z,map:v,style:function(n){return p.getText().setText(n.get("name")),p}}),g=function(n){d.getFeatures(n).then((function(n){var e=n.length?n[0]:void 0,o=document.getElementById("info");n.length?o.innerHTML=e.getId()+": "+e.get("name"):o.innerHTML="&nbsp;",e!==t&&(t&&b.getSource().removeFeature(t),e&&b.getSource().addFeature(e),t=e)}))};v.on("pointermove",(function(n){if(!n.dragging){var e=v.getEventPixel(n.originalEvent);g(e)}})),v.on("click",(function(n){g(n.pixel)}))}},function(n){"use strict";var e;e=9214,n(n.s=e)}]);
//# sourceMappingURL=hitdetect-vector.js.map