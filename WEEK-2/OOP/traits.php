<?php

    trait hello{
        public function sayhello(){
            echo "Hello Gays" . "<br>";
        }
    }

    trait bye{
        public function saybye(){
            echo "Bye Gays". "<br>";
        }
    }

    trait hi{
        private function sayhi(){
            echo "Hi gays 🙋‍♂️";
        }
    }


    class Welcome{
        use hello;
    }

    class see_you{
        use bye;
    }

    class hii{
        use hi{
            hi::sayhi as public you;
        }
    }


    $obj=new welcome;
    $obj->sayhello();

    $obj=new see_you;
    $obj->saybye();

    $obj=new hii;
    $obj->you();
?>
