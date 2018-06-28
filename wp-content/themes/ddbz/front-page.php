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
    <h2>helloWorld!</h2>
    <h3>it's me... Jordan</h3>

    <p>Software is hungry. They say it's eating the world. So which side of the buffet line are you on? Does technology and software serve you? Or are you being served to software?</p>

    <p>Scary thought. I imagine the answer is complicated. Technology can be complicated. Such is life. No worries, I'm here to help.</p>

    <p>Welcome to diezDesignBuildz, your one stop shop for digital design/build solutions. </p>

    <h4><a href="#">I'd like to offer my services</a></h4>

    <p>I'm passionate about leveraging technology for growth and empowerment. I'm seeking good people and fun, challenging projects. I'd love to help design/build digital solutions that grow alongside you, your business, and your communities.</p>

    <p>The device that's currently connecting you to me is over a million times more powerful than the ones that sent man to the moon. Pretty nuts. Now this isn't an invitation to some wild interstellar adventure, maybe someday... for now, let's talk bottle rockets.</p>

    <p>Do you have something you'd like to launch? An idea? A business? Maybe you've already launched a little something and want to adjust the trajectory. Wanna talk boosters? Let's see if it goes up to 11.</p>

    <p>We've all got rockets in our pockets, and most don't know it. The pieces are all there, ready to be put together. Let me help.</p>

    <h4><a href="#">...just pick up the phone...</a></h4>

    <p>I'm an adept wordsmith with a passion for pushing pixels. I've been a published photographer and 3D modeler. In my twenties I was a globe trotter, and helped snag first prize with team Denmark in the Shell Eco Marathon. After engineering school I immersed myself in three and a half blissful years of architectural design/build. It was there that I developed a lense for the big picture, and came to see that I'm at my best when I bring all my seemingly disparate skills together. That we are at our collective best when we all know how to come together. That inspired me to co-found a tech startup in the education space. Thus began my foray into cyberspace and the wonderful world of web development.</p>

    <h4>...</h4>

    <p>Then I got hit by a bus. Then I fell in love. Sometimes in life, we are taken off our feet, spun around and upside down. I learned to let go. I rolled with the flow. I found myself in far away places, encountering all kinds of lovely people living lives of contribution to their communities.</p>

    <p>I realized that the people who stand to benefit most from tech are often the most underserved. There are so many projects, stories, and movements in need of amplification. But with technology there lies an inherent disconnect, a void between the digital and the physical. Bolstering that divide is $$$, a high barrier to entry, and the growing evidence that suggests social media is ripping apart our social fabric. </p>

    <p>How do we serve anyone seeking answers in isolation? What is life if not a collaboration?</p>

    <p>While I love what I do, it could use a bit more <strong>you</strong>.</p>

    <h4><a href="#">So... let's collaborate!</a></h4>

    <p class="quiet"><em>ddBz.io is brand new, the pieces are still being put together. If you have any questions, comments, feedback, or just want to say "hey", pick up the phone</em></p>
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
