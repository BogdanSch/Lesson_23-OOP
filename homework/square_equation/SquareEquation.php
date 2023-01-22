<?php
class SquareEquation {
	private  $a, $b, $c, $x1, $x2;
	public function __construct($a, $b, $c)
	{
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}
	public function get_a() {
		return $this->a;
	}
	public function set_a($a) {
		$this->a = $a;
	}
	public function get_b() {
		return $this->b;
	}
	public function set_b($b) {
		$this->b = $b;
	}
	public function get_c() {
		return $this->c;
	}
	public function set_c($c): self {
		$this->c = $c;
		return $this;
	}
	public function get_d(){
		return $this->b ** 2 - (4 * $this->a * $this->c);
	}
	public function solve() {
		$d = $this->get_d();
		if($d < 0){
			return "D < 0, there're no solutions";
		}
		if($d == 0){
			return "D = 0, x = ".-$this->b / (2 * $this->a);
		}else{
			$this->x1 = (-$this->b + sqrt($d)) / (2 * $this->a);
			$this->x2 = (-$this->b - sqrt($d)) / (2 * $this->a);
			return "D > 0, x1 = " . $this->x1 . ", x2 = " . $this->x2;
		}
	}
}

$equation = new SquareEquation(1, -2, -15);
echo $equation->solve();