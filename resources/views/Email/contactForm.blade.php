<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
Sender Email: {{ $mailData['email'] }}<br/>
Subject: {{ $mailData['subject'] }}<br/>
<br/>
Body: {{ $mailData['message'] }}<br/>
<br/>
Thanks,<br/>
{{ $mailData['name'] }}
</body>
</html>
