<?php

class Welcome{
   const Message="Welcome to crest infotech";
   public function hey(){
     echo Welcome::class;
    }
}

echo Welcome::Message;
?>