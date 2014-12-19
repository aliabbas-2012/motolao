<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItstUploadFile
 *
 * @author Brain
 */
class DTUploadedFile extends CUploadedFile {
    //put your code here

    /**
     *  to create recursive folder
     *  here images will be uploaded
     */
    public static function creeatRecurSiveDirectories($array = array()) {
        $basePath = Yii::app()->basePath;

        if (strstr($basePath, "protected")) {
            $basePath = realPath($basePath . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR);
        }
        if (is_array($array)) {
            $newPath = $basePath;
            $array = array_merge(array("uploads"), $array);

            foreach ($array as $folder) {
                $newPath.=DIRECTORY_SEPARATOR . $folder;
                if (!is_dir($newPath)) {
                    mkdir($newPath, 0755);
                }
            }
        } else {
            return "error";
        }
        return $newPath . DIRECTORY_SEPARATOR;
    }

    /**
     *  to create recursive folder
     *  here images will be uploaded
     */
    public static function getRecurSiveDirectories($array = array()) {
        $basePath = Yii::app()->basePath;

        if (strstr($basePath, "protected")) {
            $basePath = realPath($basePath . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR);
        }
        if (is_array($array)) {
            $newPath = $basePath;
            $array = array_merge(array("uploads"), $array);

            foreach ($array as $folder) {
                $newPath.=DIRECTORY_SEPARATOR . $folder;
                if (!is_dir($newPath)) {
                    
                }
            }
        } else {
            return "error";
        }
        return $newPath . DIRECTORY_SEPARATOR;
    }

    public static function copyr($source, $dest) {
        // Simple copy for a file
        if (is_file($source)) {
            return copy($source, $dest);
        }

        // Make destination directory
        if (!is_dir($dest)) {
            mkdir($dest);
        }

        // Loop through the folder
        $dir = dir($source);
        while (false !== $entry = $dir->read()) {
            // Skip pointers
            if ($entry == '.' || $entry == '..') {
                continue;
            }

            // Deep copy directories
            if ($dest !== "$source/$entry") {
                self::copyr("$source/$entry", "$dest/$entry");
            }
        }

        // Clean up
        $dir->close();
        return true;
    }

    /**
     * to delete to folder recursivly data
     * @param type $folder 
     *   folder path 
     * @param type $is_actual_path 
     *       means folder full path is set to false
     *       folder is fullpath
     *       other wise on temp folder
     */
    public static function deleteRecursively($folder, $is_actual_path = false) {
        $basePath = Yii::app()->basePath;

        if (strstr($basePath, "protected")) {
            $basePath = realPath($basePath . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR);
        }
        $deleted_dir = $basePath . DIRECTORY_SEPARATOR . "temp" . DIRECTORY_SEPARATOR . $folder;

        $deleted_dir = ($is_actual_path == true) ? $folder : $deleted_dir;

        if (is_dir($deleted_dir) && $handle = opendir($deleted_dir)) {


            /* This is the correct way to loop over the directory. */
            while (($file = readdir($handle)) !== false) {

                if ($file != "." || $file != "..") {

                    /**
                     * In case of direcotries 
                     * These line will done
                     * 
                     */
                    if (filetype($deleted_dir . DIRECTORY_SEPARATOR . $file) == "dir") {
                        $dirData = scandir($deleted_dir . DIRECTORY_SEPARATOR . $file);

                        if (!empty($dirData)) {

                            self::deleteRecursively($folder . DIRECTORY_SEPARATOR . $file);
                            if (count($dirData) == 2 && in_array(".", $dirData) && in_array("..", $dirData)) {
                                rmdir($deleted_dir . DIRECTORY_SEPARATOR . $file);
                                self::deleteRecursively($deleted_dir . DIRECTORY_SEPARATOR . $file);
                            }
                        }
                    } else {
                        unlink($deleted_dir . DIRECTORY_SEPARATOR . $file);
                    }
                }
            }


            closedir($handle);
        }
    }

    /**
     * 
     * @param type $file 
     * to detled file on particulr locaton
     */
    public static function deleteExistingFile($file) {
        if (is_file($file)) {

            unlink($file);
            return true;
        } else {
            return false;
        }
    }

