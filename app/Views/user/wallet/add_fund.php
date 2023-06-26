<?= $this->extend('layouts/user') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-warning text-white me-2">
            <i class="mdi mdi-plus"></i>
        </span> FUND WALLET
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span></span>WALLET <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
        </ul>
    </nav>
</div>

<div class="row">

    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <strong>
                        <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </strong>
                    INFORMATION
                </h4>
                <p class="card-description">
                    Minimum deposit amount is <b>&dollar;5</b> which is equal to <b>1000 credits</b> <br />
                    <small style="font-family: monospace;" class="text-danger">
                        Additional charge of &dollar;1 applies to all deposits below &dollar;50 and &dollar;2 for deposits of &dollar;50 and above.
                    </small>
                </p>
                <p class="card-description">
                    There are three payment methods, select your preferred option and deposit below:
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <strong>
                        PAY WITH CRYPTOCURRENCY
                    </strong>
                </h4>
                <form id="cryptoform" onsubmit="processCrypto(event);" class="forms-sample" action="" method="POST">
                    <?php $validation = \Config\Services::validation(); ?>

                    <div class="form-group">
                        <label for="currency">Currency</label>
                        <select class="form-select" id="currency" name="currency" onchange="populateNetwork(event)" required>
                             <option value="">Select payment currency</option>
                            <option value="usdt">USDT</option>
                            <option value="bnb">BNB</option>
                            <option value="eth">Etherium</option>
                            <option value="btc">Bitcoin</option>
                        </select>
                        <?php if ($validation->getError('currency')) { ?>
                            <div class='alert-danger mt-2'>
                                <?= $error = $validation->getError('currency'); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="currency"></button>
                            </div>
                        <?php } ?>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="network">Network</label>
                        <select class="form-select" id="network" name="network" required>
                             <option value="">Select network</option>
                        </select>
                        <?php if ($validation->getError('currency')) { ?>
                            <div class='alert-danger mt-2'>
                                <?= $error = $validation->getError('currency'); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="currency"></button>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label for="cryptoamount">Amount (USD)</label>
                        <input type="number" min="5" name="cryptoamount" class="form-control" value="<?= old('amount'); ?>" placeholder="Amount in USD" required id="cryptoamount" />
                    </div>

                    <div class="d-flex" style="justify-content: right;">
                        <button type="submit" id="cryptoproceed" class="btn btn-primary">Proceed</button>
                    </div>
                    
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ADD FUNDS</h5>
                          </div>
                          <div class="modal-body">
                            <span id="cryImg" class="w-100 text-center d-block"></span>
                            <form>
                              <div class="mb-1">
                                <label for="walletAddress" onclick="copyText()" class="col-form-label d-inline">Wallet Address 
                                    <span class="float-end rounded mt-1" style="padding: 5px;" data-bs-original-title="Copy wallet address">
                                        <i class="mdi mdi-content-copy"></i>
                                    </span>
                                </label>
                                <input type="text" readonly="true" style="border: none; background: transparent; width: 100%; font-size: 11px; font-family: monospace; padding-top: 0;" name="walletAddress" id="walletAddress">
                                <script>
                                    function copyText() {
                                        // Get the text field
                                        var copyText = document.getElementById("walletAddress");
                                        
                                        // Select the text field
                                        copyText.select();
                                        copyText.setSelectionRange(0, 99999); // For mobile devices
                                        
                                        // Copy the text inside the text field
                                        navigator.clipboard.writeText(copyText.value);
                                        
                                        // Alert the copied text
                                        // alert("Copied the text: " + copyText.value);
                                        Swal.fire({
                                            title: "Wallet Address Copied",
                                            confirmButtonColor: "lightblue"
                                        })
                                    } 
                                </script>
                              </div>
                              <div class="mb-3">
                                <p>
                                    <div id="ten-countdown"></div>
                                </p>
                                <p class="mb-1">
                                    Deposit amount: 
                                    <input type="readonly" style="border: none; background: transparent; width: 50%; font-family: monospace; padding-top: 0;" name="depo" id="depo">
                                </p>
                                <p class="mb-1">
                                    Service fee: 
                                    <input type="readonly" style="border: none; background: transparent; width: 50%; font-family: monospace; padding-top: 0;" name="charges" id="charges">
                                </p>
                                <p class="mb-1">
                                    Total: 
                                    <input type="readonly" style="border: none; background: transparent; width: 50%; font-family: monospace; padding-top: 0;" name="toPay" id="toPay">
                                </p>
                                <p class="mb-1">
                                    Credits: 
                                    <input type="readonly" style="border: none; background: transparent; width: 50%; font-family: monospace; padding-top: 0;" name="numCredits" id="numCredits">
                                </p>
                                <p class="mb-1">
                                    Send: 
                                    <input type="readonly" style="border: none; background: transparent; width: 50%; font-family: monospace; padding-top: 0;" name="send" id="send">
                                </p>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                              <form onsubmit="transactionContinues(event)">
                                  <input type="hidden" name="wallet_to" id="wallet_to" />
                                  <input type="hidden" name="crypto" id="crypto" />
                                  <input type="hidden" name="fee" id="fee" />
                                  <input type="hidden" name="no_of_credits" id="no_of_credits" />
                                  <input type="hidden" name="finalValue" id="finalValue" />
                                <button type="submit" class="btn btn-success w-100 mb-2" id="finalProceed">I have made the payment</button>
                                <button type="button" class="btn btn-danger w-100" onclick="cancelTransaction(event)">Cancel transaction</button>
                              </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <style>
                        #ten-countdown {
                            text-align: center;
                            padding: 5px;
                            color: #004853;
                            font-family: monospace;
                            font-size: 40px;
                            font-weight: bold;
                            text-decoration: none;
                        }
                    </style>
                </form>
                <script>
                    function populateNetwork(event) {
                        let currency = $('#currency').val();
                        $('#network').html(`
                            <option value="">Choose network</option>
                        `);
                        
                        if(currency == 'usdt') {
                            $('#network').append(`
                                <option value="0x024d11aff0a7b496be9f745f84a5bc632cd195c7">BNB smart Chain (BEP20)</option>
                                <option value="0x024d11aff0a7b496be9f745f84a5bc632cd195c7">Ethereum (ERC20)</option>
                                <option value="TJ8mZ1UtN5YDJtPYQ64jeVyMrvxQP3Hu7g">Tron (TRC20)</option>
                                <option value="0x024d11aff0a7b496be9f745f84a5bc632cd195c7">Arbitrum One</option>
                                <option value="bnb165q9dz39mqh789zuuuqwkv22plut6f4nzy9jc9">BNB Beacon Chain (BEP2)</option>
                            `);
                        }
                        if(currency == 'bnb') {
                            $('#network').append(`
                                <option value="0x024d11aff0a7b496be9f745f84a5bc632cd195c7">BNB smart Chain (BEP20)</option>
                                <option value="0x024d11aff0a7b496be9f745f84a5bc632cd195c7">Ethereum (ERC20)</option>
                                <option value="bnb165q9dz39mqh789zuuuqwkv22plut6f4nzy9jc9">BNB Beacon Chain (BEP2)</option>
                            `);
                        }
                        if(currency == 'eth') {
                            $('#network').append(`
                                <option value="0x024d11aff0a7b496be9f745f84a5bc632cd195c7">BNB smart Chain (BEP20)</option>
                                <option value="0x024d11aff0a7b496be9f745f84a5bc632cd195c7">Ethereum (ERC20)</option>
                                <option value="TJ8mZ1UtN5YDJtPYQ64jeVyMrvxQP3Hu7g">Tron (TRC20)</option>
                                <option value="bnb165q9dz39mqh789zuuuqwkv22plut6f4nzy9jc9">BNB Beacon Chain (BEP2)</option>
                                <option value="0x024d11aff0a7b496be9f745f84a5bc632cd195c7">Arbitrum One</option>
                            `);
                        }
                        if(currency == 'btc') {
                            $('#network').append(`
                                <option value="0x024d11aff0a7b496be9f745f84a5bc632cd195c7">BNB</option>
                                <option value="0x024d11aff0a7b496be9f745f84a5bc632cd195c7">Ether</option>
                                <option value="1FveyB4DLXUjx33RGr3qFUQyMGDeUH4FKG">Bitcoin</option>
                            `);
                        }
                    }
                    function calcCredits(cost) {
                        let credits = (cost/5) * 1000;
                        return credits;
                    }
                    function cancelTransaction(event) {
                        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
                                  keyboard: false
                                })
                        
                        if (confirm("Are you sure you want to cancel this transaction?") == true) {
                            myModal.hide()
                            console.log(myModal.hide);
                            Swal.fire({
                                title: "Cancelled by user",
                                confirmButtonColor: "#f96868"
                            });
                        } else {
                        }
                    }
                    function processCrypto(event) {
                        event.preventDefault();
                        var currency = $('#currency').val();
                        var network = $('#network').val();
                        var amountInputted = $('#cryptoamount').val();
                        var amount;
                        var charges;
                        if (amount >= 50) {
                            amount = Number(amountInputted) + 2;
                            charges = 2;
                        } else {
                            amount = Number(amountInputted) + 1;
                            charges = 1;
                        }
                        
                        $.ajax({
                            url: "https://api.coinconvert.net/convert/USD/" + currency + "?amount=" + amount,
                            type: "GET",
                            beforeSend: function() {
                                
                            }, 
                            success: function(data) {
                                var finalValue;
                                if(currency === "usdt") {
                                    finalValue = data.USDT;
                                }
                                if(currency === "bnb") {
                                    finalValue = data.BNB;
                                }
                                if(currency === "eth") {
                                    finalValue = data.ETH;
                                }
                                if(currency === "btc") {
                                    finalValue = data.BTC;
                                }
                                
                                $("#walletAddress").val(network);
                                $("#wallet_to").val(network);
                                $("#crypto").val(currency);
                                $("#fee").val(amountInputted);
                                $("#finalValue").val(finalValue);
                                $("#no_of_credits").val(calcCredits(amountInputted));
                                $("#numCredits").val(calcCredits(amountInputted));
                                $("#exampleModalLabel").html("Deposit " + currency.toUpperCase());
                                $("#cryImg").html(`
                                    <img src="/${network}.jpeg" alt="${currency}" /> <br />
                                    <p>
                                        Scan the QR code with your mobile device.
                                    </p>
                                `);
                                $("#depo").val(`${amountInputted} USD`);
                                $("#charges").val(`${charges} USD`);
                                $("#toPay").val(`${amount} USD`);
                                $("#send").val(`${finalValue} ${currency.toUpperCase()}`)
                                var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
                                  keyboard: false
                                })

                                // var myModal = document.getElementById('exampleModal')
                                myModal.show();
                                function countdown( elementName, minutes, seconds ) {
                                    var element, endTime, hours, mins, msLeft, time;
                                
                                    function twoDigits( n ) {
                                        return (n <= 9 ? "0" + n : n);
                                    }
                                
                                    function updateTimer() {
                                        msLeft = endTime - (+new Date);
                                        if ( msLeft < 1000 ) {
                                            element.innerHTML = "";
                                            myModal.hide();
                                        } else {
                                            time = new Date( msLeft );
                                            hours = time.getUTCHours();
                                            mins = time.getUTCMinutes();
                                            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
                                            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
                                        }
                                    }
                                    element = document.getElementById( elementName );
                                    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
                                    updateTimer();
                                }
                                countdown( "ten-countdown", 10, 0 );
                            }
                        });
                    }
                    function transactionContinues(event) {
                        event.preventDefault();
                        var wallet_to = $("#wallet_to").val();
                        var currency = $("#crypto").val();
                        var amount_usd = $("#fee").val();
                        var amount_crypto = $("#finalValue").val();
                        var credits = $("#no_of_credits").val();
                        
                        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
                            keyboard: false
                        })
                        $.ajax({
                            url: "/wallet/add_fund",
                            type: "POST",
                            data: {
                                'wallet_to': wallet_to,
                                'currency': currency,
                                'amount_usd': amount_usd,
                                'amount_crypto': amount_crypto,
                                'credits': credits,
                                'username': '<?= $username; ?>'
                            },
                            beforeSend: function() {
                                
                            }, 
                            success: function(data) {
                                console.log(data.status)
                                // if(data.status == 'success') {
                                    Swal.fire({
                                        title: "Success! await confirmation",
                                        confirmButtonColor: "green"
                                    });
                                // } else {
                                    // Swal.fire({
                                    //     title: "Error!",
                                    //     confirmButtonColor: "#f96868"
                                    // });
                                // }
                                myModal.hide();
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>