<?php

class CreditCard {
    private string $id;
	private string $cardNumber;
	private int $expiryYear;
	private int $expiryMonth;

    public function __construct(string $cardNumber, int $expiryYear, int $expiryMonth)
        {
            $this->cardNumber = $cardNumber;
            $this->expiryYear = $expiryYear;
            $this->expiryMonth = $expiryMonth;
        }
        public function isExpired(): bool {
            if ((int) date('y') < $this->expiryYear) {
                return false;
            } else if ((int) date('y') == $this->expiryYear && (int) date('n') < $this->expiryMonth) {
                return false;
            }
            return true;
        }
        public function pay(float $amount): bool {
            if ($this->isExpired()) {
                return false;
            } else {
                return true;
            }
        }
        
}