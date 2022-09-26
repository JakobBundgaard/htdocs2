<?php require APPROOT . '/views/inc/header.php'; ?>
    <?php flash('album_message') ?>
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
    <form class="search-form">
            <div id="artist-container">
                <input class="search-input" id="artist-input" type="text" placeholder="<?php echo $lang['search_field_artist']; ?>">
                <!-- oninput="show_artist_results()"> -->
                <!-- onblur="hide_from_results()" -->  
            </div>
            <div id="title-container">
                <input class="search-input" id="title-input" type="text" placeholder="<?php echo $lang['search_field_title']; ?>">
                <!-- oninput="show_to_results()"> -->
                <!-- onblur="hide_to_results()"  -->  
            </div>
            <div id="release-container">
                <input class="search-input" id="release-input" type="text" placeholder="<?php echo $lang['search_field_release']; ?>">
                <!-- oninput="show_to_results()"> -->
                <!-- onblur="hide_to_results()"  -->  
            </div>
            <div id="genre-container">
                <input class="search-input" id="genre-input" type="text" placeholder="<?php echo $lang['search_field_genre']; ?>">
                <!-- oninput="show_to_results()"> -->
                <!-- onblur="hide_to_results()"  -->  
            </div>
            <div class="result">

            </div>
            <!-- <div>
                <button id="input-btn">Search albums</button>
            </div> -->
            <div>
            <button class="btn btn-dark btn-block" id="input-btn">
                <i class="fa fa-search"></i> <?php echo $lang['btn_album_search']; ?>
            </button>
        </div>
        </form>
    </div>


    <?php foreach($data['albums'] as $album) : ?>

       
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
<?php require APPROOT . '/views/inc/footer.php'; ?>
