<!doctype html>
<html>

<head>
  <!-- <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="referrer" content="strict-origin-when-cross-origin">
  <meta property="og:title" content="FTP-YYC">
  <meta property="og:type" content="website"> -->
  <!-- <link rel="shortcut icon" href="https://ftp-yyc.ca/_assets/images/4b380ebad8d752fff4ec3abcce876896.png">
  <link rel="icon" href="https://ftp-yyc.ca/_assets/images/7285e421d89fd2e8d95379cbeaef5141.png" sizes="192x192">
  <link rel="apple-touch-icon" href="https://ftp-yyc.ca/_assets/images/03a2d4db9323317d1b291bf04b390c5b.png"
    sizes="180x180">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Fraunces:wght@600;700&display=swap"
    rel="stylesheet" /> -->

  <!-- <link href="https://fonts.googleapis.com/css2?family=Special+Gothic+Expanded+One&display=swap" rel="stylesheet"> -->
  <!-- <link href="../dist/output.css" rel="stylesheet"> -->
  <!-- <link href="./output.css" rel="stylesheet">
  <title>FTP-YYC | Filipino Tech Professionals of YYC</title> -->
    <?php wp_head(); ?>
</head>

<body class="font-sans text-[--color-text] bg-white">


  <!-- Header -->
  <header class="header-bg" data-header>
    <div class="wrapper pt-12 pb-5">

      <nav class="flex items-center justify-between font-bold">
        <a href="index.html" class="flex items-center gap-2">
          <img src="./images/ftp-yyc-logo.svg" alt="FTP-YYC Logo" class="w-[320px] h-auto">
        </a>

        <div class="hidden md:flex items-center gap-8 uppercase">
          <a class="navlink text-sm cursor-pointer" href="index.html">Home</a>
          <a class="navlink text-sm cursor-pointer" href="about.html">About Us</a>
          <a class="navlink text-sm cursor-pointer" href="events.html">Events</a>
          <a class="navlink text-sm cursor-pointer" href="insight-list.html">Insights</a>
          <a class="btn btn-primary text-sm px-5 py-2 cursor-pointer" href="#">Connect</a>
        </div>

        <div class="md:hidden">
          <button id="menu-btn" type="button" class="z-[99] block hamburger md:hidden focus:outline-none">
            <span class="hamburger-top"></span>
            <span class="hamburger-middle"></span>
            <span class="hamburger-bottom"></span>
          </button>
        </div>
      </nav>

    </div>

    <!-- Mobile menu -->
    <div id="menu"
      class="absolute top-0 bottom-0 left-0 hidden flex-col self-end w-full min-h-screen py-1 pt-40 pl-12 space-y-3 text-lg uppercase bg-[var(--color-green-dark)]/99 z-40"
      data-menu>
      <div class="wrapper py-6 grid gap-4">
        <a class="navlink text-base py-2" href="index.html">Home</a>
        <a class="navlink text-base py-2" href="about.html">About Us</a>
        <a class="navlink text-base py-2" href="events.html">Events</a>
        <a class="navlink text-base py-2" href="insight.html">Insights</a>
        <a class="btn btn-primary w-full justify-center mt-4" href="contact.html">Connect</a>
      </div>
    </div>
  </header>

