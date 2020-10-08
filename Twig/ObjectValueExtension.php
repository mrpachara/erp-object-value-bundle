<?php
namespace Erp\Bundle\ObjectValueBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigTest;

use Erp\Bundle\ObjectValueBundle\Entity\Corporate;
use Erp\Bundle\ObjectValueBundle\Entity\Citizen;

class ObjectValueExtension extends AbstractExtension
{

    function getTests()
    {
        return [
            new TwigTest('corporate', function($val) {
                if($val instanceof Corporate) return true;
                
                return false;
            }),
            new TwigTest('citizen', function($val) {
                if($val instanceof Citizen) return true;
                
                return false;
            }),
            ];
    }
}

