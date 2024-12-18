//***************************************************************

// Caricamento di una pagina diversa in base al browser - FGD

//***************************************************************


var browser=navigator.appName + " " + navigator.appVersion;

var getkey=browser.substring(0, 12);


<!-- Inizio
// Carico pagina

function loadPage()

   {

   if (browser.substring(0, 8)=="Netscape")

         window.location="netscape.html";


   if (browser.substring(0, 9)=="Microsoft")

      window.location="explorer.html";


   if ( (browser.substring(0, 8)!="Netscape") && (browser.substring(0, 9)!="Microsoft") )

      window.location="netscape.html";

   }

// Fine -->