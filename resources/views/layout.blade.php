<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Zéfanjo Mulder</title>
    @vite(['resources/css/app.css', 'resources/js/script.js'])
</head>
<body>
<div id="englishText">
        <div id="overlay">
            <img id="cross" src="/images/cross.svg" alt="/images/cross.svg">
            <div class="coverLinks">
                <a id="hover" href="/">Home</a>
                <a id="hover" href="/about">About Me</a>
                <a id="hover" href="/resume">Resume</a>
                <a id="hover" href="/portfolio">Portfolio</a>
                <a id="hover" href="/contact">Contact</a>
                <div class="mobileFooter">
                    <footer>© Copyright Zéfanjo Mulder</footer>
                </div>
            </div>
        </div>
    <div class="sidebar">
        <div class="photoBox"></div>
            <header>Zéfanjo Mulder</header>
        <div>
            <a target=”_blank” href="https://www.instagram.com/skaxta/"><img class="buttons" src="/images/insta.svg" alt=""></a>
            <a target=”_blank” href="https://discord.com/channels/@me"><img class="buttons" src="/images/discord.svg" alt=""></a>
        </div>
        <div class="links">
            <a id="hover" href="/">Home</a>
            <a id="hover" href="/about">About Me</a>
            <a id="hover" href="/resume">Resume</a>
            <a id="hover" href="/portfolio">Portfolio</a>
            <a id="hover" href="/contact">Contact</a>
        </div>
            <img id="bars" src="/images/bars.svg" alt="barsButton">
        <div id="transText">
            <div id="transDutch">NL</div>
        </div>
        <div class="footer">
            <footer>© Copyright Zéfanjo Mulder</footer>
        </div>
    </div>
</div>

<div id="dutchText">
            <div id="overlayNl">
                <img id="crossNl" src="/images/cross.svg" alt="/images/cross.svg">
                <div class="coverLinks">
                    <a id="hover" href="/">Home</a>
                    <a id="hover" href="/about">Over Mij</a>
                    <a id="hover" href="/resume">CV</a>
                    <a id="hover" href="/portfolio">Portfolio</a>
                    <a id="hover" href="/contact">Contact</a>
                    <div class="mobileFooter">
                        <footer>© Copyright Zéfanjo Mulder</footer>
                    </div>
                </div>
            </div>
        <div class="sidebar">
            <div class="photoBox"></div>
            <header>Zéfanjo Mulder</header>
            <div>
                <a target=”_blank” href="https://www.instagram.com/skaxta/"><img class="buttons" src="/images/insta.svg" alt=""></a>
                <a target=”_blank” href="https://discord.com/channels/@me"><img class="buttons" src="/images/discord.svg" alt=""></a>
            </div>
            <div class="links">
                <a id="hover" href="/">Home</a>
                <a id="hover" href="/about">Over Mij</a>
                <a id="hover" href="/resume">CV</a>
                <a id="hover" href="/portfolio">Portfolio</a>
                <a id="hover" href="/contact">Contact</a>
            </div>
            <img id="barsNl" src="/images/bars.svg" alt="barsButton">
            <div id="transText">
                <div id="transEnglish">EN</div>
            </div>
            <div class="footer">
                <footer>© Copyright Zéfanjo Mulder</footer>
            </div>
        </div>
</div>

@yield('content')
</body>
</html>
