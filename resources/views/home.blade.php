<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <section>
      <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 75vh;">
        <img src="images/1.png" width="300">
        <div class="container mt-3 mx-3 d-flex flex-column align-items-center">
            <h1 class="text-center">Welcome to my website!</h1>
            <div class="running-text-container mb-3">
              <marquee behavior="scroll" direction="left" scrollamount="4">
                This is a simple website that I made using {{ $framework_name }}. I hope you enjoy it!
              </marquee>
            </div>
          </div>
          <a href="/login" class="btn btn-primary">Try To Login</a>
      </div>
      <div class='air air1'></div>
      <div class='air air2'></div>
      <div class='air air3'></div>
      <div class='air air4'></div>
    </section>
  </body>
</html>