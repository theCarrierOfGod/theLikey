<?= $this->extend('layouts/user') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-success text-white me-2">
            <i class="mdi mdi-view-list"></i>
        </span> TASKS
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span></span>Tasks <i class="mdi mdi-alert-circle-outline icon-sm text-success align-middle"></i>
            </li>
        </ul>
    </nav>
</div>

<div class="row justify-content-start">
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-4">
                <h4 class="card-title mb-4">
                    <strong>
                        <?= $tasks->title; ?>
                    </strong>
                    <b class="text-info float-end">
                        <?= $tasks->cpu; ?><i class="mdi mdi-coin"></i>
                    </b>
                </h4>
                <div class="card-body p-0">
                    <h5>
                        <?= strtoupper($tasks->title); ?>
                        
                    </h5>
                    <p>
                        <?= nl2br($tasks->description); ?>
                    </p>
                    <a class="btn btn-gradient-success me-2" id="executeTask"> <i class="mdi mdi-checkbox-marked-outline "></i> &nbsp;Verify Task </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin strech-card">
        <div class="card">
            <div class="card-body p-4">
                <h5>
                    INSTRUCTIONS
                </h5>
                <p>
                    <b style="margin-top: 25px;">
                        <ol>
                            <li>
                                Complete the task
                            </li>
                            <li>
                                Click the confirm button
                            </li>
                            <li>
                                Add a screenshot of the image below
                            </li>
                            <li>
                                Submit and await confirmation
                            </li>
                        </ol>
                    </b>
                </p>
            </div>
        </div>
    </div> 
    <div id="verifyTaskForm" class="col-md-8 grid-margin stretch-card" style="display: none;">
        <div class="card">
            <div class="card-body p-4">
                <form enctype="multipart/form-data" id="uploadProofForm" onsubmit="confirmTask(event);">
                    <h4>
                        ADD PROOF OF COMPLETION
                    </h4>
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="amount">
                                    Add image
                                </label>
                                <input type="file" accept="image/*" name="proof" class="form-control" placeholder="ADD PROOF OF COMPLETION" required id="proof" />
                                <div id="proofError"></div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-success">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="uploaded_image"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var count = 0;
    var button = document.getElementById("executeTask");
    button.addEventListener("click", nextStep);
    function nextStep() {
        document.getElementById("verifyTaskForm").style.display = "block";
        button.style.display = "none";
    }
    function confirmTask(event) {
        event.preventDefault();
        $.ajax({  
            url:"",
            method:"POST",  
            data:new FormData($("#uploadProofForm")[0]),  
            contentType: 'application/json',  
            cache: false,  
            processData:false, 
            beforeSend: function() {
                $("#uploaded_image").html('<img src="/spinner.webp" alt=" " width="35" height="35" /> uploading...');
            },
            success:function(res) { 
                let data = JSON.parse(res);
                $('#uploaded_image').html(data.proof);
                console.log(data)
            }  
        }); 
    }
</script>

<?= $this->endSection() ?>