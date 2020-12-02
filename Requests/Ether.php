<?php

class Ether {

	public $Request = null;
	//--------------------------------------------------------------------------------------------------------------------
	public function __construct($Request) {
        $this->$Request = $Request;
		// $this->loadFunctionMap();
	}

	//----------------------------------------------------------------------------------------------------
	public function getBalance($address = null) {
        $this->$Request = $this->Array;
        $this->$Request['fields']['address'] = $address;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'getbalance/ether';
        return Requests::Execute($this->$Request);
	}

    public function getTxnByHash($hash = null) {
        $this->$Request = $this->Array;
        $this->$Request['fields']['hash'] = $hash;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'gettxnbyhash/ether';
        return Requests::Execute($this->$Request);
    }

    public function createWallet() {
        $this->$Request = $this->Array;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'createwallet/ether';
        return Requests::Execute($this->$Request);
    }

    public function GetTxnByAddress($wallet_address) {
        $this->$Request = $this->Array;
        $this->$Request['fields']['wallet_address'] = $wallet_address;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'gettxnbyaddress/ether';
        return Requests::Execute($this->$Request);
    }

    public function SendTxn($from_address, $to_address, $amount ,$from_private_key = '') {
        $this->$Request = $this->Array;
        $this->$Request['fields']['from_address'] = $from_address;
        $this->$Request['fields']['to_address'] = $to_address;
        $this->$Request['fields']['amount'] = $amount;
        $this->$Request['fields']['from_private_key'] = $from_private_key;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'sendtxn/ether';
        return Requests::Execute($this->$Request);
    }
    
    
} // end of class
