<?php
function make_gallery($folder_name) {
    $dirname = "images/$folder_name/";
        $images = glob($dirname . "*.jpg");

        foreach ($images as $image) {

            // get image propertys...
            $exif = exif_read_data($image, 0, true);

            foreach($exif as $key => $section) {
                foreach ($section as $name => $val){
                    if ($key == 'IFD0' and $name == "Title"){
                        $val = preg_replace('/[^A-Za-z-0-9\- ()]/', '', $val); // replaces all special characters with nothing

                        $title = $val;
                    }
                }
            }
            ?>
                <div class="responsive-gallery">
                    <div class="gallery">
                        <a href="<?php echo $image; ?>" class="big">
                            <img class="responsive" src="<?php echo $image; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                        </a>
                    </div>
                </div>
            <?php
        }
}
?>