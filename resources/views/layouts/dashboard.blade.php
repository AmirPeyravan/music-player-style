<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد کاربری | مدیا پلیر من</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
</head>
<body>

@include('partials.dashboard.slidebar')

@include('partials.dashboard.headContent')

@yield('content')

@include('partials.dashboard.musicPlayer')

@include('partials.dashboard.addSong')

<script src="js/dashboard.js"></script>
</body>
</html>
