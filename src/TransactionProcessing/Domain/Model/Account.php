<?php

namespace Skaleet\Interview\TransactionProcessing\Domain\Model;

class Account
{
    public function __construct(public string $number, public Amount $balance) {
        $this->number = $number;
        $this->balance = $balance;
    }

    public function getNumber(): string {
        return $this->number;
    }

    public function getBalance(): int {
        return $this->balance;
    }

    public function debit(int $amount): int {
        if ($amount <= 0) {
            throw new Exception("Amount must be positive.");
        }
        if ($this->balance < $amount) {
            throw new Exception("Insufficient funds.");
        }
        $this->balance -= $amount;
        return $this->balance;
    }

    public function credit(int $amount): int {
        if ($amount <= 0) {
            throw new Exception("Amount must be positive.");
        }
        $this->balance += $amount;
        return $this->balance;
    }
}
