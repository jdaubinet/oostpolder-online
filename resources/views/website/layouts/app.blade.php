<!DOCTYPE html>
<html>

@include('partials.htmlhead')

<body>
@include('partials.masthead')

    <div class="box cta">
        <p class="has-text-centered">
            @include('partials.navbar')
        </p>
    </div>
    <section class="container">

        <div class="columns features padding-0">

            <div class="column is-12 padding-0">
                <h1 class="title">Welkom bij BW Oostpolder</h1>
                <h2 class="subtitle">Een beschermde woonvorm in de gemeente Papendrecht</h2>
            </div>

        </div>
        <div class="columns features">

            <div class="column is-4">
                <div class="card is-shady">
                    <a>
                        <div class="card-image has-text-centered">
                            <i class="fa fa-question"></i>
                        </div>
                        <div class="card-content has-text-centered">
                            <div class="content">
                                <h4>Wat is BW Oostpolder?</h4>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
            <div class="column is-4">
                <a>
                    <div class="card is-shady">
                        <div class="card-image has-text-centered">
                            <i class="fa fa-empire"></i>
                        </div>
                        <div class="card-content has-text-centered">
                            <div class="content text-center">
                                <h4>Dagbesteding</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column is-4">
                <a>
                    <div class="card is-shady">
                        <div class="card-image has-text-centered">
                            <i class="fa fa-apple"></i>
                        </div>
                        <div class="card-content has-text-centered">
                            <div class="content">
                                <h4>Praktische Informatie</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="intro column is-8 is-offset-2">
            <h2 class="title">Laatste nieuws</h2><br>
        </div>
        <div class="sandbox">
            <div class="tile is-ancestor">
                <div class="tile is-parent is-shady">
                    <article class="tile is-child notification is-white">
                        <p class="title">IJsbreker zit zonder ijs</p>
                        <p class="subtitle">blasblanl</p>
                    </article>
                </div>
                <div class="tile is-parent is-shady">
                    <article class="tile is-child notification is-white">
                        <p class="title">De Paap is uit Papendrecht</p>
                        <p class="subtitle">Sinds vandaag zijn er geen Papen meer in Papendrecht</p>
                    </article>
                </div>
                <div class="tile is-parent is-shady">
                    <article class="tile is-child notification is-white">
                        <p class="title">Man bijt hond</p>
                        <p class="subtitle">Hedenmorgen is er een hond overleden door een bijtende man</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="columns">
                <div class="column is-3 is-offset-2">
                    <h2><strong>Over Yulius</strong></h2>
                    <ul>
                        <li><a href="#">Yulius</a></li>
                        <li><a href="#">Yulius locatie CAJ De Steiger</a></li>
                        <li><a href="#">Yulius locatie Oostpolder</a></li>
                        <li><a href="#">Yulius locatie De Kreek</a></li>
                    </ul>
                </div>
                <div class="column is-3">
                    <h2><strong>Algemene informatie</strong></h2>
                    <ul>
                        <li><a href="#">Sfeerimpressie</a></li>
                        <li><a href="#">Dagbesteding</a></li>
                        <li><a href="#">Doelgroep</a></li>
                        <li><a href="#">Aanmelding</a></li>
                        <li><a href="#">De IJsbreker</a></li>
                    </ul>
                </div>
                <div class="column is-4">
                    <h2><strong>Bewoners</strong></h2>
                    <ul>
                        <li><a href="#">Activiteiten</a></li>
                        <li><a href="#">Dagmenu IJsbreker</a></li>
                        <li><a href="#">Prikbord</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="/js/bulma.js"></script>
    </footer>
    </body>

</html>
