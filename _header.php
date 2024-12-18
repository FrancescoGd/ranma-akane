<!-- Il Mondo di Ranma e Akane - [Ranma ½ - らんま⁠ 1/2] -->
<!--    © 1997, present Nibunnoichi aka Peter Pepper   -->
<!DOCTYPE html>
<html lang="it">
  <head>
    <title>Il Mondo di Ranma e Akane - [Ranma ½ - らんま⁠ 1/2]</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Il Mondo di Ranma e Akane: il più longevo sito italiano su Ranma ½ - 乱馬 と あかね の 世界">
    <meta name="author" content="Francesco Giordano">
    <meta name="keywords" content="Ranma ½, らんま⁠ 1/2, Ranma Saotome, Akane Tendo, Manga, Anime, Rumiko Takahashi, 乱馬, あかね, 高橋 留美子">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="ranma.css" type="text/css">

    <?php
    if (isset($_ENABLE_LIGHTBOX) && $_ENABLE_LIGHTBOX === true) {
      echo "
      <link href=\"libs/lightbox/css/lightbox.min.css\" rel=\"stylesheet\" />
      <script src=\"libs/lightbox/js/lightbox-plus-jquery.min.js\"></script>
      ";
    }
    ?>

  </head>
  <body>
    <div class="container-fluid">
      <div class="row mt-4">
        <!-- BEGIN: Colonna Sinistra -->
        <div class="col-md-3 left-column offcanvas-md offcanvas-start" id="leftColumn" aria-labelledby="offcanvasLabel">
          <div class="p-3">
            <div id="ranmaeakane" class="ranmaeakane">
              <button type="button" class="btn btn-sm btn-light d-md-none text-end" data-bs-dismiss="offcanvas" data-bs-target="#leftColumn" aria-label="Close">⨉</button>
              <a href="/" class="plain">
                <img src="images/logo_top_left.gif" width="200" height="270" border="0" alt="Ranma corre tenendo Akane in braccio" title="Il Mondo di Ranma e Akane">
              </a>
            </div>
            <div id="leftmenu" class="leftmenu">
              <?php
              require '_left_menu.php';
              ?>
            </div>
          </div>
        </div>
        <!-- END: Colonna Sinistra -->
        <!-- BEGIN: Colonna Destra -->
        <div class="col-md-9 right-column">
          <!-- BEGIN: Testata -->
          <header class="container">
            <div class="row align-items-end">
              <div class="col-auto">
                <button type="button" class="btn btn-sm btn-light d-md-none" data-bs-toggle="offcanvas" data-bs-target="#leftColumn" aria-label="Open">☰</button>
              </div>
              <div class="col">
                <a href="/" class="plain">
                  <img src="images/logo_top_right.gif" width="188" height="90" border="0" alt="Logo di Ranma ½ originale in Giapponese" title="Ranma ½ - らんま⁠ 1/2">
                </a>
              </div>
            </div>
          </header>
          <!-- BEGIN: Testata -->
          <!-- BEGIN: Corpo Pagina -->
          <div class="p-3">
            <!-- <span class="menu-toggle d-md-none text-end" onclick="toggleMenu()">☰ Menu</span> -->
            <div id="mainbody" class="mainbody">
              <div id="maintext" class="maintext">
                <!-- BEGIN: Titolo Pagina -->
                <div class="container pagetitle">
                  <div class="row">
                    <div class="col"><?php echo htmlentities($_PAGE_TITLE, ENT_QUOTES|ENT_SUBSTITUTE|ENT_DISALLOWED); ?></div>
                    <div class="col text-end sitetitle">乱馬 と あかね の 世界</div>
                  </div>
                </div>
                <!-- END: Titolo Pagina -->
                <!-- BEGIN: Contenuto Pagina -->
                <div class="pagecontent">