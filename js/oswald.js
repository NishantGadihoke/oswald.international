String.prototype.capitalize = function() {
	return this.charAt(0).toUpperCase() + this.slice(1);
}

function iX(e){var t=e.match(/^([^:\/?#]+:)?(?:\/\/([^\/?#]*))?([^?#]+)?(\?[^#]*)?(#.*)?/);return"string"==typeof t[1]&&t[1].length>0&&t[1].toLowerCase()!==location.protocol?!0:"string"==typeof t[2]&&t[2].length>0&&t[2].replace(new RegExp(":("+{"http:":80,"https:":443}[location.protocol]+")?$"),"")!==location.host?!0:!1}for(document.querySelector("body").innerHTML=document.querySelector("body").innerHTML.replace(/'/g,"&rsquo;"),i=0;i<document.querySelectorAll("a").length;i++)iX(document.querySelectorAll("a")[i].getAttribute("href"))&&document.querySelectorAll("a")[i].setAttribute("target","_blank");