    /**
     * 
     * @param type $pathToImages
     * @param type $pathToThumbs
     * @param type $thumbWidth
     */
    public static function createThumbs($pathToImage, $pathToThumbs, $thumbWidth, $name) {
        // open the directory
        // parse path for the extension
        $info = pathinfo($pathToImage);

        $maxSize = $thumbWidth;
        $size = getimagesize($pathToImage);

        $type = isset($size['type']) ? $size['type'] : $size[2];

        // Check support of file type
        if (!(imagetypes() & $type)) {
            // Server does not support file type
            return false;
        }

        $width = isset($size['width']) ? $size['width'] : $size[0];
        $height = isset($size['height']) ? $size['height'] : $size[1];

        // Calculate aspect ratio
        $wRatio = $maxSize / $width;
        $hRatio = $maxSize / $height;

        // Using imagecreatefromstring will automatically detect the file type
        $sourceImage = imagecreatefromstring(file_get_contents($pathToImage));

        // Calculate a proportional width and height no larger than the max size.
        if (($width <= $maxSize) && ($height <= $maxSize)) {
            // Input is smaller than thumbnail, do nothing
            return $sourceImage;
        } elseif (($wRatio * $height) < $maxSize) {
            // Image is horizontal
            $tHeight = ceil($wRatio * $height);
            $tWidth = $maxSize;
        } else {
            // Image is vertical
            $tWidth = ceil($hRatio * $width);
            $tHeight = $maxSize;
        }

        $thumb = imagecreatetruecolor($tWidth, $tHeight);

        if ($sourceImage === false) {
            // Could not load image
            return false;
        }

        // Copy resampled makes a smooth thumbnail
        imagecopyresampled($thumb, $sourceImage, 0, 0, 0, 0, $tWidth, $tHeight, $width, $height);
        if (!isset($info['extension'])) {
            $info['extension'] = "jpg";
        }
        self::createImage($thumb, $pathToThumbs, $name, trim($info['extension']));
        imagedestroy($sourceImage);

        return $pathToThumbs . DIRECTORY_SEPARATOR . $name;



        /*

          // continue only if this is a JPEG image
          //echo "Creating thumbnail for {$pathToImage} <br />";
          // load image and get image size


          $img = self::imageCreateFrom("$pathToImage", $info['extension']);
          $width = imagesx($img);
          $height = imagesy($img);
          // calculate thumbnail size
          $new_width = $thumbWidth;
          $new_height = floor($height * ( $thumbWidth / $width ));
          // create a new temporary image
          $tmp_img = imagecreatetruecolor($new_width, $new_height);
          // copy and resize old image into new image
          imagecopyresized($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
          // save thumbnail into a file
          self::createImage($tmp_img, $pathToThumbs, $name, trim($info['extension']));
         * */
    }
    /**
     *  Form motloa only
     * @param type $src
     * @param type $dest
     * @param type $thumbs_size
     */
    public static function make_thumb($src, $dest, $thumbs_size = 300) {
        /* read the source image */
        $source_image = imagecreatefromstring($src);
        $orig_w = imagesx($source_image);
        $orig_h = imagesy($source_image);
        $new_w = $thumbs_size;
        $new_h = $thumbs_size;
        $w_ratio = ($new_w / $orig_w);
        $h_ratio = ($new_h / $orig_h);
        if ($orig_w > $orig_h) {//landscape
            $crop_w = round($orig_w * $h_ratio);
            $crop_h = $new_h;
            $src_x = ceil(( $orig_w - $orig_h ) / 2);
            $src_y = 0;
        } elseif ($orig_w < $orig_h) {//portrait
            $crop_h = round($orig_h * $w_ratio);
            $crop_w = $new_w;
            $src_x = 0;
            $src_y = ceil(( $orig_h - $orig_w ) / 2);
        } else {//square
            $crop_w = $new_w;
            $crop_h = $new_h;
            $src_x = 0;
            $src_y = 0;
        }
        $dest_img = imagecreatetruecolor($new_w, $new_h);
        imagecopyresampled($dest_img, $source_image, 0, 0, $src_x, $src_y, $crop_w, $crop_h, $orig_w, $orig_h);
        /* create the physical thumbnail image into its destination */
        imagejpeg($dest_img, $dest);
    }

    /**
     * on the bases of value extension
     */
    public static function imageCreateFrom($pathToImage, $ext) {

        switch ($ext) {
            case 'png':
                return imagecreatefrompng($pathToImage);
                break;
            case 'jpeg':
                return imagecreatefromjpeg($pathToImage);
                break;
            case 'jpg':
                return imagecreatefromjpeg($pathToImage);
                break;
            case 'JPG':
                return imagecreatefromjpeg($pathToImage);
                break;
            case 'gif':
                return imagecreatefromgif($pathToImage);
                break;
            case 'wbmp':
                return imagecreatefromwbmp($pathToImage);
                break;

            default :
                return FALSE;
        }
    }

    /**
     * acutal the bases of value extension
     */
    public static function createImage($tmp_img, $pathToThumbs, $name, $ext) {

        switch ($ext) {
            case 'png':
                imagegif($tmp_img, "$pathToThumbs" . DIRECTORY_SEPARATOR . $name);
                break;
            case 'jpeg':
                imagejpeg($tmp_img, "$pathToThumbs" . DIRECTORY_SEPARATOR . $name);
                break;
            case 'jpg':
                imagejpeg($tmp_img, "$pathToThumbs" . DIRECTORY_SEPARATOR . $name);
                break;
            case 'gif':
                imagegif($tmp_img, "$pathToThumbs" . DIRECTORY_SEPARATOR . $name);
                break;
            case 'wbmp':
                imagewbmp($tmp_img, "$pathToThumbs" . DIRECTORY_SEPARATOR . $name);
                break;

            default :
                return FALSE;
        }
    }

}

?>
