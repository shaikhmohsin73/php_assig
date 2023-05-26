<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>The header() function in PHP is used to send raw HTTP headers to the client's browser. It allows you to control and modify various aspects of the HTTP response, such as setting the response status code, defining content type, setting cookies, enabling caching, and more.</h3>
    <h4>Setting the HTTP response status code: </h4>
    <p>(1) header('HTTP/1.1 200 OK')</p>
    <p>(2)header('Set-Cookie: name=value; expires=Fri, 31-Dec-2023 23:59:59 GMT; path=/');
</p>
<p>(3)header('Cache-Control: public, max-age=3600');
</p>
</body>
</html>