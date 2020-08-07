

function overClick(id) {
  document.getElementById(id).style.display='block'
}
function outClick(id) {
  document.getElementById(id).style.display='none'
}

          function montre(elem){
          elem.style.display='block';
          }
          function cache(elem){
          elem.style.display='none';
          }


function ShowHide(id) {
   var itm = null;
   if (document.getElementById)
   {
    itm = document.getElementById(id);
   }
   else if (document.all)
   {
    itm = document.all[id];
   }
   else if (document.layers)
   {
     itm = document.layers[id];
   }

   if (!itm) return;
   if (itm.style)
   {
    if (itm.style.display == "none")
    {
      itm.style.display = "";
    }
    else
    {
      itm.style.display = "none";
    }
   }
   else
   {
     itm.visibility = "show";
   }
}


function frameEat()
  {
  if (top.location != self.document.location)
    {
    top.location = self.document.location;
    }
  } 
  
function popup_smileys()
		{
			var width = 200;
			var height =200;
			window.open('myspeach/smile.php', 'cp', 'resizable=yes, location=no, width='
						+width+', height='+height+', menubar=no, status=yes, scrollbars=yes, menubar=no');
		}

var imageTag = false;
var theSelection = false;		
function checkForm() {

	formErrors = false;

	if (document.myspeach.MSpseudo.value.length < 2) {
		formErrors = "Vous devez entrer un -- pseudo -- avant de poster.";
	}
	if (document.myspeach.MSmessage.value.length < 2) {
		formErrors = "Vous devez entrer un -- message -- avant de poster.";
	}
	if (document.myspeach.MSpseudo.value == "Pseudo") {
		formErrors = "Vous devez entrer un pseudo autre que -- Pseudo --.";
	}

	if (formErrors) {
		alert(formErrors);
		return false;
	} else {
		return true;
	}
}

function emoticonMS(text) {
	var txtarea = document.myspeach.MSmessage;
	text = ' ' + text + ' ';
	if (txtarea.createTextRange && txtarea.caretPos) {
		var caretPos = txtarea.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
		txtarea.focus();
	} else {
		txtarea.value  += text;
		txtarea.focus();
	}
}

var max=150;
function compter(f) {
	var txt=f.MSmessage.value;
	var nb=txt.length;
	if (nb>max) { 
		alert("Pas plus de "+max+" caractères !");
		f.MSmessage.value=txt.substring(0,max);
		nb=max;
	}
	f.nbcar.value=max-nb;
}


function timer() {
	compter(document.forms["form1"]);
	setTimeout("timer()",100);
}