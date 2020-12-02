<?php

class BTC {

	public $Request;
	//--------------------------------------------------------------------------------------------------------------------
	public function __construct($Request) {
        $this->Request = $Request;
		// $this->loadFunctionMap();
	}

	//----------------------------------------------------------------------------------------------------
	public function getBalance($address = null) {
        //$this->Request = $this->Array;
        $this->Request['fields']['address'] = $address;
        $this->Request['method'] = 'post';
        $this->Request['query'] = 'getbalance/btc';
        return Requests::Execute($this->Request);
	}

    public function getTxnByHash($hash = null) {
        $this->$Request = $this->Array;
        $this->$Request['fields']['hash'] = $hash;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'gettxnbyhash/btc';
        return Requests::Execute($this->$Request);
    }

    public function createWallet($name) {
        $this->$Request = $this->Array;
        $this->$Request['fields']['name'] = $name;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'createwallet/btc';
        return Requests::Execute($this->$Request);
    }

    public function GetTxnByAddress($address) {
        $this->$Request = $this->Array;
        $this->$Request['fields']['address'] = $address;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'gettxnbyaddress/btc';
        return Requests::Execute($this->$Request);
    }

    public function GetUTXO($address) {
        $this->$Request = $this->Array;
        $this->$Request['fields']['address'] = $address;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'getutxo';
        return Requests::Execute($this->$Request);
    }
} // end of class
