<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Orari Treni Ufficiali delle ferroviarie italiane - OrariTreni.it</title>
    <meta name = "description" content ="Su OrariTreni.it trovi gli orari dei treni aggiornati e le ultime notizie su stazioni, scioperi, compagnie ferroviarie e consigli di viaggio." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container" style="margin-top: 10px">
      <div style="width: 73px; margin: 0 auto">
        <img src="images/oraritreni.png" width="73" height="73" />
      </div>
      <h1 align="center" class="Stile2">OrariTreni.it</h1>
      <p style="font-size: 36px">
        Presto online il motore di ricerca degli orari 
        dei treni di tutte le compagnie ferroviarie italiane.
      </p>

      <div class="row" style="margin: 0 auto">
        <div class="col-md-6">
          <h3>Orari Treni Trenitalia</h3>
          <h3>Consulta online l&#39;<strong>orario</strong> del tuo treno</h3>
          
          <form role="form" name="cercatreni" action="http://orario.trenitalia.com/b2c/nppPriceTravelSolutions.do?" target="_blank" onsubmit="return validateForm()" method="get">
            <input type="hidden" name="car" value="0">
            <div class="form-group">
              <label>Stazione di partenza:</label>
              <input type="text" name="stazin" size="20" id="idcampoA" class="form-control">
            </div>
            <div class="form-group">
              <label>Stazione di arrivo:</label>
              <input type="text" name="stazout" size="20" id="idcampoB" class="form-control">
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="" for="inputSuccess">Data di partenza:</label>
                  <div class="row">
                    <div class="col-lg-4">
                      <select size="1" name="datag" id="iddatag" class="form-control col-lg-2">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>   
                    </div>
                    <div class="col-lg-4">
                      <select size=1 name="datam" id="datam" class="form-control">
                        <option  value=1>Gen</option>
                        <option  value=2>Feb</option>
                        <option  value=3>Mar</option>
                        <option  value=4>Apr</option>
                        <option  value=5>Mag</option>
                        <option  value=6>Giu</option>
                        <option  value=7>Lug</option>
                        <option  value=8>Ago</option>
                        <option  value=9>Set</option>
                        <option  value=10>Ott</option>
                        <option  value=11>Nov</option>
                        <option  value=12>Dic</option>
                      </select>
                    </div>
                    <div class="col-lg-4">
                      <select size="1" name="dataa" id="iddataa" class="form-control">
                        <option selected value="2013">2013</option>
                        <option  value="2014">2014</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="" for="">Ora:</label>
                  <div class="row">
                    <div class="col-lg-4">
                      <select size="1" name="timsh" id="idtimsh" class="form-control">
                        <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            <INPUT TYPE="hidden"  name="timsm"   VALUE="00">
            <INPUT TYPE="hidden"  name="nreq"    VALUE="10">
            <INPUT TYPE="hidden"  name="lang"    VALUE="it">
            <INPUT TYPE="hidden"  name="channel"  VALUE="tcom">
            <INPUT TYPE="hidden"  name="npag"   VALUE="1">
            <INPUT TYPE="hidden"  name="lang_r"   VALUE="it">
            <INPUT TYPE="hidden"  name="channel_r"  VALUE="tcom">
            <INPUT TYPE="hidden"  name="npag_r"   VALUE="1">
            <input type="submit" value="Cerca" class="submit-button btn btn-default">
          </form>
        
        </div>
        <div class="col-md-6">
          <p>
            <strong>OrariTreni.it</strong> è il nuovo punto di riferimento sul web della comunità 
            dei viaggiatori in treno. <strong>OrariTreni.it</strong> fornirà informazioni dettagliate 
            su ritardi, scioperi, stazioni e molto altro. 
          </p>

          <p>
            Inoltre, potrete trovare tutte le ultime informazioni sul costo dei biglietti e i consigli 
            per i migliori itinerari di viaggio in treno. 
          </p>
          <p>
            Il <strong>viaggio in treno</strong> è un piacere che spesso non viene vissuto come tale 
            a causa di ritardi o mancati servizi, ciò nonostante il treno rimane il mezzo di trasporto 
            con più fascino. 
          </p>
          <p>
            Recentemente si sta reinvestendo in questa fondamentale infrastruttura anche in Italia e 
            tra qualche anno il <strong>viaggiare in treno </strong>riprenderà quel prestigio perso con 
            il passare del tempo e lo sviluppo di altri mezzi di trasporto.
          </p>
          <p>
            L'apertura del mercato delle ferrovie in Italia sta avvantaggiando il consumatore sul 
            <strong>prezzo dei biglietti</strong> dei treni. 
          </p>
          <p>
            Infatti, grazie alla competizione tra Trenitalia, Italo, Trenord, Ferrovie del Sud Est e 
            ArenaWays le tariffe stanno scendendo e la qualità del servizio sta salendo.
          </p>
        </div>
      </div>
      <div style="margin-top: 30px"></div>
      <p>
        Tra qualche settimana la ricerca degli <strong>orari dei treni</strong> sarà facile ed immediata, potrai cercare in tempo reale l'orario del tuo treno indipendentemente dalla compagnia su <strong>OrariTreni.it</strong>
      </p>
      <p class="text-center">
        <a href="http://twitter.com/oraritreni">Segui @oraritreni su Twitter</a>
      </p>
      <p class="text-center">
        <a href="http://twitter.com/oraritreni"><img src="images/twitter-icon.png" alt="Twitter" width="40" height="40" /></a>
      </p>
      <p class="text-center">
        <small class="text-center">
          OrariTreni.it non è affiliato direttamente con nessuna delle compagnie ferroviarie elencate
        </small>
      </p>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>