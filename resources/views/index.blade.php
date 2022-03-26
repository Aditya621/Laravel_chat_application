<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Chat</title>
    <link rel="stylesheet" href="./css/app.css" />
</head>
<body>
    <div class="app">
        <Header>
                <h1>Let's talk</h1>
                 <input type="text" name="username" id="username" placeholder="Enter Username ..">
        </Header>
        <div id="messages"></div>

        <form id="message_form">
            <input type="text" name = "message" id = "message_input" placeholder="Write a Message...">
            <button type="submit"id="message_send">Send Message</button>
        </form>
    </div>
    <script src = "./js/app.js"></script>
</body>
</html>