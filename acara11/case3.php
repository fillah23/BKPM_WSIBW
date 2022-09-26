<?php 
interface Logger{
    public function log($message);
}

class fileLogger implements Logger{
    private $handle;
    private $logFile;

    public function __construct($filename,$mode = 'a')
    {
        $this->logFile =$filename;
        $this->handle =fopen($filename,$mode)
                        or die('could not open the log file');
    }
    public function log($message){
        $message = date('F j, Y, h:i a'). ': '.$message . "\n";
        fwrite($this->handle,$message);
    }
    public function __destruct()
    {
        if($this->handle){
            fclose($this->handle);
        }
    }
}

class DatabaseLogger implements Logger{
    public function log($message){
        echo sprintf("Log %s to the database\n",$message);
    }
}

$logger = new fileLogger('./.txt','w');
$logger->log('PHP interface is awesome');

$loggers = [
    new fileLogger(('./log.txt')),
    new DatabaseLogger()
];

foreach($loggers as $logger){
    $logger->log('log message');
}
?>