(self.webpackChunk=self.webpackChunk||[]).push([[3673],{1752:function(t,e,r){"use strict";var o=r(1625),a=r(7842),n=r(640),i=r(6343),s=r(4589),u=r(9923),p="get_your_own_D6rA4zTHduk6KOKTXzGB",c='<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',l=new a.Z({source:new i.Z({attributions:c,url:"https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key="+p,tileSize:512,maxZoom:22})}),m=new a.Z({source:new i.Z({attributions:c,url:"https://api.maptiler.com/tiles/satellite/{z}/{x}/{y}.jpg?key="+p,maxZoom:20})}),w=document.getElementById("map"),h=new o.Z({layers:[l,m],target:w,view:new n.ZP({center:(0,s.mi)([-109,46.5]),zoom:6})}),f=75;document.addEventListener("keydown",(function(t){38===t.which?(f=Math.min(f+5,150),h.render(),t.preventDefault()):40===t.which&&(f=Math.max(f-5,25),h.render(),t.preventDefault())}));var y=null;w.addEventListener("mousemove",(function(t){y=h.getEventPixel(t),h.render()})),w.addEventListener("mouseout",(function(){y=null,h.render()})),m.on("prerender",(function(t){var e=t.context;if(e.save(),e.beginPath(),y){var r=(0,u.CR)(t,y),o=(0,u.CR)(t,[y[0]+f,y[1]]),a=Math.sqrt(Math.pow(o[0]-r[0],2)+Math.pow(o[1]-r[1],2));e.arc(r[0],r[1],a,0,2*Math.PI),e.lineWidth=5*a/f,e.strokeStyle="rgba(0,0,0,0.5)",e.stroke()}e.clip()})),m.on("postrender",(function(t){t.context.restore()}))}},function(t){"use strict";var e;e=1752,t(t.s=e)}]);
//# sourceMappingURL=layer-spy.js.map