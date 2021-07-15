<?php
  function writeInfo($name, $email, $hobby, $funFact)
  {
    $arrangeInArray = array($name, $email, $hobby, $funFact);
    print_r($arrangeInArray);
  }

  writeInfo('jumoke', 'olajumokegoodluck@gmail.com', 'singing', 'lastborn')
?>