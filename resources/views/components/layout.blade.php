<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Nimbus Team</title>
    @vite(['resources/css/global.css', 'resources/js/app.js'])
</head>

<body>
    <header class="TheTeam">
        <h1>Meet the Team at Nimbus Tech</h1>
        <p>
            At Nimbus Tech, we’re more than just a web development agency—we’re a
            collective of passionate creators, problem-solvers, and tech enthusiasts
            who believe in building for a better web. As a nimble indie team, we
            thrive on collaboration, combining diverse skills and perspectives to
            craft innovative, accessible, and user-friendly digital experiences.
        </p>
        <p>
            Whether we’re fine-tuning the tiniest detail or reimagining the big
            picture, our team is driven by curiosity, creativity, and a commitment to
            open standards. We’re proud to partner with clients who share our vision
            of a web that’s open, inclusive, and designed to inspi
        </p>
        <p>Let us introduce you to the people behind the magic.</p>
    </header>

    <main>
        {{ $slot }}
    </main>
</body>

</html>
