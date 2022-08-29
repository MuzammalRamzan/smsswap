let network;
let contract_address;
let connection;
let mainAccount;
let accounts;
let Accounttype = "0";

let contractAddress = "0x57813417060645Cb454D9b97CffB3c9cAddFCd6B";
let abi = [
  {
    constant: true,
    inputs: [],
    name: "rate",
    outputs: [{ name: "", type: "uint256" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [{ name: "_Rate", type: "uint256" }],
    name: "setRate",
    outputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: false,
    inputs: [{ name: "_busdAmount", type: "uint256" }],
    name: "buyTokens",
    outputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: false,
    inputs: [{ name: "_amount", type: "uint256" }],
    name: "withDrawBUsd",
    outputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: false,
    inputs: [{ name: "_Percentage", type: "uint256" }],
    name: "setPercentage",
    outputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: true,
    inputs: [{ name: "_busdAmount", type: "uint256" }],
    name: "_getTokenAmount",
    outputs: [{ name: "", type: "uint256" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "owner",
    outputs: [{ name: "", type: "address" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [{ name: "_amount", type: "uint256" }],
    name: "withDrawSMS",
    outputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "percentage",
    outputs: [{ name: "", type: "uint256" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    inputs: [
      { name: "_SMS", type: "address" },
      { name: "_busd", type: "address" },
    ],
    payable: false,
    stateMutability: "nonpayable",
    type: "constructor",
  },
  {
    anonymous: false,
    inputs: [
      { indexed: true, name: "from", type: "address" },
      { indexed: true, name: "to", type: "address" },
      { indexed: false, name: "value", type: "uint256" },
      { indexed: false, name: "time", type: "uint256" },
    ],
    name: "TransferBUSD",
    type: "event",
  },
  {
    anonymous: false,
    inputs: [
      { indexed: true, name: "owner", type: "address" },
      { indexed: true, name: "spender", type: "address" },
      { indexed: false, name: "value", type: "uint256" },
      { indexed: false, name: "time", type: "uint256" },
    ],
    name: "TransferSMT",
    type: "event",
  },
];

let busdcontractAddress = "0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56";
let busdabi = [
  {
    inputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "constructor",
  },
  {
    anonymous: false,
    inputs: [
      {
        indexed: true,
        internalType: "address",
        name: "owner",
        type: "address",
      },
      {
        indexed: true,
        internalType: "address",
        name: "spender",
        type: "address",
      },
      {
        indexed: false,
        internalType: "uint256",
        name: "value",
        type: "uint256",
      },
    ],
    name: "Approval",
    type: "event",
  },
  {
    anonymous: false,
    inputs: [
      {
        indexed: true,
        internalType: "address",
        name: "previousOwner",
        type: "address",
      },
      {
        indexed: true,
        internalType: "address",
        name: "newOwner",
        type: "address",
      },
    ],
    name: "OwnershipTransferred",
    type: "event",
  },
  {
    anonymous: false,
    inputs: [
      { indexed: true, internalType: "address", name: "from", type: "address" },
      { indexed: true, internalType: "address", name: "to", type: "address" },
      {
        indexed: false,
        internalType: "uint256",
        name: "value",
        type: "uint256",
      },
    ],
    name: "Transfer",
    type: "event",
  },
  {
    constant: true,
    inputs: [],
    name: "_decimals",
    outputs: [{ internalType: "uint8", name: "", type: "uint8" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "_name",
    outputs: [{ internalType: "string", name: "", type: "string" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "_symbol",
    outputs: [{ internalType: "string", name: "", type: "string" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: true,
    inputs: [
      { internalType: "address", name: "owner", type: "address" },
      { internalType: "address", name: "spender", type: "address" },
    ],
    name: "allowance",
    outputs: [{ internalType: "uint256", name: "", type: "uint256" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [
      { internalType: "address", name: "spender", type: "address" },
      { internalType: "uint256", name: "amount", type: "uint256" },
    ],
    name: "approve",
    outputs: [{ internalType: "bool", name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: true,
    inputs: [{ internalType: "address", name: "account", type: "address" }],
    name: "balanceOf",
    outputs: [{ internalType: "uint256", name: "", type: "uint256" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [{ internalType: "uint256", name: "amount", type: "uint256" }],
    name: "burn",
    outputs: [{ internalType: "bool", name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "decimals",
    outputs: [{ internalType: "uint8", name: "", type: "uint8" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [
      { internalType: "address", name: "spender", type: "address" },
      { internalType: "uint256", name: "subtractedValue", type: "uint256" },
    ],
    name: "decreaseAllowance",
    outputs: [{ internalType: "bool", name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "getOwner",
    outputs: [{ internalType: "address", name: "", type: "address" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [
      { internalType: "address", name: "spender", type: "address" },
      { internalType: "uint256", name: "addedValue", type: "uint256" },
    ],
    name: "increaseAllowance",
    outputs: [{ internalType: "bool", name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: false,
    inputs: [{ internalType: "uint256", name: "amount", type: "uint256" }],
    name: "mint",
    outputs: [{ internalType: "bool", name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "name",
    outputs: [{ internalType: "string", name: "", type: "string" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "owner",
    outputs: [{ internalType: "address", name: "", type: "address" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [],
    name: "renounceOwnership",
    outputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "symbol",
    outputs: [{ internalType: "string", name: "", type: "string" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "totalSupply",
    outputs: [{ internalType: "uint256", name: "", type: "uint256" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [
      { internalType: "address", name: "recipient", type: "address" },
      { internalType: "uint256", name: "amount", type: "uint256" },
    ],
    name: "transfer",
    outputs: [{ internalType: "bool", name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: false,
    inputs: [
      { internalType: "address", name: "sender", type: "address" },
      { internalType: "address", name: "recipient", type: "address" },
      { internalType: "uint256", name: "amount", type: "uint256" },
    ],
    name: "transferFrom",
    outputs: [{ internalType: "bool", name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: false,
    inputs: [{ internalType: "address", name: "newOwner", type: "address" }],
    name: "transferOwnership",
    outputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
];

let smscontractAddress = "0x0F282e88E8D00dAbC286E4b2DD10A9995bB6B036";
let smsabi = [
  {
    constant: true,
    inputs: [],
    name: "name",
    outputs: [{ name: "", type: "string" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [
      { name: "spender", type: "address" },
      { name: "value", type: "uint256" },
    ],
    name: "approve",
    outputs: [{ name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "totalSupply",
    outputs: [{ name: "", type: "uint256" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [
      { name: "sender", type: "address" },
      { name: "recipient", type: "address" },
      { name: "amount", type: "uint256" },
    ],
    name: "transferFrom",
    outputs: [{ name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "decimals",
    outputs: [{ name: "", type: "uint8" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [
      { name: "spender", type: "address" },
      { name: "addedValue", type: "uint256" },
    ],
    name: "increaseAllowance",
    outputs: [{ name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: true,
    inputs: [{ name: "account", type: "address" }],
    name: "balanceOf",
    outputs: [{ name: "", type: "uint256" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: true,
    inputs: [],
    name: "symbol",
    outputs: [{ name: "", type: "string" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    constant: false,
    inputs: [
      { name: "spender", type: "address" },
      { name: "subtractedValue", type: "uint256" },
    ],
    name: "decreaseAllowance",
    outputs: [{ name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: false,
    inputs: [
      { name: "recipient", type: "address" },
      { name: "amount", type: "uint256" },
    ],
    name: "transfer",
    outputs: [{ name: "", type: "bool" }],
    payable: false,
    stateMutability: "nonpayable",
    type: "function",
  },
  {
    constant: true,
    inputs: [
      { name: "owner", type: "address" },
      { name: "spender", type: "address" },
    ],
    name: "allowance",
    outputs: [{ name: "", type: "uint256" }],
    payable: false,
    stateMutability: "view",
    type: "function",
  },
  {
    inputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "constructor",
  },
  {
    anonymous: false,
    inputs: [
      { indexed: true, name: "from", type: "address" },
      { indexed: true, name: "to", type: "address" },
      { indexed: false, name: "value", type: "uint256" },
    ],
    name: "Transfer",
    type: "event",
  },
  {
    anonymous: false,
    inputs: [
      { indexed: true, name: "owner", type: "address" },
      { indexed: true, name: "spender", type: "address" },
      { indexed: false, name: "value", type: "uint256" },
    ],
    name: "Approval",
    type: "event",
  },
];

window.addEventListener("load", () => {
  interval = setInterval(async function checkConnection() {
    try {
      let isConnected = false;
      if (window.ethereum) {
        window.web3 = new Web3(window.ethereum);
        await window.ethereum.enable();
        isConnected = true;
      } else {
        isConnected = false;
        $(".buy-btn").addClass("hidden");
        $(".connect-btn").removeClass("hidden");
        $(".buy-details-danger .danger-message").text(
          "Please install Dapp Browser first."
        );
        $(".buy-details-danger").removeClass("hidden");
        //   $(".buy-details-danger").fadeTo(2000, 500).slideUp(500, function() {
        //   $(".buy-details-danger").slideUp(500);
        // });
        return false;
        // connection="Plz install metamask!";
        // jQuery("#metamaskConnection").text(connection);
      }
    } catch (error) {}
    try {
      // accounts lenght 0 mean not connected and 1 means connected
      accounts = await getAccounts();
      getBalanceOfAccount();
      console.log("length===>" + accounts.length);
      console.log("length===>" + accounts);
      console.log("length===>" + accounts[0]);
      if (accounts.length > 0) {
        $(".metamask-connected").text(accounts[0].slice(0, 10) + "...");
        $(".metamask-connected").attr("disabled", true);

        allowance();

        window.web3.eth.getChainId((err, netId) => {
          console.log("networkId==>", netId);
          switch (netId?.toString()) {
            case "1":
              console.log("This is mainnet");
              jQuery("#network").text("This is mainnet");
              Accounttype = "1";
              network = "mainnet";
              break;
            case "2":
              console.log("This is the deprecated Morden test network.");
              jQuery("#network").text(
                "This is the deprecated Morden test network."
              );
              break;
            case "3":
              console.log("This is the ropsten test network.");
              jQuery("#network").text("This is the ropsten test network.");
              network = "ropsten";
              break;
            case "4":
              console.log("This is the Rinkeby test network.");
              jQuery("#network").text("This is the Rinkeby test network.");
              network = "Rinkeby";
              break;
            case "42":
              console.log("This is the Kovan test network.");
              jQuery("#network").text("This is the Kovan test network.");
              network = "Kovan";
              break;
            case "97":
              console.log("This is the BNB test network.");
              jQuery("#network").text("This is the BNB test network.");
              network = "BNBTestnet";
              break;
            case "57":
              console.log("This is the BNB main network.");
              jQuery("#network").text("This is the BNB main network.");
              network = "BNBMain";
              break;
            default:
              console.log("This is an unknown network.");
              jQuery("#network").text("This is the unknown test network.");
          }
        });
      } else {
        // connection="Metamask is locked";
        // jQuery("#metamaskConnection").text(connection);
        $(".buy-details-danger .danger-message").text(
          "Please install Metamask first."
        );
        $(".buy-details-danger").removeClass("hidden");
      }
    } catch (error) {
      console.log("Error while checking locked account");
    }
    console.log("web3333===>", await window.web3);
  }, 1000);
});

function isLocked() {
  window.web3.eth.getAccounts(function (err, accounts) {
    if (err != null) {
      console.log(err);
      jQuery("#lock").text(err);
    } else if (accounts.length === 0) {
      console.log("MetaMask is locked");
      jQuery("#lock").text("MetaMask is locked.");
    } else {
      console.log("MetaMask is unlocked");
      jQuery("#lock").text("MetaMask is unlocked.");
    }
  });
}

function getBalanceOfAccount() {
  console.log("length===>" + mainAccount);
  window.web3.eth.getBalance(accounts[0], (err, wei) => {
    myBalance = web3.utils.fromWei(wei, "ether");
    console.log("Balance===>", myBalance);
    $("#getBalance").text("Account Balance:" + myBalance + " " + "BNB");
  });
}

const getAccounts = async () => {
  try {
    const web3 = new Web3(window.ethereum);
    accounts = await web3.eth.getAccounts();
    jQuery("#account").text("Account:" + accounts[0]);
    console.log("accounts", accounts);
    return accounts;
  } catch (error) {
    console.log("Error while fetching acounts: ", error);
    return null;
  }
};

async function setRate() {
  let amount = jQuery("#setRate").val();
  amount = amount * 100000000;

  let contract = new web3.eth.Contract(abi, contractAddress);
  return new Promise(async (resolve, reject) => {
    contract.methods
      .setRate(amount)
      .send({
        from: accounts[0],
      })
      .on("transactionHash", async (hash) => {
        console.log("transactionHash: ", hash);
        jQuery("#setRatehash").text("Hash:" + hash);
      });
  });
}

async function balanceOf() {
  let amount = jQuery("#balanceOfAddress").val();

  let tokencontract = new web3.eth.Contract(busdabi, busdcontractAddress);

  let amounttoken = await tokencontract.methods.balanceOf(amount).call();

  jQuery("#balanceOfhash").text("amounttoken:" + amounttoken / 10 ** 18);
}

async function allowance() {
  let tokencontract = new web3.eth.Contract(busdabi, busdcontractAddress);
  let amounttoken = await tokencontract.methods
    .allowance(accounts[0], contractAddress)
    .call();
  var appr = amounttoken / 10 ** 18;
  if (
    ($("#getTokenAmount").val() != 0 || $("#getTokenAmount").val() != "") &&
    $("#getTokenAmount").val() > appr
  ) {
    // buy now
    $(".buy-details-warning .warning-message").text("Approved Token: " + appr);
    $(".buy-details-warning").removeClass("hidden");
    $(".buy-card-btn").addClass("hidden");
    $(".approve-btn").removeClass("hidden");
  } else {
    // approve first
    $(".buy-card-btn").addClass("hidden");
    $(".buy-btn").removeClass("hidden");
  }
  jQuery("#allowancehash").text("amounttoken:" + amounttoken / 10 ** 18);
}

async function balanceOfsms() {
  let amount = jQuery("#balanceOfsmsAddress").val();

  let tokensmscontract = new web3.eth.Contract(smsabi, smscontractAddress);

  let amounttoken = await tokensmscontract.methods.balanceOf(amount).call();

  // jQuery("#balanceOfsmshash").text("amounttoken:" + amounttoken/10**18);
}

async function buyTokens() {
  let amount = jQuery("#getTokenAmount").val();

  if (amount < 50) {
    jQuery("#getTokenAmount").val("");
    jQuery("#getvalue_").val("");
    $(".buy-danger").removeClass("hidden");
    $(".buy-danger .danger-message").text("Minimun value must be 50 BUSD");
    return false;
  }

  amount = window.web3.utils.toWei(amount.toString(), "ether");

  let contract = new web3.eth.Contract(abi, contractAddress);
  contract.methods
    .buyTokens(amount)
    .send({
      from: accounts[0],
    })
    .on("transactionHash", async (hash) => {
      $(".buy-success .success-message").text(
        "Successful! Transaction Hash: " + hash
      );
      $(".buy-success").removeClass("hidden");
      $("#getTokenAmount").value("");
      $("#getvalue_").value("");
    });
}

async function approve() {
  let amount = jQuery("#getTokenAmount").val();

  if (amount < 50) {
    jQuery("#getTokenAmount").val("");
    jQuery("#getvalue_").val("");
    $(".buy-danger").removeClass("hidden");
    $(".buy-danger .danger-message").text("Minimun value must be 50 BUSD");
    return false;
  }

  // amount = amount * 1000000000;
  amount = window.web3.utils.toWei(amount.toString(), "ether");
  let Tokencontract = new web3.eth.Contract(busdabi, busdcontractAddress);
  await Tokencontract.methods
    .approve(contractAddress, amount)
    .send({
      from: accounts[0],
    })
    .on("transactionHash", async (hash) => {
      $(".buy-success .success-message").text(
        "Successful! Transaction Hash: " + hash
      );
      $(".buy-success").removeClass("hidden");
      $("#getTokenAmount").value("");
      $("#getvalue_").value("");
    });
}

async function setPercentage() {
  let amount = jQuery("#setPercentage").val();
  let contract = new web3.eth.Contract(abi, contractAddress);
  contract.methods
    .setPercentage(amount)
    .send({
      from: accounts[0],
    })
    .on("transactionHash", async (hash) => {
      jQuery("#sellamount").text("Hash:" + hash);
    });
}

async function _getTokenAmount() {
  try {
    let amount = jQuery("#getTokenAmount").val();

    amount = window.web3.utils.toWei(amount.toString(), "ether");
    let contract = new web3.eth.Contract(abi, contractAddress);
    let getvalue = await contract.methods._getTokenAmount(amount).call();
    jQuery("#getvalue_").val(getvalue / 10 ** 18);
  } catch (error) {
    // User denied account access...
    console.log("error", error);
  }
}
