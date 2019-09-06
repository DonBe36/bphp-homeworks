<?php
class JsonFileAccessModel
{
    protected $fileName;
    protected $file;
    public function __construct($name)
    {
        $this->fileName = __DIR__ . '../../2.2.2/files/database/' . $name . '.json';
    }
    private function connect()
    {
        $this->file = fopen($this->fileName, 'w+');
    }
    private function disconnect()
    {
        fclose($this->file);
    }
    public function read()
    {
        $this->connect();
        $contents = fread($this->file, filesize($this->fileName));
        $this->disconnect();
        return $contents;
    }
    public function write($text)
    {
        $this->connect();
        fwrite($this->file, $text);
        $this->disconnect();
    }
    public function readJson()
    {
        $this->connect();
        $contents = fread($this->file, filesize($this->fileName));
        $contents = json_decode($contents);
        $this->disconnect();
        return $contents;
    }
    public function writeJson($jObject)
    {
        $this->connect();
        $record = json_encode($jObject, JSON_PRETTY_PRINT);
        fwrite($this->file, $record);
        $this->disconnect();
    }
}