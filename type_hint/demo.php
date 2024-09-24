<?php
declare(strict_types=1);

include_once 'A.php';
include_once 'B.php';
include_once 'C.php';
include_once 'I.php';

class Demo{
    /*Example 1. return A*/
    public function returnA_typeA(): A{
        echo '__FUNCTION__'.'<br>';
        return new A();
    }

    /*Example 2. return A*/
    public function returnA_typeB(): B{
        echo '__FUNCTION__'.'<br>';
        return new B();
    }

    /*Example 3. return A*/
    public function returnA_typeC(): C{
        echo '__FUNCTION__'.'<br>';
        return new C();
    }

    /*Example 4. return A*/
    public function returnA_typeI(): ?I{
        echo '__FUNCTION__'.'<br>';
        return new C();
    }

    /*Example 5. return A*/
    public function returnA_typeNull(): null{
        echo '__FUNCTION__'.'<br>';
        return null;
    }

    /*Example 6. return B*/
    public function returnB_typeA(): A{
        echo '__FUNCTION__'.'<br>';
        return new A();
    }

    /*Example 7. return B*/
    public function returnB_typeB(): B{
        echo '__FUNCTION__'.'<br>';
        return new B();
    }

    /*Example 8. return B*/
    public function returnB_typeC(): C{
        echo '__FUNCTION__'.'<br>';
        return new C();
    }

    /*Example 9. return B*/
    public function returnB_typeI(): I{
        echo '__FUNCTION__'.'<br>';
        return new C();
    }

    /*Example 10. return B*/
    public function returnB_typeNull(): ?B{
        echo '__FUNCTION__'.'<br>';
        return null;
    }

    
    /*Example 11. return C*/
    public function returnC_typeA(): A{
        echo '__FUNCTION__'.'<br>';
        return new A();
    }

    /*Example 12. return C*/
    public function returnC_typeB(): B{
        echo '__FUNCTION__'.'<br>';
        return new B();
    }

    /*Example 13. return C*/
    public function returnC_typeC(): C{
        echo '__FUNCTION__'.'<br>';
        return new C();
    }

    /*Example 14. return C*/
    public function returnC_typeI(): ?C{
        echo '__FUNCTION__'.'<br>';
        return new C();
    }

    /*Example 15. return C*/
    public function returnC_typeNull(): null{
        echo '__FUNCTION__'.'<br>';
        return null;
    }

    /*Example 16. return I*/
    public function returnI_typeA(): A{
        echo '__FUNCTION__'.'<br>';
        return new A();
    }

    /*Example 17. return I*/
    public function returnI_typeB(): B{
        echo '__FUNCTION__'.'<br>';
        return new B();
    }

    /*Example 18. return I*/
    public function returnI_typeC(): B{
        echo '__FUNCTION__'.'<br>';
        return new C();
    }

    /*Example 19. return I*/
    public function returnI_typeI(): I{
        echo '__FUNCTION__'.'<br>';
        return new C();
    }

    /*Example 20. return I*/
    public function returnI_typeNull(): ?B{
        echo '__FUNCTION__'.'<br>';
        return new B();
    }

    /*Example 21. return null*/
    public function returnNull_typeA(): A{
        echo '__FUNCTION__'.'<br>';
        return new A();
    }

    /*Example 22. return null*/
    public function returnNull_typeB(): B{
        echo '__FUNCTION__'.'<br>';
        return new B();
    }

    /*Example 23. return null*/
    public function returnNull_typeC(): C{
        echo '__FUNCTION__'.'<br>';
        return new C();
    }

    /*Example 24. return null*/
    public function returnNull_typeI(): ?I{
        echo '__FUNCTION__'.'<br>';
        return new C();
    }

    /*Example 25. return null*/
    public function returnNull_typeNull(): ?I{
        echo '__FUNCTION__'.'<br>';
        return null;
    }

}

$demo = new Demo();
$obj1 = $demo->returnA_typeA();  //TRUE
$obj2 = $demo->returnA_typeB();  //FALSE
$obj3 = $demo->returnA_typeC();  //FALSE
$obj4 = $demo->returnA_typeI();  //FALSE
$obj5 = $demo->returnA_typeNull();  //null

$obj6 = $demo->returnB_typeA();  //FALSE
$obj7 = $demo->returnB_typeB();  //TRUE
$obj8 = $demo->returnB_typeC();  //FALSE
$obj9 = $demo->returnB_typeI();  //FALSE
$obj10 = $demo->returnB_typeNull();  //null

$obj11 = $demo->returnC_typeA();  //FALSE
$obj12 = $demo->returnC_typeB();  //FALSE
$obj13 = $demo->returnC_typeC();  //TRUE
$obj14 = $demo->returnC_typeI();  //FALSE
$obj15 = $demo->returnC_typeNull();  //null

$obj16 = $demo->returnI_typeA();  //FALSE
$obj17 = $demo->returnI_typeB();  //FALSE
$obj18 = $demo->returnI_typeC();  //TRUE
$obj19 = $demo->returnI_typeI();  //TRUE
$obj20 = $demo->returnI_typeNull();  //null

$obj21 = $demo->returnNull_typeA();  //FALSE
$obj22 = $demo->returnNull_typeB();  //FALSE
$obj23 = $demo->returnNull_typeC();  //FALSE
$obj24 = $demo->returnNull_typeI();  //FALSE
$obj25 = $demo->returnNull_typeNull();  //null

