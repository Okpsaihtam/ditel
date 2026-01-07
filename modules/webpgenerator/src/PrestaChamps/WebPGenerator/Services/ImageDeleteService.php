<?php
/**
 * PrestaChamps
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Commercial License
 * you can't distribute, modify or sell this code
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file
 * If you need help please contact leo@prestachamps.com
 *
 * @author    PrestaChamps <leo@prestachamps.com>
 * @copyright PrestaChamps
 * @license   commercial
 */

namespace PrestaChamps\WebPGenerator\Services;

use PrestaChamps\WebPGenerator\Exceptions\FileErrorException;
use PrestaChamps\WebPGenerator\Exceptions\UnknownImageType;

/**
 * Class ImageDeleteService
 *
 * @package PrestaChamps\WebPGenerator\Services
 */
abstract class ImageDeleteService
{
    /**
     * @param       $image
     * @param       $type
     * @param array $types
     *
     * @param bool  $skipWebP
     *
     * @return bool
     * @throws UnknownImageType
     */
    public static function deleteOtherImage($image, $type, $types, $skipWebP = true)
    {
        $process = array(
            'category' => _PS_CAT_IMG_DIR_,
            'manufacturer' => _PS_MANU_IMG_DIR_,
            'supplier' => _PS_SUPP_IMG_DIR_,
            'product' => _PS_PROD_IMG_DIR_,
            'store' => _PS_STORE_IMG_DIR_,
        );
        $dir = $process[$type];
        $result = false;
        if (preg_match('/^\d*\.jpg$/', $image)) {
            $success = true;
            foreach ($types as $imageType) {
                // Customizable writing dir
                $newDir = $dir;
                if ($imageType['name'] === 'thumb_scene') {
                    $newDir .= 'thumbs/';
                }

                $result = static::clearUnwantedImages($newDir, $skipWebP);
                $success = $success && $result;
            }
        } else {
            throw new UnknownImageType('Unknown image type');
        }

        return $result;
    }

    /**
     * @param       $imageId
     *
     * @return bool
     * @throws \PrestaChamps\WebPGenerator\Exceptions\FileErrorException
     */
    public static function deleteProductImage($imageId)
    {
        $imageObj = new \Image($imageId);
        $existing_img = _PS_PROD_IMG_DIR_ . $imageObj->getExistingImgPath() . '.jpg';
        if (file_exists($existing_img) && filesize($existing_img)) {
            return static::clearUnwantedImages(_PS_PROD_IMG_DIR_ . $imageObj->getImgFolder());
        }
        throw new FileErrorException("Source file doesn't exists: $existing_img");
    }

    public static function clearUnwantedImages($path, $skipWebP = true)
    {
        $dir = new \DirectoryIterator($path);
        $success = true;
        foreach ($dir as $file) {
            $success = true;
            if (!$file->isDot() && !$file->isDir() && !is_numeric($file->getBasename('.' . $file->getExtension()))) {
                if ($skipWebP === true && $file->getExtension() === 'webp') {
                    continue;
                }
                $result = unlink($file->getRealPath());
                $success = $success && $result;
            }
        }

        return $success;
    }
}
