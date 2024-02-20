<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>* {
  box-sizing: border-box;
}
:root {
  --background-color: black;
  --text-color: hsl(0, 0%, 100%);
}
body {
  margin: 0;
}
.wrapper {
  display: grid;
  place-content: center;
  background-color: var(--background-color);
  min-height: 100vh;
  font-family: "Oswald", sans-serif;
  font-size: clamp(1.5rem, 1rem + 18vw, 15rem);
  font-weight: 700;
  text-transform: uppercase;
  color: var(--text-color);
}

.wrapper > div {
  grid-area: 1/1/-1/-1;
}
.top {
  clip-path: polygon(0% 0%, 100% 0%, 100% 48%, 0% 58%);
}
.bottom {
  clip-path: polygon(0% 60%, 100% 50%, 100% 100%, 0% 100%);
  color: transparent;
  background: -webkit-linear-gradient(177deg, black 53%, var(--text-color) 65%);
  background: linear-gradient(177deg, black 53%, var(--text-color) 65%);
  background-clip: text;
  -webkit-background-clip: text;
  transform: translateX(-0.02em);
}
</style>
</head>
<body>
<section class="wrapper">
  <div class="top">สั่งซื้อสำเร็จ</div>
  <div class="bottom" aria-hidden="true">สั่งซื้อสำเร็จ</div>
</section>
</body>
</html>