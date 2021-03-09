function detectClient() {
    $(document).ready(function () {
        let $headerImage = jQuery('#headerimage');
        let $footerImage = jQuery('#footerimage');
        let $modal = jQuery('#login');

        if ( /Android|webOS|iPhone|iPad|iPod|Blackberry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
          console.log(navigator.userAgent, 'Mini');
          $headerImage.width(1500);
          $headerImage.height(150);

          $footerImage.width(1500);
          $footerImage.height(150);
          $modal.hide();
          $admin.hide();
        
        } else {
          console.log(navigator.userAgent, 'else statement');
          $headerImage.width(1500);
          $headerImage.height(600);

          $footerImage.width(1500);
          $footerImage.height(600);
          $modal.hide();
          $admin.hide();

         // $('#CssChange').css("top", "auto");
          
        }

        /*if ($StaffCheck == 255) {
          console.log('Admin');
          $admin.show();
        } else {
          console.log($StaffCheck, 'JsStaffCheck');
          $admin.hide();
        }*/

      });
    }

function xml() {
    var httpRequest;
    document.getElementById("load").addEventListener('onclick', makeRequest);

    function makeRequest() {
      httpRequest = new XMLHttpRequest();

      if (!httpRequest) {
        alert('Giving up :( Cannot create an XMLHTTP instance');
        return false;
    }
      httpRequest.onreadystatechange = alertContents;
      httpRequest.open('GET', 'visit.php');
      httpRequest.send();
  }

    function alertContents() {
      if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
          alert(httpRequest.responseText);
      } else {
          alert('There was a problem with the request.');
      }
    }
  }
}
