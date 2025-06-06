<?php
// Function to generate a gallery of images from a specified folder
function make_gallery($folder_name) {
    // Set the directory path for the images
    $dirname = "images/$folder_name/";
    // Get all .jpg images in the specified directory
    $images = glob($dirname . "*.jpg");

    // Loop through each image file found
    foreach ($images as $image) {

        // Set default title in case EXIF data is missing
        $title = "No Title"; // default title if no EXIF data is found
        // Read EXIF data from the image
        $exif = exif_read_data($image, 0, true);

        // Loop through EXIF data to find the image title
        foreach($exif as $key => $section) {
            foreach ($section as $name => $val){
                // Check if the title exists in the IFD0 section
                if ($key == 'IFD0' and $name == "Title"){
                    // Remove special characters from the title
                    $val = preg_replace('/[^A-Za-z-0-9\- ()]/', '', $val);
                    $title = $val;
                }
            }
        }
        ?>
            <!-- Generate and Output HTML for each image in the gallery -->
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