<?php 

namespace Services;

require_once REPOSITORY_PATH .'/MediaRepository.php';

use Repositories\MediaRepository;

class FileUploadService
{
    private $mediaRepository;
    
    public function __construct()
    {
        $this->mediaRepository = new MediaRepository();
    }

    public function execute($file) : int
    {
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $ext = strtolower($ext);
        $original_name = str_replace('.' . $ext, '', $file['name']);
        $name = sprintf('%s-%s', md5($original_name), md5(date('Y-m-d H:i:s')));

        $this->upload($name, $ext, $file['tmp_name']);

        $create = [
            'name' => $name,
            'original_name' => $original_name,
            'extension' => $ext,
            'size' => $file['size'],
            'created_at' => date('Y-m-d H:i:s'),
        ];

        return $this->store($create);
    }

    protected function upload($name, $ext, $tmp_name)
    {
        $path = sprintf('%s/%s.%s', UPLOAD_DIR, $name, $ext);
        move_uploaded_file($tmp_name, $path);
    }

    protected function store($data) : int
    {
        return $this->mediaRepository->create($data);
    }

    protected function delete($id)
    {
        $media = $this->mediaRepository->getById($id);
        $path = sprintf('%s/%s.%s', UPLOAD_DIR, $media['name'], $media['extension']);
        unlink($path);
        $this->mediaRepository->delete($id);
    }

    protected function update($id, $data)
    {
        $this->mediaRepository->update($id, $data);
    }

    
}