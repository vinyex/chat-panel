<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Virtual</title>
</head>
<style media="screen">
    *, ::after, ::before {
        box-sizing: border-box;
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    body {
        margin: 0;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
    }

    div {
        display: block;
    }

    .text-danger {
        color: red;
        font-style: italic;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <h2>Hi! {{ $nama }}</h2>
            <p>Welcome to Virtual Chatpanel App</p>
            <p>Our App has been release in 1.0.0 version on 27 July 2019.</p>
            <p>Here is your account data</p>
            <ul>
                <li>Username: {{ $username }}</li>
                <li>Password: {{ $password }} <p class="text-danger">* you can set it again after login</p></li>
            </ul>
            <p>Maybe this is not your perfect Application Chat but is worthy to take some text, we will make improvements in the future for the best.</p>
            <p><a href="http://virtual-chatpanel.herokuapp.com/login">Hit this link for use your account!</a></p>
            <p>If you have a several things to ask, please inform to this email. Thank you!</p>
            <br>
            <h5>Best Regards</h5>
            <br><br>
            <a href="https://github.com/vinyex">Your Author</a>
        </div>
    </div>
</body>
</html>