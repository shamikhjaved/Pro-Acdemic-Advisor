<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- Start of simationtechnology Zendesk Widget script -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63a9de0047425128790a2913/1gl7omdb2';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<script type="text/javascript">
    // Wait for the DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        // Get the form element
        var form = document.getElementById('my-form');

        // Add an event listener for form submissions
        form.addEventListener('submit', function(event) {
            // Prevent the form from submitting normally
            event.preventDefault();

            // Get the form data
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            // Call the Tawk.to API to send a message
            Tawk_API.onChatMaximized = function(){
                Tawk_API.sendMessage('Name: ' + name + '\nEmail: ' + email + '\nMessage: ' + message);
            };

            // Clear the form fields
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('message').value = '';
        });
    });
</script>

<!--End of Tawk.to Script-->
</head>
<body>
<form id="my-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message"></textarea><br>

    <input type="submit" value="Submit">
</form>


</body>
</html>