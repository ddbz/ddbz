<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <title>Diez Design Buildz</title>
</head>
<body>
  <header><h1>Diez Design Build</h1></header>
  <img class="hello phone" src="<?php echo get_template_directory_uri() ?>/images/phone.png">
  <div class="item content"><h1>Content</h1></div>
  <img class="hello jargon" src="<?php echo get_template_directory_uri() ?>/images/jargon.png">
  <footer><p>© 2018 - Diez Design Build</p></footer>

<style>
  :root {
    --gkblue: #1b9cf7;
  }
  html {
    font-family: "Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace;
  }
  body {
    margin: 0;
    color: var(--gkblue);
    display: grid;
    height: 100vh;
    grid-template-columns: 1fr 2fr 1fr;
    grid-template-rows: 1fr 8fr 1fr;
    //grid-gap: 20px;
  }

  header {
    background-color: greenyellow;
    grid-column: 1 / -1;
  }
  .phone {
    grid-column: 1;
    align-self: end;
    justify-self: end;
  }
  .hello {
    width: 95%;
  }
  .jargon {
    align-self: end;
    justify-self: start;
  }
  .content {
    border-left: 1em dashed var(--gkblue);
    border-right: 1em dashed var(--gkblue);
  }

  footer {
    background-color: greenyellow;
    grid-column: 1 / -1;
  }
</style>
</body>
</html>
