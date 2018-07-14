<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/warenhaus-typenhebel" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
  <title>Diez Design Buildz</title>
</head>
<body>
  <header>
  <img src="<?php echo get_template_directory_uri() ?>/images/ddbz.png">
  <h1>diezDesignBuildz</h1>
  </header>
  <div class="sidebar-left">
  <img class="hello phone" src="<?php echo get_template_directory_uri() ?>/images/phone.png">
  </div>
  <section class="content">
    <h2>helloWorld</h2>
    <h3>It's me... Jordan</h3>

    <p>I love what I do.</p>

    <p>I love learning how things work. I find beauty in how all the assorted and occasionally complex pieces come together to function as one. How when they come together just right - BOOM - synergy - success - becoming more than the sum of the parts.</p>

    <p>But they don't make things like they used to, people change, and everything pixelated and new is exponentially more complex. Never before have we been more "connected", yet in so many ways we seem to be driven further apart. </p>

    <p>DDBZ is how I do my part. DiezDezignBuildz is my process. I bring together my full stack of skills to map solutions and achieve goals, starting with my own. As I better develop the tools to serve myself, I'll be better able to serve you. </p>

    <p>I do: <span class="services">Digital Design/Build, Web Development, Graphic Design, Content Strategy, Copywriting, Marketing/SEO, and a bunch of other things...</span></p>

    <p>I love what I do, but it could use more you. Want to collaborate?</p>

    <h4><a href="#">... just pick up the phone ...</a></h4>

    <p>I'm passionate about leveraging technology for growth and empowerment. Do you know that the device that's currently connecting you to me is over a million times more powerful than the ones that sent man to the moon? That's nutz. This isn't an invitation to some wild insterstellar adventure... maybe someday... for now, let's talk bottle rockets.</p>

    <p>Do you have something you'd like to launch? An idea? A business? The people who stand to benefit most from tech ar often the last served. Let's change that. I can help you design/build digital solutions that grow alongside you, your business, and your community. </p>

    <p>We've all got rockets in our pockets, but most don't know it. The pieces are all there, ready to be put together. </p>

    <h4><a href="#">let's play</a></h4>
  </section>
  <div class="sidebar-right">
  <img class="hello jargon" src="<?php echo get_template_directory_uri() ?>/images/jargon.png">
  </div>
  <footer><p>© 2018 diezDesignBuildz</p></footer>

<style> 
  :root {
    --gkblue: #1b9cf7;
    --gksprout: #b8ff06;
  }

  html {
    font-family: 'Source Code Pro', monospace;
  }

  body {
    margin: 0;
    color: var(--gkblue);
    display: grid;
    height: 100vh;
    grid-template-columns: 2fr 5fr 2fr;
    grid-template-rows: 50px 1fr 50px;
    //grid-gap: 20px;
  }

  h1, h2, h3, h4 {
    font-family: 'WarenhausTypenhebelStandard', monospace;
    text-shadow: -2px 2px 1px rgba(0, 0, 0, 0.1);
  }
  
  a, a:link {
    text-decoration: none;
    color: var(--gkblue);
    border-bottom: solid 3px var(--gksprout);
  }

  a:hover {
    background: var(--gksprout);
    transition: all 0.75s;
    text-shadow: -2px 2px 0px rgba(255, 255, 255, 0.5);
  }

  header {
    border-bottom: 2px solid var(--gkblue);
    display: grid;
    grid-template-columns: auto 1fr;
    padding: 0 1em;
  }

  header, footer {
    height: 50px;
    grid-column: 1 / -1;
  }

  
  header img {
    height: 100%;
    //filter: saturate(25%) brightness(115%);
  }

  header h1 {
    justify-self: end;
    align-self: center;
  }

  h1 {
    font-size: 2.2em;
    font-weight: 200;
    margin: 0;
  }
  
  h2 {
    text-align: center;
    font-size: 2.5em;
    margin: 0;
  }

  h3 {
    text-align: center;
    font-size: 1.5em;
    opacity: 0.5;
    margin: 0 0 1.3em 0;
    font-style: italic;
  }

  h4 {
    font-size: 1.5em;
    text-align: center;
    text-transform: uppercase;
  }

  .services {
    font-family: 'WarenhausTypenhebelStandard', monospace;
    text-transform: uppercase;
    font-size: 1.5em;
    color: var(--gksprout);
  }

  .quiet {
    opacity: 0.5;
    margin: 1em 1.5em;
    font-size: .8em;
  }

  footer {
    border-top: 2px solid var(--gkblue);
  }

  footer p {
    position: relative;
    text-align:center;
    opacity: .5;
    top: 25%;
    margin: 0;
  }

  .sidebar-left {
    grid-column: 1;
    align-self: end;
    justify-self: end;
  }

  .hello {
    height: 60vh;
    width: auto;
    position: relative;
    right: -2em;
  }

  .jargon {
    //width: 100%;
    position: relative;
    left: -5em;
  }

  .sidebar-right {
    align-self: end;
    justify-self: start;
  }

  .content {
    font-size: 1.2em;
    height: calc(vh - 100px);
    padding: 0 1.5em 0 1.5em;
    border-left: .3em dashed var(--gkblue);
    border-right: .3em dashed var(--gkblue);
    overflow: auto;
  }

  .wpcf7-form {
    display: none;
    //grid-template-columns: 1fr 1fr;
    //grid-gap: 1.5em;
  }

  .your-message {
    //grid-column: 1 / -1;
    width: 100%;
  }

  form p:nth-last-child(3) {
    background: green;
    grid-column: 1 / -1;
  } 

</style>
</body>
</html>
