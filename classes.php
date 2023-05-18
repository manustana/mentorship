<?php
interface CarParts{
    public function tires();
    public function headlights();
}

abstract  class Car{
    abstract function type():string;

    protected function numberOfSeats(): int
    {
        return 5;
    }
}
class BuildCar extends Car implements CarParts{
    public const SPEED_LIMIT = 150;
    public string $culoare;
    public int $usi;
    protected float $greutate;
    private string $caroserie;

    public function __construct($culoare,$usi,$greutate,$caroserie) {
        $this->culoare = $culoare;
        $this->usi = $usi;
        $this->greutate = $greutate;
        $this->caroserie = $caroserie;
    }
    public function customize(): void
    {
        echo 'Culoare: '.$this->culoare.' ; Usi: '.$this->usi. ' ; Greuatate: '.$this->greutate.' Caroserie: '.$this->caroserie."<br>";
    }
    private function priv():void {
        echo 'not supposed to be here';
    }
    protected function prot():void{
        echo 'supposed to be here';
    }

    public function getCuloare(): string
    {
        return $this->culoare;
    }
    public function setCuloare($culoare):void{
        $this->culoare = $culoare;
    }
    public function getUsi(): int
    {
        return $this->usi;
    }
    public function setUsi($usi):void{
        $this->usi = $usi;
    }
    public function getGreutate(): float
    {
        return $this->greutate;
    }
    public function setGreutate($greutate):void{
        $this->greutate = $greutate;
    }
    public function getCaroserie(): string
    {
        return $this->culoare;
    }
    public function setCaroserie($caroserie):void{
        $this->caroserie = $caroserie;
    }

    public function whatIsThis(){
        return var_dump($this);
    }
    public function tires():string
    {
        return "ceva model";
    }
    public function headlights():string
    {
        return "ceva faruri";
    }
    public function type():string
    {

        return "ceva";
    }
    public function details():string{
        return 'Culoare: '.$this->culoare.' ; Usi: '.$this->usi. ' ; Greuatate: '.$this->greutate.' ; Caroserie: '.$this->caroserie.' ; Tip: '.$this->type(). ' ; Cauciucuri: '
        .$this->tires().' ; Faruri: '.$this->headlights()."<br>";
    }
}
class TuningCar extends Car implements CarParts{
    public const SPEED_LIMIT = 150;
    public string $culoare;
    public int $usi;
    protected float $greutate;
    private string $caroserie;
    public function getCuloare(): string
    {
        return $this->culoare;
    }
    public function setCuloare($culoare):void{
        $this->culoare = $culoare;
    }
    public function getUsi(): int
    {
        return $this->usi;
    }
    public function setUsi($usi):void{
        $this->usi = $usi;
    }
    public function getGreutate(): float
    {
        return $this->greutate;
    }
    public function setGreutate($greutate):void{
        $this->greutate = $greutate;
    }
    public function getCaroserie(): string
    {
        return $this->culoare;
    }
    public function setCaroserie($caroserie):void{
        $this->caroserie = $caroserie;
    }

    public function whatIsThis(){
        return var_dump($this);
    }
    public function tires():string
    {
        return "ceva model";
    }
    public function headlights():string
    {
        return "ceva faruri";
    }
    public function type():string
    {

        return "ceva";
    }
    protected function numberOfSeats(): int
    {
        return 2;
    }

}
enum Cases{
    case UPPER;
    case LOWER;
}
class Util{
    public static function switchCaseOfWords(string $text, Cases $case):string {
        switch ($case){
            case Cases::UPPER:
                return strtoupper($text);
                break;
            case Cases::LOWER:
                return strtolower($text);
                break;
            default:
                echo "wrong case";
        }
        return "";
    }
}
    include "logincode.php";
    include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
    <?php
        $a = new BuildCar("rosu", 4, 1250, "aliaj"); $a->customize();
        $b = new BuildCar("negru", 2, 960, "plastic"); $b->customize();
        $b->setCuloare("alb");
        echo Util::switchCaseOfWords($b->details(), Cases::LOWER);
    ?>
</html>
