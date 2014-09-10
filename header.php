<html>
<head>
  <title>Shine the Light Ogden</title>
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,300,400italic,400,600italic,600,700italic,700,800italic,800" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="/styles.css#0002" />
</head>
<body>
  <div class="page_layout">
    <div class="top_nav_container"></div>
      <div class="page_content">
        <div class="top_nav">
          <ul class="nav">
            <?php
              if (isset($_COOKIE['logged_in']) && isset($site_context)) {
                if ($site_context == 'choir') {
                  include('nav_choir.php');
                } else {
                  include('nav_cast.php');
                }
              } else {
                include('nav.php');
              }
            ?>
            <li><a href="/index.php">Home</a></li>
          </ul>
          <div class="logo"><a href="/index.php"><img src="/images/logo.png" /></a></div>
        </div>
        <div class="top_section">
          <div class="top_section_container" style="padding-bottom: 0px;">
            <div class="top_section_body">