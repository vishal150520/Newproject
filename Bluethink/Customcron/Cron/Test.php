<?php
 
namespace Bluethink\Customcron\Cron;
  
use  Psr\Log\LoggerInterface;
  
class Test
 {
     private $logger;
  
     public function __construct(
         LoggerInterface $logger
     ) {
         $this->logger = $logger;
     }
  
     public function execute()
     {
         $this->logger->info('The Cron is Working');
     }
 }