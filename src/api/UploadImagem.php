<?php
class UploadImagem{
	public $width;
	public $height;

	protected function redimensionar($caminho, $nomearquivo){
		$width = $this->width;
		$height = $this->height;

		list($width_orig, $height_orig, $tipo, $atributo) =
		getimagesize($caminho.$nomearquivo);

		if($width_orig > $height_orig){
			$height = ($width/$width_orig)*$height_orig;
		} elseif($width_orig < $height_orig) {
			$width = ($height/$height_orig)*$width_orig;
		}
		$newImage = imagecreatetruecolor($width, $height);
		switch($tipo){
			case 1:
				$origem = imagecreatefromgif($caminho.$nomearquivo);
				imagecopyresampled($newImage, $origem, 0, 0, 0, 0, $width,
				$height, $width_orig, $height_orig);
				imagegif($newImage, $caminho.$nomearquivo);
				break;
			case 2:
				$origem = imagecreatefromjpeg($caminho.$nomearquivo);
				imagecopyresampled($newImage, $origem, 0, 0, 0, 0, $width,
				$height, $width_orig, $height_orig);
				imagejpeg($newImage, $caminho.$nomearquivo);
				break;
			case 3:
				$origem = imagecreatefrompng($caminho.$nomearquivo);
				imagecopyresampled($newImage, $origem, 0, 0, 0, 0, $width,
				$height, $width_orig, $height_orig);
				imagepng($newImage, $caminho.$nomearquivo);
				break;
		}

		imagedestroy($newImage);
		imagedestroy($origem);
	}

	public function salvar($caminho, $file){

		$nameFile = "{$_SESSION['user']->id}.";
        switch ($file['type']){
            case 'image/png':
				$nameFile .= 'png';
				$file['name'] = $nameFile;
                break;
            case 'image/jpeg': 
                $nameFile .= 'jpg';
				$file['name'] = $nameFile;
                break;
            default:
				throw new AppArrayException(['photo' => "Envie apenas imagens no formato jpeg ou
				png"]);
        }

		$uploadfile = $caminho.$file['name'];

		if (!move_uploaded_file($file['tmp_name'], $uploadfile)) {
			switch($file['error']){
				case 1:
					throw new AppArrayException(['photo' => "O tamanho do arquivo é maior que o
					tamanho permitido."]);
				break;
				case 2:
					throw new AppArrayException(['photo' => "O tamanho do arquivo é maior que o
					tamanho permitido."]);
				break;
				case 3:
					throw new AppArrayException(['photo' => "O upload do arquivo foi feito
					parcialmente."]);
				break;
				case 4:
					throw new AppArrayException(['photo' => "Não foi feito o upload de
					arquivo."]);
				break;
			}
		}else{
			list($width_orig, $height_orig) = getimagesize($uploadfile);

			if($width_orig > $this->width || $height_orig > $this->height){
				$this->redimensionar($caminho, $file['name']);
			}

			if($_SESSION['user']->photo !== $file['name']){
				unlink($caminho.$_SESSION['user']->photo);						
			}
		}
		return $file['name'];
	}
}
?>