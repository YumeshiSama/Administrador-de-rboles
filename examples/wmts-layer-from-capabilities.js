(self.webpackChunk=self.webpackChunk||[]).push([[9490],{4870:function(e,t,n){"use strict";var a=n(1625),r=n(7340),i=n(7842),c=n(640),o=n(8717),s=new(n(5220).Z);fetch("data/WMTSCapabilities.xml").then((function(e){return e.text()})).then((function(e){var t=s.read(e),n=(0,o.B)(t,{layer:"layer-7328",matrixSet:"EPSG:3857"});new a.Z({layers:[new i.Z({source:new r.Z,opacity:.7}),new i.Z({opacity:1,source:new o.Z(n)})],target:"map",view:new c.ZP({center:[19412406.33,-5050500.21],zoom:5})})}))}},function(e){"use strict";var t;t=4870,e(e.s=t)}]);
//# sourceMappingURL=wmts-layer-from-capabilities.js.map