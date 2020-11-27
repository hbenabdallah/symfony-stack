<?php
declare(strict_types=1);

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HomeController
 *
 * @package App\Controller
 */
class HomeController extends AbstractController
{
    /**
     * @return Response
     */
    public function home(): Response
    {
        $date = new DateTime('now');

        return $this->render('home/home.html.twig', [
            'date' => $date,
        ]);
    }
}
