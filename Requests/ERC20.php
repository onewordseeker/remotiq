<?php

class ERC20 {

	public $Request = null;
	//--------------------------------------------------------------------------------------------------------------------
	public function __construct($Request) {
        $this->$Request = $Request;
		// $this->loadFunctionMap();
	}

	//----------------------------------------------------------------------------------------------------
	public function getBalance($wallet_address = null, $contract_address = null) {
        $this->$Request = $this->Array;
        $this->$Request['fields']['wallet_address'] = $wallet_address;
        $this->$Request['fields']['contract_address'] = $contract_address;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'getbalance/erc20';
        return Requests::Execute($this->$Request);
	}

    public function getTxnByHash($hash = null) {
        $this->$Request = $this->Array;
        $this->$Request['fields']['hash'] = $hash;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'gettxnbyhash/erc20';
        return Requests::Execute($this->$Request);
    }

    public function getTokenInfo($contract_address = null) {
        $this->$Request = $this->Array;
        $this->$Request['fields']['contract_address'] = $contract_address;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'gettokeninfo';
        return Requests::Execute($this->$Request);
    }

    public function trackByAddress($wallet_address = null, $contract_address = null) {
        $this->$Request = $this->Array;
        $this->$Request['fields']['wallet_address'] = $wallet_address;
        $this->$Request['fields']['contract_address'] = $contract_address;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'trackbyaddress';
        return Requests::Execute($this->$Request);
    }
    public function SendTxn($from_address, $to_address, $contract_address, $amount,$from_private_key = '') {
        $this->$Request = $this->Array;
        $this->$Request['fields']['from_address'] = $from_address;
        $this->$Request['fields']['to_address'] = $to_address;
        $this->$Request['fields']['amount'] = $amount;
        $this->$Request['fields']['from_private_key'] = $from_private_key;
        $this->$Request['fields']['contract_address'] = $contract_address;
        $this->$Request['method'] = 'post';
        $this->$Request['query'] = 'sendtxn/erc20';
        return Requests::Execute($this->$Request);
    }
    
} // end of class