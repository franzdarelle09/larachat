<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larachat</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div id="app" class="app">
        <header>
            <h1>Let's Talk</h1>
            <input type="text" name="username" id="username" placeholder="Please enter a username" autocomplete="off" />
        </header>

        <div id="messages"></div>

        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Write a message ..." autocomplete="off" />
            <button type="submit" id="message_send">Send Message</button>
        </form>
        
    </div>

    @vite('resources/js/app.js')
</body>
</html>