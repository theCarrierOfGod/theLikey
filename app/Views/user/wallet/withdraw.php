<?= $this->extend('layouts/user') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-warning text-white me-2">
            <i class="mdi mdi-plus"></i>
        </span> WITHDRAW FUNDS
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

    <div class="col-lg-9 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <strong>
                        <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </strong>
                    INFORMATION
                </h4>
                <p class="card-description">
                    Minimum Withdrawal amount is <b>&dollar;2</b> which is equal to <b>1000 credits</b> <br />
                    <small style="font-family: monospace;" class="text-success">
                         &dollar;1 is equivalent to 500 credits from your purchased credits balanace only (i.e purchased and through tasks completed)
                       
                    </small>
                </p>
                <p class="card-description">
                    Withdrawal is strictly in USDT
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <strong>
                        WITHDRAW WITH CRYPTOCURRENCY
                    </strong>
                </h4>
                Current purchased credits: 
                <strong>
                    <?= $user['deposited']; ?>
                </strong>
            </div>
            <div class="card-body">
                <form id="cryptoform" onsubmit="processCrypto(event);" class="forms-sample" action="" method="POST">
                    <?php $validation = \Config\Services::validation(); ?>
                    
                    <div class='alert-danger mt-2 p-2 mb-4' style="display: none;" id="eBox">
                        <b>
                            <span id="errorMessage" class="p-2"></span>
                        </b>
                    </div>
                    <div class='alert-success mt-2 p-2 mb-4' style="display: none;" id="sBox">
                        <b>
                            <span id="successMessage" class="p-2"></span>!
                        </b>&nbsp; Await disbursement
                    </div>

                    <div class="form-group">
                        <label for="currency">Currency</label>
                        <select class="form-select" id="currency" name="currency" onchange="populateNetwork(event)" required>
                             <option value="">Select payment currency</option>
                            <option value="usdt">USDT</option>
                            <!--<option value="bnb">BNB</option>-->
                            <!--<option value="eth">Etherium</option>-->
                            <!--<option value="btc">Bitcoin</option>-->
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
                        <label for="cryptoaddress">Wallet Address</label>
                        <input type="text" min="5" name="cryptoaddress" class="form-control" value="<?= old('amount'); ?>" placeholder="Your wallet address" required id="cryptoaddress" />
                    </div>

                    <div class="form-group">
                        <label for="creditamount">Credit Amount</label>
                        <input type="number" min="5" name="creditamount" class="form-control" value="<?= old('amount'); ?>" placeholder="Credit Amount" required id="creditamount" />
                        <small id="creditError" style="color: orangered"></small>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="cryptoamount">Amount (USD)</label>
                        <input type="number" name="cryptoamount" disabled class="form-control" placeholder="Amount in USD" required id="cryptoamount" />
                        <small id="amountError" style="color: orangered"></small>
                    </div>

                    <div class="d-flex" style="justify-content: right;">
                        <button type="submit" id="cryptoproceed" class="btn btn-primary">Proceed</button>
                    </div>
                </form>
            </div>
                
                <script>
                    function populateNetwork(event) {
                        let currency = $('#currency').val();
                        $('#network').html(`
                            <option value="">Choose network</option>
                        `);
                        
                        if(currency == 'usdt') {
                            $('#network').append(`
                                <option value="BNB smart Chain (BEP20)">BNB smart Chain (BEP20)</option>
                                <option value="Ethereum (ERC20)">Ethereum (ERC20)</option>
                                <option value="Tron (TRC20)">Tron (TRC20)</option>
                                <option value="Arbitrum One">Arbitrum One</option>
                                <option value="BNB Beacon Chain (BEP2)">BNB Beacon Chain (BEP2)</option>
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
                    
                    $(document).ready(function() {
                        $("#creditamount").on("keyup", function() {
                            let cost = $("#creditamount").val();
                            
                            if(cost < 1000) {
                                $("#creditError").html("minimum withdrawal amount is 1000");
                                $("#cryptoproceed").attr('disabled', true);
                            } else {
                                    if(cost % 500 == 0) {
                                        $("#creditError").html("");
                                        $("#cryptoproceed").attr('disabled', false);
                                        if(cost > <?= $user['deposited']; ?>) {
                                            $("#cryptoproceed").attr('disabled', true);
                                            $("#creditError").html("insufficient credits");
                                        }
                                    } else {
                                        $("#creditError").html("amount must be a factor of 500");
                                        $("#cryptoproceed").attr('disabled', true);
                                    }
                            }
                            let credits = (cost/500);
                            $("#cryptoamount").val(credits);
                        });
                    });
                    
                    function processCrypto(event) {
                        event.preventDefault();
                        $("#cryptoproceed").attr('disabled', true);
                        var currency = $('#currency').val();
                        var network = $('#network').val();
                        var wallet = $("#cryptoaddress").val();
                        var credits = $('#creditamount').val();
                        var amount = $('#cryptoamount').val();
                        
                        if(credits > <?= $user['deposited']; ?>) {
                            $("#cryptoproceed").attr('disabled', false);
                            $("#creditError").html("insufficient credits");
                        } else if(credits % 500 != 0) {
                            $("#cryptoproceed").attr('disabled', false);
                            $("#creditError").html("amount must be a factor of 500");
                        } else {
                            $.ajax({
                                url: '/wallet/withdraw',
                                type: 'POST',
                                data: {
                                    currency: currency,
                                    network: network,
                                    wallet: wallet,
                                    credits: credits,
                                    amount: amount
                                },
                                header: {
                                    'Content-Type': 'application/json'
                                },
                                beforeSend: function() {
                                    $("#cryptoproceed").html('processing...');
                                    $("#eBox").css('display', 'none');
                                    $("#sBox").css('display', 'none');
                                },
                                success: function(res) {
                                    let data = JSON.parse(res);
                                    $("#cryptoproceed").html('Proceed');
                                    if(data.status == 'success') {
                                        $("#successMessage").html(data.status);
                                        $("#sBox").css('display', 'block');
                                        $("#eBox").css('display', 'none');
                                        $("#cryptoform").trigger("reset");
                                    } else {
                                        $("#sBox").css('display', 'none');
                                        $("#eBox").css('display', 'block');
                                        $("#errorMessage").html(data.message);
                                    }
                                    window.scrollTo(0, 100);
                                    $("#cryptoproceed").attr('disabled', false);
                                },
                                error: function(err) {
                                    $("#cryptoproceed").html('Proceed');
                                }
                            })
                        }
                    }
                </script>
            </div>
            <div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>