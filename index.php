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
        <div class="row">

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
                          <?php for ($i=1; $i <= 31; $i++): ?>
                            <?php $sel = ($i==date('d'))?'selected="selected"':''; ?>
                            <option value="<?php echo $i ?>" <?php echo $sel ?>><?php echo $i ?></option>  
                          <?php endfor ?>
                        </select>   
                      </div>
                      <div class="col-lg-4">
                        <select size=1 name="datam" id="datam" class="form-control">
                          <?php $months = array('', 'Gen', 'Feb', 'Mar','Apr','Mag','Giu','Lug','Ago','Set','Ott','Nov','Dic') ?>
                          <?php for($i=1; $i<=12; $i++): ?>
                            <?php $sel = ($i==date('m'))?'selected="selected"':''; ?>
                            <option value="<?php echo $i ?>" <?php echo $sel ?>><?php echo $months[$i] ?></option>
                          <?php endfor; ?>
                        </select>
                      </div>
                      <div class="col-lg-4">
                        <select size="1" name="dataa" id="iddataa" class="form-control">
                          <?php for ($i=date('Y'); $i<=(date('Y')+1) ; $i++): ?>
                            <?php $sel = ($i==date('Y'))?'selected="selected"':''; ?>
                            <option value="<?php echo $i ?>" <?php echo $sel ?>><?php echo $i ?></option>
                          <?php endfor ?>
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
                          <?php for ($i=0; $i < 24; $i++): ?>
                            <?php $hh = sprintf("%02s", $i); ?>
                            <?php $sel = ($i==date('H'))?'selected="selected"':''; ?>
                            <option value="<?php echo $hh ?>" <?php echo $sel ?>><?php echo $hh ?></option>  
                          <?php endfor; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        
              <input type="hidden" name="timsm" value="00">
              <input type="hidden" name="nreq" value="10">
              <input type="hidden" name="lang" value="it">
              <input type="hidden" name="channel" value="tcom">
              <input type="hidden" name="npag" value="1">
              <input type="hidden" name="lang_r" value="it">
              <input type="hidden" name="channel_r" value="tcom">
              <input type="hidden" name="npag_r" value="1">
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
    <script type="text/javascript">
      function validateForm() {
        var x=document.forms["cercatreni"]["stazin"].value;
        var y=document.forms["cercatreni"]["stazout"].value;
        if (x==null || x=="") {
          alert("Inserisci la stazione di partenza");
          return false;
        }
        if (y==null || y=="") {
          alert("Inserisci la stazione di arrivo");
          return false;
        } 
        //_gaq.push(['_trackPageview', '/magazine/orario-treni/'+ x + '-' + y]);
      }
    </script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-40655110-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  </body>
</html>