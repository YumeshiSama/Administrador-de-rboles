"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[2212],{48385:function(e,t,n){var a=n(41376),r=n(52139),o=n(54354),i=n(31998),s=n(12810),l="get_your_own_D6rA4zTHduk6KOKTXzGB",c=new r.Z({opacity:.6,source:new i.Z({url:"https://api.maptiler.com/tiles/terrain-rgb/{z}/{x}/{y}.png?key="+l,maxZoom:10,tileSize:512,crossOrigin:"anonymous"}),style:{variables:{level:0},color:["case",["<=",["+",-1e4,["*",25.5,["+",["*",65536,["band",1]],["+",["*",256,["band",2]],["band",3]]]]],["var","level"]],[139,212,255,1],[139,212,255,0]]}}),p=new a.Z({target:"map",layers:[new r.Z({source:new i.Z({url:"https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key="+l,attributions:'<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',crossOrigin:"anonymous",tileSize:512})}),c],view:new o.ZP({center:(0,s.mi)([-122.3267,37.8377]),zoom:11})}),u=document.getElementById("level"),m=document.getElementById("output"),g=function(){m.innerText=u.value,c.updateStyleVariables({level:parseFloat(u.value)})};u.addEventListener("input",g),u.addEventListener("change",g),m.innerText=u.value;for(var y=document.getElementsByClassName("location"),d=0,v=y.length;d<v;++d)y[d].addEventListener("click",w);function w(e){var t=e.target.dataset,n=p.getView();n.setCenter((0,s.mi)(t.center.split(",").map(Number))),n.setZoom(Number(t.zoom))}}},function(e){var t=function(t){return e(e.s=t)};t(9877),t(48385)}]);
//# sourceMappingURL=webgl-sea-level.js.map