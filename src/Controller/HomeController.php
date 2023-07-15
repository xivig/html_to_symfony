<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// class HomeController{
class HomeController extends AbstractController{

    #[Route('/', name:'app_homepage')]
    public function homepage(): Response {
        // return new Response('Title: Cool');
        return $this->render('xivig/homepage.html.twig',[
            'title'=>'Xivig website',
        ]);
    }
    #[Route('/front', name:'app_front')]
    public function frontpage(): Response {
        // return new Response('Title: Cool');
        return $this->render('xivig/front.html.twig',[
            'title'=>'Xivig website',
        ]);
    }

   /*  #[Route('/front/{slug}', name:'app_front')]
    public function frontpage(string $slug=null){
        return new Response('Title: '. $slug);
    } */

    #[Route('/register/{slug}', name:'app_register')]
    public function registerpage(string $slug=null){
         return $this->render('xivig/register.html.twig',[
            'title'=>'Xivig Registration',
        ]);
    }

    #[Route('/login/{slug}', name:'app_login')]
    public function loginpage(string $slug=null){
         return $this->render('xivig/login.html.twig',[
            'title'=>'Xivig Login',
        ]);
    }
    #[Route('/about/{slug}', name:'app_about')]
    public function aboutpage(string $slug=null){
         return $this->render('xivig/about.html.twig',[
            'title'=>'Xivig about',
        ]);
    }
    #[Route('/contact/{slug}', name:'app_contact')]
    public function contactpage(string $slug=null){
         return $this->render('xivig/contact.html.twig',[
            'title'=>'Xivig contact',
        ]);
    }
    #[Route('/blog/{slug}', name:'app_blog')]
    public function blogpage(string $slug=null){
         return $this->render('xivig/blog.html.twig',[
            'title'=>'Xivig blog',
        ]);
    }
    #[Route('/shopping/{slug}', name:'app_shopping')]
    public function shoppingpage(string $slug=null){
         return $this->render('xivig/shopping.html.twig',[
            'title'=>'Xivig shopping',
        ]);
    }
    #[Route('/product/{slug}', name:'app_product')]
    public function productpage(string $slug=null){
         return $this->render('xivig/product.html.twig',[
            'title'=>'Xivig product',
        ]);
    }
}