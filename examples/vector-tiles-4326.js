(self.webpackChunk=self.webpackChunk||[]).push([[1605],{2156:function(e,t,o){"use strict";var r=o(780),n=o(6578),i=o(158),s=o(640),a=o(3561),c=o(6889);c.H2.length=14;for(var u=0;u<14;++u)c.H2[u]=.703125/Math.pow(2,u+1);(0,a.ZP)("map","https://api.maptiler.com/maps/basic-4326/style.json?key=get_your_own_D6rA4zTHduk6KOKTXzGB").then((function(e){var t=new n.Z({extent:[-180,-90,180,90],tileSize:512,resolutions:c.H2}),o=e.get("mapbox-style");e.getLayers().forEach((function(e){var n=e.get("mapbox-source");if(n&&"vector"===o.sources[n].type){var s=e.getSource();e.setSource(new i.Z({format:new r.Z,projection:"EPSG:4326",urls:s.getUrls(),tileGrid:t}))}})),e.setView(new s.ZP({projection:"EPSG:4326",zoom:o.zoom,center:o.center}))}))}},function(e){"use strict";var t;t=2156,e(e.s=t)}]);
//# sourceMappingURL=vector-tiles-4326.js.map