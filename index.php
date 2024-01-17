<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Do you want to know the password?</h2>
    <h3>Enter your email to get the password!</h3>
    <form id="passwordForm" action="submit2.php" method="post">
      <div class="input-group">
        <input type="text" id="walkerID" name="walkerID" placeholder="Enter Your Walker ID">
      </div>
      <div class="input-group">
        <input type="text" id="email" name="email" placeholder="Enter Your Valid Email">
      </div>
      <input type="submit" value="Submit">
    </form>
  </div>
  <div class="footer">
      Website Made By #77992
  </div>

  <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
  <script>
    document.getElementById('passwordForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent default form submission

      const walkerID = document.getElementById('walkerID').value;
      const email = document.getElementById('email').value;

      // Initialize EmailJS with your User ID
      emailjs.init("5ISIWe5VfUaYV_0K4");

      // Send email using EmailJS
      emailjs.send('service_th50c06', 'template_s4qjvgy', {
        walkerID: walkerID,
        to_email: email
      }).then(function(response) {
        console.log('Email sent successfully!', response);
        // Redirect to a thank you page
        window.location.href = 'thank_you.html';
      }, function(error) {
        console.error('Error sending email:', error);
        // Handle errors or display an error message to the user
      });
    });

  </script>
  <script src="script.js"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
