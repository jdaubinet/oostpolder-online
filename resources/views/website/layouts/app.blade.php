@include('website.layouts.header')
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
        <!-- Misschien plaatsen in footer ?-->
        <div class="intro column is-8 is-offset-2">
            <h2 class="title">Laaste nieuws</h2><br>
        </div>
        <!-- todo news berichten via database worden opgehaald en weergegeven hier-->
        @newsMessage(['title'=> 'ijsbreker'])
        
         Ijsbreker zit zonder ijs <br />
                   {{ date("d/m/Y")}}
        @endnewsMessage

        @newsMessage(['title'=> 'Koffiemomenten zonder koffie!'])
                   Door de bezuinigen zijn bewoners genoodzaak om eigen koffie mee te nemen.<br />
                   {{ date("d/m/Y")}}
        @endnewsMessage

    </section>
@include('website.layouts.footer')