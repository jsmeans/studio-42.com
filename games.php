<?php /* Template Name: Games */ ?>


<?php get_header(); ?>

<div class='wrapper about'>  

      
        
          <canvas width="600" height="400"></canvas>
          <div class="controls">
            <ul class="ul">
              <li class="red selecteddraw"></li>
              <li class="blue"></li>
              <li class="yellow"></li>
            </ul>
            <button class="buttondraw" id="revealColorSelect">New Color</button>
            <div id="colorSelect">
              <span id="newColor"></span>
              <div class="sliders">
                <p>
                  <label for="red">Red</label>
                  <input id="red" name="red" type="range" min=0 max=255 value=0>
                </p>
                <p>
                  <label for="green">Green</label>
                  <input id="green" name="green" type="range" min=0 max=255 value=0>
                </p>
                <p>
                  <label for="blue">Blue</label>
                  <input id="blue" name="blue" type="range" min=0 max=255 value=0>
                </p>
              </div>
              <div>
              <button class="buttondraw" id="addNewColor">Add Color</button>
              </div>
            </div>
          
      </div> 
<div class="container clearfix page-body">
<?php get_footer(); ?>
