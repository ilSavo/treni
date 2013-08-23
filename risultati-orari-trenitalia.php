<?php if (!isset($_GET['car'])) header('Location: http://oraritreni.it') ?>
<?php // migliorare controlli ?>
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

          <div class="col-md-12">
            <iframe src="http://orario.trenitalia.com/b2c/nppPriceTravelSolutions.do?car=<?php echo $_GET['car'] ?>&stazin=<?php echo $_GET['stazin'] ?>&stazout=<?php echo $_GET['stazout'] ?>&datag=<?php echo $_GET['datag'] ?>&datam=<?php echo $_GET['datam'] ?>&dataa=<?php echo $_GET['dataa'] ?>&timsh=<?php echo $_GET['timsh'] ?>&timsm=<?php echo $_GET['timsm'] ?>&nreq=<?php echo $_GET['nreq'] ?>&lang=<?php echo $_GET['lang'] ?>&channel=<?php echo $_GET['channel'] ?>&npag=<?php echo $_GET['npag'] ?>&lang_r=<?php echo $_GET['lang_r'] ?>&channel_r=<?php echo $_GET['channel_r'] ?>&npag_r=<?php echo $_GET['npag_r'] ?>" style="width: 100%; height: 800px;"></iframe>
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
    
    <div id="divToUpdate">test</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        // attach handler to form's submit event 
        // $('#cercatreni').submit(function() { 
        //     $(this).ajaxSubmit({
        //       target:     '#divToUpdate', 
        //       // url:        'comment.php', 
        //       success:    function() { 
        //         alert('Thanks for your comment!'); 
        //       } 

        //     }); 
        //     return false; 
        // });
      });

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