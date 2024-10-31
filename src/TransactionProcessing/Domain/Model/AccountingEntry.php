<?php

namespace Skaleet\Interview\TransactionProcessing\Domain\Model;

class AccountingEntry
{
	public function __construct(
		public string $accountNumber, 
		public Amount $amount, 
		public int $newBalance) 
	{
        $this->accountNumber = $accountNumber;
        $this->amount = $amount;
        $this->newBalance = $newBalance;
    }
	
	public function getAccountNumber(): string {
        return $this->accountNumber;
    }

    public function getAmount(): Amount {
        return $this->amount;
    }

    public function getNewBalance(): int {
        return $this->newBalance;
    }
}
