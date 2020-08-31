<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>GTCoding</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">

      <form action="result.php" method="POST">

      <h2>Video Category</h2>

      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input
              type="radio"
              class="radio"
              id="automobiles"
              name="category"
              value="automobiles"
            />
            <label for="automobiles">Automobiles</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="film" name="category" value="film" />
            <label for="film">Film & Animation</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="science" name="category" value="science" />
            <label for="science">Science & Technology</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="art" name="category" value="art"/>
            <label for="art">Art</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="music" name="category" value="music"/>
            <label for="music">Music</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="travel" name="category" value="travel" />
            <label for="travel">Travel & Events</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="sports" name="category" value="sports"/>
            <label for="sports">Sports</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="news" name="category" value="news"/>
            <label for="news">News & Politics</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="tutorials" name="category" value="tutorials"/>
            <label for="tutorials">Tutorials</label>
          </div>
        </div>

        <div class="selected">
          Select Video Category
        </div>

        <div class="search-box">
          <input type="text" placeholder="Start Typing..." />
        </div>
      </div>

      <h2>Platform</h2>

      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input
              type="radio"
              class="radio"
              id="youtube"
              name="platform"
              value="youtube"
            />
            <label for="youtube">YouTube</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="facebook" name="platform" value="facebook"/>
            <label for="facebook">Facebook</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="vimeo" name="platform" value="vimeo" />
            <label for="vimeo">Vimeo</label>
          </div>
        </div>

        <div class="selected">
          Select Video Platform
        </div>

        <div class="search-box">
          <input type="text" placeholder="Start Typing..." />
        </div>
      </div>

      <input type="submit" value="Upload" class="btn" />
     
      </form>
    </div>

    <script src="main.js"></script>
  </body>
</html>
