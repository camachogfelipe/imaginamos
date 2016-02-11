	function head(){
		if(window.SVGForeignObjectElement){
			document.write('\
				<svg width="357px" height="357px">\
					<defs>\
						<mask id="mask" maskUnits="userSpaceOnUse" maskContentUnits="userSpaceOnUse">\
							<image width="357px" height="357px" xlink:href="rombo.png"/>\
						</mask>\
					</defs>\
					<foreignObject width="100%" height="100%" style="mask: url(#mask);">\
			');
		}
		else{
			document.write('\
				<div class="mascara">\
			');
		}
	}
	function foot(){
		if(window.SVGForeignObjectElement){
			document.write('\
					</foreignObject>\
				</svg>\
			');
		}
		else{
			document.write('\
					<!--[if lte IE 9]>\
					<img src="images/rombo-ie.png" style="display: block; margin-top: -357px;">\
					<![endif]-->\
				</div>\
			');
		}
	}