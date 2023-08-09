<?php

namespace App\Controllers;

use App\Models\GalleryModel;
class Home extends BaseController
{
    public $galleryModel;
    public function __construct()
    {
        try {
            $this->galleryModel = new GalleryModel();
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
        }
    }
    public function index()
    {
        return view('welcome_message');
    }
    
    public function listGallery()
    {
        try {
            $data = $this->galleryModel->getGallery();
            return view('list_gallery', $data);
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
        }
    }

    public function addGallery()
    {
        try {
            return view('add_gallery');
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
        }
    }

    public function multipleUpload() 
    {
        $filesUploaded = 0;
        $data = [];
        $isValidImage = '';
        if($this->request->getFileMultiple('fileuploads'))
        {
            $lastRow = $this->galleryModel->get()->getLastRow();
            $nrow = 1;
            if(isset($lastRow->id)){
                $nrow = $lastRow->id+1;
            }

            $files = $this->request->getFileMultiple('fileuploads');

            foreach ($files as $file) {
                if($file->getClientExtension() == "jpg" || $file->getClientExtension() == "png"){
                    $isValidImage = 1;
                }else{
                    if ($file->isValid() && ! $file->hasMoved())
                    {
                        $newName = $file->getRandomName();
                        $file->move(ROOTPATH.'public/images', $newName);
                        $data[] = [
                            'status' => 1,
                            'image_name' => $newName,
                            'display_order' => $nrow
                        ];
                        $filesUploaded++;
                        $nrow++;
                    }
                }       
            }

            // save file
            if(count($data) > 0){
                $isValidImage = 0;
                $this->galleryModel->insertBatch($data);
            }

        }

        if($isValidImage){
            return redirect()->back()->with('error', "Only jpeg or png file allowed to upload."); 
        }else{
            if($filesUploaded <= 0) {
                return redirect()->back()->with('error', 'Choose files to upload.');
            }
        }

        return redirect()->back()->with('success', $filesUploaded . ' File/s uploaded successfully.');

    }

    public function updateGallery()
    {
        try {
            if(isset($_GET["order"])) {
                $order  = explode(",",$_GET["order"]);
                $obj = [];
                for($i=0; $i < count($order);$i++) {
                    $this->galleryModel->updateGallery($i,$order[$i]);
                }
            }
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
