(self.webpackChunk=self.webpackChunk||[]).push([[3857],{8418:function(e,r,o){"use strict";var n=o(780),t=o(1625),i=o(5400),c=o(158),s=o(640),l=o(6363),a=o(5367),u=o(5659),w={},f=new l.ZP({stroke:new a.Z({color:"gray",width:1}),fill:new u.Z({color:"rgba(20,20,20,0.9)"})}),m=new l.ZP({stroke:new a.Z({color:"rgba(200,20,20,0.8)",width:2}),fill:new u.Z({color:"rgba(200,20,20,0.4)"})}),v=new i.Z({declutter:!0,source:new c.Z({maxZoom:15,format:new n.Z({idProperty:"iso_a3"}),url:"https://ahocevar.com/geoserver/gwc/service/tms/1.0.0/ne:ne_10m_admin_0_countries@EPSG%3A900913@pbf/{z}/{x}/{-y}.pbf"}),style:f}),d=new t.Z({layers:[v],target:"map",view:new s.ZP({center:[0,0],zoom:2,multiWorld:!0})}),g=new i.Z({map:d,renderMode:"vector",source:v.getSource(),style:function(e){if(e.getId()in w)return m}}),p=document.getElementById("type");d.on(["click","pointermove"],(function(e){"singleselect-hover"===p.value&&"pointermove"!==e.type||"singleselect-hover"!==p.value&&"pointermove"===e.type||v.getFeatures(e.pixel).then((function(e){if(!e.length)return w={},void g.changed();var r=e[0];if(r){var o=r.getId();0===p.value.indexOf("singleselect")&&(w={}),w[o]=r,g.changed()}}))}))}},function(e){"use strict";var r;r=8418,e(e.s=r)}]);
//# sourceMappingURL=vector-tile-selection.js.map