<?php
namespace Skaleet\Interview\TransactionProcessing\Domain\Model;

class Amount
{
	public function __construct(
		public int $value, 
		public string $currency) 
	{
		if ($value <= 0) {
			throw new \Exception("Amount value must be positive.");
		}
		$this->value = $value;
		$this->currency = $currency;
	}
	
    public function getValue(): int {
        return $this->value;
    }

    public function getCurrency(): string {
        return $this->currency;
    }
}