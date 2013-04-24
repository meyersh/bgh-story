<!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Interactive Story [Prototype]</title>
      <meta charset="utf-8">
      <link REL=StyleSheet HREF="index.css" TYPE="text/css" MEDIA=screen>
      <script src="jquery-1.9.1.min.js"></script>
      <script type="text/javascript" src="index.js"></script>
    </head>
    <body>
      <div id="start_screen" class="screen">

        <p>Boys and Girls Home and Family Services Inc. provides a
        variety of services to help change lives.</p>

        <p>But, you'd <em>never</em> need their help. Right?</p>

        <ul class="choice">
          <li class="choice" onClick="displayScenario(0);">
            Accept the Challenge
          </li>
          <li class="choice" onClick="displayFactoid(0,1);" style="display:none;">
          [debugging] displayFactoid(0,1);
          </li>
          <li class="choice" onClick="displayOnly('end_screen');" style="display:none;">
          [debugging] displayOnly('end_screen');
          </li>
          <li class="choice" onClick="window.location = 'admin/';" style="display:none;">
          [debugging] Administration
          </li>

        </ul>
        <!--       <button onClick="displayScenario(0);">displayScenario(0)</button>
        <button onClick="displayFactoid(0,1);">displayFactoid(0,1)</button>
        <button onClick="displayFactoid(0,1);">displayFactoid(0,1)</button>
        -->
      </div>

      <div id="scenario_screen" class="screen">
        <div id="scenario_description">DESCR</div>
        <div class="responses">
          <hr/>
          <p>What do you do?</p>
          <ul id = "scenario_responses"> </ul>
        </div>
      </div>

      <div id="factoid_screen" class="screen">
        <div id="factoid_text"></div>
        <ul class="choice">
          <li id="factoid_ok_button" class="choice">OK</li>
        </ul>
      </div>

      <div id="end_screen" class="screen">
        <p>This is the end!</p>

        <p>Here we will display a summary, perhaps a donate button, and
      certainly encourage visitors on to the boysandgirlshome.com
      website.</p>

        <ul class="choice">
          <li class="choice" onClick="displayOnly('start_screen');">
          Start Over
          </li></ul>

      </div>

    </body>
  </html>