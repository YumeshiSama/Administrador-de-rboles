(self.webpackChunk=self.webpackChunk||[]).push([[7424],{4462:function(e,o,n){"use strict";var t=n(1625),c=n(4794),s=n(7340),i=n(7842),r=n(640),a=n(2581),u=n(5982),m=new c.Z({coordinateFormat:(0,a.Fj)(4),projection:"EPSG:4326",className:"custom-mouse-position",target:document.getElementById("mouse-position")});new t.Z({controls:(0,u.ce)().extend([m]),layers:[new i.Z({source:new s.Z})],target:"map",view:new r.ZP({center:[0,0],zoom:2})});document.getElementById("projection").addEventListener("change",(function(e){m.setProjection(e.target.value)})),document.getElementById("precision").addEventListener("change",(function(e){var o=(0,a.Fj)(e.target.valueAsNumber);m.setCoordinateFormat(o)}))}},function(e){"use strict";var o;o=4462,e(e.s=o)}]);
//# sourceMappingURL=mouse-position.js.map