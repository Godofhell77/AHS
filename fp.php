<html>
<head>
<title>Future Project</title>
</head>
<style>
body {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  background-color: #000;
}
.message {
  display: flex;
  justify-content: center;
  perspective: 300;
  padding-top: 5vh;
}
.texts {
    margin-top: 50px;
  position: relative;
  transform-style: preserve-3d;
  transition: transform 1s;
  color: #FFF;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-size: 15vh;
  line-height: normal;
  cursor: wait;
  height: 27vh;
  width: 90%;
  outline: 10px;
  outline-style: double;
  text-align: center;
}
.texts:hover {
  transform: rotateY(180deg);
}
.text {
  position: absolute;
  top: 15%;
  left: 0;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.text-front {
  z-index: 1;
}
.text-back {
  transform: rotateY(180deg);
}

@media screen and (max-width:995px){
  .texts{
    font-size: 25vh;
  }
}
</style>
<body>

<div class="message">
  <div class="texts">
    <div class="text text-front">
      coming soon
    </div>
    <div class="text text-back">
      Accident Alert
    </div>
  </div>
</div>

<div class="w3-panel w3-padding-16 w3-teal">
  <h1> Our Future Project Plan</h1>
  <video width="100%" height="auto" controls>
  <source src="images/fp.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
</div>
</body>
</html>