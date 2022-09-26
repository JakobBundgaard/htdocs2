<?php 

class Albums extends Controller {
    public function __construct() {
        if(!isLoggedIn()) {
            redirect('users/login');
        }

        // Loading model
        $this->albumModel = $this->model('Album');
        $this->userModel = $this->model('User');
    }

    public function index() {

        // Get Albums
        $albums = $this->albumModel->getAlbumsByUserId($_SESSION['user_id']);

        $data = [
            'albums' => $albums
        ];

        $this->view('albums/index', $data);
    }

    public function add() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'artist' => trim($_POST['artist']),
                'title' => trim($_POST['title']),
                'released' => trim($_POST['released']),
                'genre' => trim($_POST['genre']),
                'tracks' => trim($_POST['tracks']),
                // 'image' => trim($_POST['image']),
                'user_id' => $_SESSION['user_id'],
                'artist_err' => '',
                'title_err' => '',
                'released_err' => '',
                'genre_err' => '',
                'tracks_err' => '',
            ];

            // Validation
            if(empty($data['artist'])) {
                $data['artist_err'] = 'Please enter artist name';
            }

            if(empty($data['title'])) {
                $data['title_err'] = 'Please enter a title';
            }

            if(empty($data['released'])) {
                $data['released_err'] = 'Please enter a release year';
            }

            if(empty($data['genre'])) {
                $data['genre_err'] = 'Please enter a genre';
            }

            // If no errors
            if(empty($data['artist_err']) && empty($data['title_err']) && empty($data['released_err']) && empty($data['genre_err'])) {
                // if validated
                if($this->albumModel->addAlbum($data)) {
                    flash('album_message', 'Album added');
                    redirect('albums');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('albums/add', $data);
            }


        } else {
            $data = [
                'artist' => '',
                'title' => '',
                'released' => '',
                'genre' => '',
                'tracks' => '',
                'image' => ''
            ];
    
            $this->view('albums/add', $data);
        }
        
    }

    public function edit($id) {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
             if($_FILES['files']['name'] != "") {
                 
                 // File name
                $filename = $_FILES['files']['name'];
        
                // Location
                $target_file = UPLOADPATH . '/public/uploads/'.$filename;
                $newTarget_File =  './public/uploads/'.$filename;
        
                // file extension
                $file_extension = pathinfo(
                $target_file, PATHINFO_EXTENSION);
                
                $file_extension = strtolower($file_extension);
        
                // Valid image extension
                $valid_extension = array("png","jpeg","jpg");
        
                    if(in_array($file_extension, $valid_extension)) {
            
                        // Upload file
                        if(move_uploaded_file(
                            $_FILES['files']['tmp_name'],
                            $target_file)
                        ) {
            
                            // Execute query
                            $sql = "INSERT INTO images (name, image) VALUES(:name, :image)";
                            $data = [
                                "name" => trim($filename),
                                "image" => trim($newTarget_File)
                            ];

                            $newImage_id = $this->albumModel->addImage($data);
                            
                    }
                }
             }
             
            
            // Sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'artist' => trim($_POST['artist']),
                'title' => trim($_POST['title']),
                'released' => trim($_POST['released']),
                'genre' => trim($_POST['genre']),
                'tracks' => trim($_POST['tracks']),
                'image_id' => trim(isset($newImage_id)?$newImage_id:$_POST['image_id']),
                'user_id' => $_SESSION['user_id'],
                'artist_err' => '',
                'title_err' => '',
                'released_err' => '',
                'genre_err' => '',
                'tracks_err' => '',
            ];

            // Validation
            if(empty($data['artist'])) {
                $data['artist_err'] = 'Please enter artist name';
            }

            if(empty($data['title'])) {
                $data['title_err'] = 'Please enter a title';
            }

            if(empty($data['released'])) {
                $data['released_err'] = 'Please enter a release year';
            }

            if(empty($data['genre'])) {
                $data['genre_err'] = 'Please enter a genre';
            }

            // If no errors
            if(empty($data['artist_err']) && empty($data['title_err']) && empty($data['released_err']) && empty($data['genre_err'])) {
                // if validated
                if($this->albumModel->updateAlbum($data)) {
                    flash('album_message', 'Album updated');
                    redirect('albums');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('albums/edit', $data);
            }


        } else {
            // Get existing album from model
            $album = $this->albumModel->getAlbumById($id);

            // Check for owner
            if($album->user_id != $_SESSION['user_id']) {
                redirect('albums');
            }

            $data = [
                'id' => $id,
                'artist' => $album->artist,
                'title' => $album->title,
                'released' => $album->released,
                'genre' => $album->genre,
                'tracks' => $album->tracks,
                'image_id' => $album->image_id
            ];
    
            $this->view('albums/edit', $data);
        }
        
    }

    public function show($id) {
        $album = $this->albumModel->getAlbumById($id);
        $user = $this->userModel->getUserById($album->user_id);

        $data = [
            'album' => $album,
            'user' => $user
        ];

        $this->view('albums/show', $data);
    }

    public function delete($id) {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get existing album from model
            $album = $this->albumModel->getAlbumById($id);

            // Check for owner
            if($album->user_id != $_SESSION['user_id']) {
                redirect('albums');
            }

            if($this->albumModel->deleteAlbum($id)) {
                flash('album_message', 'Album Deleted');
                redirect('albums');
            } else {
                die('Something went wrong');
            }
        }else {
            redirect('albums');
        }
    }
}