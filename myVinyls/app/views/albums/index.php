<?php
require APPROOT . '/views/inc/header.php';
// require APPROOT . '/libraries/Database.php'; 
flash('album_message');

// $album = new Album();
// $albumData = $album->viewData();

// var_dump($albumData);
?>



<div class="row mb-3">
    <div class="col-md-6">
        <h1><?php echo $lang['title_album']; ?></h1>
    </div>
    <div class="col-md-6">
        <a href="<?php echo URLROOT; ?>/albums/add" class="btn btn-dark pull-right">
            <i class="fa fa-pencil"></i> <?php echo $lang['btn_album']; ?>
        </a>
    </div>
</div>


<div class="album-search">
    <form class="search-form" action="api_search.php" method="POST">
        <div id="artist-container">
            <input name="artist" class="search-input" id="artist-search" type="text" oninput="search(this.value)" placeholder="<?php echo $lang['search_field_artist']; ?>">
            <!-- oninput="search(this.value)" -->

        </div>

        <div class="result">

        </div>

    </form>
</div>

<!-- From livesearch -->

<!-- <ul id="dataViewer">
    // <?php foreach ($albumData as $i) { ?>
        <li><?php echo $i['artist']; ?></li>
    <?php } ?>
</ul> -->

<!-- End From livesearch -->

<div id="results">


    <?php foreach ($data['albums'] as $album) : ?>


        <div class="card card-body mb-3">
            <div class="bg-light card-inner mg-3">
                <img class="card-img-top album_img" src="<?php echo $album->image ?>" alt="">
                <div class="card-info">
                    <h3 class="card-title mb-2"> <?php echo $album->artist ?></h3>
                    <h5 class="card-subtitle mb-3"> <?php echo $album->title ?></h5>
                    <p class="card-text mb-1">Genre: <?php echo $album->genre ?></p>
                    <p class="card-text mb-1"><?php echo $lang['album_release']; ?>: <?php echo $album->released ?></p>
                    <!-- <p class="card-text">Tracks: <?php echo $album->tracks ?></p> -->
                </div>
                <div class="card-link">
                    <a href="<?php echo URLROOT; ?>/albums/show/<?php echo $album->albumId; ?>" class="btn btn-dark btn-block"><?php echo $lang['btn_album_more']; ?></a>
                </div>
            </div>
        </div>


    <?php endforeach; ?>
</div>
<div id="card_template" style="display: none;">
    <div class="card card-body mb-3">
        <div class="bg-light card-inner mg-3">
            <img class="card-img-top album_img" src="{{:image}}" alt="">
            <div class="card-info">
                <h3 class="card-title mb-2"> {{:artist}}</h3>
                <h5 class="card-subtitle mb-3"> {{:title}}</h5>
                <p class="card-text mb-1">Genre: {{:genre}}</p>
                <p class="card-text mb-1">Released: {{:released}}</p>
                <!-- <p class="card-text">Tracks: </p> -->
            </div>
            <div class="card-link">
                <a href="http://localhost/myVinyls/albums/show/{{:albumId}}" class="btn btn-dark btn-block">More</a>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>