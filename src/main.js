function ajax( url, callback ) {
   var xhr = new window.XMLHttpRequest();
   xhr.open("GET", url + "?rel=page", true);
   xhr.onload = function() {
      if ( xhr.readyState === xhr.DONE && (xhr.status >= 200 && xhr.status < 300 ) ) {
         if ( this.response ) {
            callback.call( this, this.response );
         }
      }
   }
   xhr.send();
}


var anchor = document.querySelectorAll("a[rel=page]");
[].slice.call( anchor ).forEach( function( trigger ) {
   trigger.addEventListener("click", function( e ) {
      e.preventDefault();

      var pageUrl = this.getAttribute("href");

      ajax( pageUrl, function( data ) {
         document.querySelector("#load").innerHTML = data;
      } );

      if ( pageUrl != window.location ) {
         window.history.pushState( { url: pageUrl }, '', pageUrl );
      }
      return false;
   })
} );

window.addEventListener("popstate", function() {
   ajax( this.window.location.pathname, function( data ) {
      document.querySelector("#load").innerHTML = data;
   } );
} );