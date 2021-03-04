<div class="home">
<!-- <p class="intro">20 restaurant are available in this  website </p> -->

<h1 class="ml14">
  <span class="text-wrapper">
    <span class="letters">15 restaurants are available in this  website</span>
    <span class="line"></span>
  </span>
</h1>
<div class="text-center">
  <h2 class="">Do you have new restaurants that should be added</h2> 
  <button type="button" class="btn btn-warning text-dark mb-4">
  <a class="text-dark font-weight-bold" href="#form">Add Here</a>
  </button>
  </div>
    <div class="card-columns">

        <?php
        foreach ($this->data as $brand) {
        ?>
            <div class="card d-inline-block mb-4 ">
                <img class="card-img-top" src="imgs/<?= $brand->image ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $brand->name ?></h5>

                    <a href="index.php?action=view&id=<?= $brand->id ?>" class="btn-dark text-light w-25 btn-lg text-center ml-5 " style="font-size: 20px;font-family: ovo;">View</a>
                </div>
            </div>
        <?php
        }
        ?>

        <?php
        foreach ($this->ads as $ad) {
        ?>
            <div class="card d-inline-block ">
                <img class="card-img-top" src="<?= $ad->img ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $ad->name ?></h5>
                    <a href="<?= $ad->link ?>" target="_blank" class="btn-dark text-light w-25 btn-lg text-center ml-5 ">Shop</a>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</div>

<script>

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml14 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml14 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeInOutExpo",
    duration: 900
  }).add({
    targets: '.ml14 .letter',
    opacity: [0,1],
    translateX: [40,0],
    translateZ: 0,
    scaleX: [0.3, 1],
    easing: "easeOutExpo",
    duration: 800,
    offset: '-=600',
    delay: (el, i) => 150 + 25 * i
  }).add({
    targets: '.ml14',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
