<?php 

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class BlogController extends AbstractController{
    
  /**
   * @return render
   */
  public function index(){
       return $this->render('main.twig');
    }


    /**
     * Route\Post(name=upload, /upload)
     * @param Request
     * @return JsonResponse
     */
    public function Upload(Request $request){
      $photo= $request->files->get('upload');
      if ($photo instanceof UploadedFile) {

        $file_name = base64_encode(random_bytes(12)). '.'.$photo->guessExtension();
        $photo->move($this->getParameter('dir_file'),$file_name);
        return new JsonResponse([
                'uploaded'=> true,
                'url' => '/uploads/'. $file_name
        ]);
      }
      return new JsonResponse([
          'uploaded'=> false,
          'error' => [
                    'message' => 'Image was not uploaded',
]
      ]);

}

}