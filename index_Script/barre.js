function getWindowHeight() {
	var windowHeight = 0;
	if (typeof(window.innerHeight) == 'number') {
		windowHeight = window.innerHeight;
	}
	else {
			if (document.body && document.body.clientHeight) {
				windowHeight = document.body.clientHeight;
			}
		else {
			if (document.documentElement && document.documentElement.clientHeight) {
				windowHeight = document.documentElement.clientHeight;
			}
		}
	}
	return windowHeight;
}
function setFooter() {
  if (document.getElementById) {
     var windowHeight = getWindowHeight();
     if (windowHeight > 0) {
         var footerElement = document.getElementById('fixed');
         if (windowHeight - 179 >= 0) {
          if ((document.all) && (navigator.appVersion.indexOf("Mac",0)<0)) {
                footerElement.style.position = 'absolute';
                footerElement.style.top = (document.body.scrollTop + windowHeight - 179) + 'px';
                }
          else {
                footerElement.style.position = 'fixed';
                footerElement.style.top = (windowHeight - 179) + 'px';
                }
         }
         else {
            footerElement.style.position = 'static';
         }
     }
  }
}
window.onload = function() {
        setFooter();
}
window.onresize = function() {
        setFooter();
}
window.onscroll = function() {
        setFooter();
} 
