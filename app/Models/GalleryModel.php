<?php
namespace App\Models;
use \CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table = 'gallery';
    protected $allowedFields = ["id","image_name","display_order","created","modified","status"];
    public $db;
    public function __construct()
	{
        $this->db = \Config\Database::connect();
	}

    public function getGallery()
    {
        $query = $this->db->table("gallery");
        $result = $query->orderBy("display_order")->get();
        if(count($result->getResultArray())>0)
        {
            $data['galleries'] = $result->getResult();
        }
        else
        {
            $data['galleries'] = [];
        }
        return $data;
    }

    public function updateGallery($display_order=null,$gallery_id=null)
    {
        $query = $this->db->table("gallery");
        $query->set('display_order', $display_order);
        $query->where('id', $gallery_id);
        $query->update();
    }
}
