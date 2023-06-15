<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet"href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<script src="js/index.js"></script>
<title>Css</title>
</head>
<body>
<div class="wrapper">
<header>
Send us a message.
</header>
<form action="#">
<div class="dbl-field">
<div class="field">
<input name="name" type="text" placeholder="Enter your name." required />
<i class="fas fa-user"></i>
</div>
<div class="field">
<input name="email" type="email" placeholder="Enter your email." required />
<i class="fas fa-envelope"></i>
</div>
<div class="field">
<input name="phone" type="number" placeholder="Enter your phone." required />
<i class="fas fa-phone-alt"></i>
</div>
<div class="field">
<input name="website" type="url" placeholder="Enter your website." />
<i class="fas fa-globe"></i>
</div>
<div class="message">
<textarea name="message" placeholder="Write your message here."></textarea>
<i class="material-icons"></i>
</div>
<div class="button-area">
<button type="submit">Send Message</button>
<span>Sending your message...</span>
</div>
</div>
</form>
</div>
</body>
</html>